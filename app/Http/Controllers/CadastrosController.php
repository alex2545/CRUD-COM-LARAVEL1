<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CadastrosController extends Controller
{
    public function list(){
        $list = DB::select('SELECT * FROM usuario');
        return view('cadastros.list',['list'=>$list]);

    }
    public function add(){
        return view('cadastros.add');
        
    }
    public function addAction(Request $request){
        if($request->filled('nome')){
            $nome = $request->input('nome'); // Corrigido para nome
            $email = $request->input('email'); // Corrigido para email
            $cpf = $request->input('cpf'); // Corrigido para cpf
            $descricao = $request->input('descricao'); // Corrigido para descricao
            $preco = $request->input('preco'); // Corrigido para preco
    
            DB::insert('INSERT INTO usuario(nome,email,cpf,descricao,preco)VALUES(:nome,:email,:cpf,:descricao,:preco)', [
                'nome' => $nome,
                'email' => $email,
                'cpf' => $cpf,
                'descricao' => $descricao,
                'preco' => $preco
            ]);
    
            return redirect()->route('cadastros.list'); // Volta para a página de listagem
        } else {
         return redirect()->route('cadastros.list')->with('warning','VOCE NAO PREENCHEU O TITULO'); 
        }
    }
    public function edit($id){
        $data = DB::select('SELECT * FROM usuario WHERE id = :id',[
            'id' =>$id
        ]);
        if(count($data)>0){
         return view('cadastros.edit',['data'=>$data[0]]);
        }else{
            return redirect()->route('cadastros.list');

        }
        
    }
    public function editAction(Request $request, $id){
        if($request->filled('nome')){
            $nome = $request->input('nome');
            $email = $request->input('email');
            $cpf = $request->input('cpf');
            $descricao = $request->input('descricao');
            $preco = $request->input('preco');
    
            $data = DB::select('SELECT * FROM usuario WHERE id = :id', ['id' =>$id]);
            if(count($data) > 0){
                DB::update('UPDATE usuario SET nome = :nome, email = :email, cpf = :cpf, descricao = :descricao, preco = :preco WHERE id = :id', [
                    'nome' => $nome,
                    'email' => $email,
                    'cpf' => $cpf,
                    'descricao' => $descricao,
                    'preco' => $preco,
                    'id' => $id
                ]);
                
            }
            return redirect()->route('cadastros.list');
        } else {
            return redirect()->route('cadastros.list')->with('warning', 'VOCÊ NÃO PREENCHEU TODOS OS CAMPOS OBRIGATÓRIOS');
        }
    }
    
    public function del($id){
        DB::delete('DELETE FROM usuario WHERE id = :id',[
            'id'=>$id
        ]);
        return redirect()->route('cadastros.list');
    }
    public function done(){
        
    }


}
