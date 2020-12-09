<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\instituicao;
use App\Models\usuario;
use Illuminate\Http\Request;


class usuarioController extends Controller
{
    public function logarSistema(request $request, instituicao $instituicao)
    {

        $login = $request->login;
        $senha = $request->senha;
        $idinstituicao = $instituicao->id;
       

        //$usuario = $instituicao->usuario::where('login', $login)->where('senha', $senha)->where('idinstituicao', $idinstituicao)->first();
        $usuario = instituicao::find($idinstituicao)->usuario->where('login', $login)->where('senha', $senha)->first();
        

      //  dd($usuario);
                // dd($empresa);
            if ($usuario) {

                 //dados do usuario
                $_SESSION['id_usuario']    = $usuario->id;
                $_SESSION['login_usuario'] = $usuario->login;
                $_SESSION['nome_usuario']  = $usuario->nome;
                $_SESSION['nivel_usuario'] = $usuario->nivel;
                $_SESSION['inst_id']       = $instituicao->id;
                $_SESSION['inst_nome']     = $instituicao->instituicao;

                if ($_SESSION['nivel_usuario'] == '1') {
                    $_SESSION['nivel_usuario_desc'] = 'Adminstrador';
                } else if ($_SESSION['nivel_usuario'] == '2') {
                    $_SESSION['nivel_usuario_desc'] = 'Usuário';
                }

                if ($_SESSION['nivel_usuario'] != '') {
                    return view('dashboard')->with('usuarios', $usuario);
                }
            } else {
                echo "<script language='javascript'> window.alert('Dados Incorretos!') </script>";
               // return redirect()->route('telasenha',$idinstituicao);
            }
       
    }

    public function logout()
    {
        @session_start();
        @session_destroy();
        return view('index');
    }

    public function index()
    {
        
        $empresa = instituicao::orderby('id', 'desc')->paginate();
        return view('usuario.index_usuario')->with('instituicao', $empresa);
    }

    public function lista($id)
    {
        @session_start();
        $id=$_SESSION['inst_id'];
        $empresa = instituicao::where('id',$id)->first();
        $usuarios = $empresa->usuario()->get(); //Get() retorna a lista dos objets 
      
        if ($empresa){
           return view('usuario.index_usuario', ['usuarios' => $usuarios]); //repassando a lista de usuÃ¡rio para blade
         }
                 
    }

    public function edit(usuario $id)
    {
        return view('usuario.edit_usuario', ['item' => $id]);
    }
    public function create()
    { 
        return view('usuario.create_usuario');
    }
    public function insert(Request $request)
    {
        
        $tabela = new usuario();
        $tabela->nome = $request->nome;
        $tabela->email = $request->email;
        $tabela->cpf = $request->cpf;
        $tabela->telefone = $request->telefone;
        $tabela->endereco = $request->endereco;
        $tabela->instituicao = $request->instituicao;
        $tabela->nivel = $request->nivel;
        $tabela->login = 'teste';
        $tabela->bloqueado = 1;
        $tabela->senha = '123';

        $itens = usuario::where('cpf', '=', $request->cpf)->count();
        if ($itens > 0) {
            echo "<script language='javascript'> window.alert('Registro já Cadastrado!') </script>";
            return view('usuario.create_usuario');
        }

       $tabela->save();

       return redirect()->route('usuario.index_usuario_lista');
        
    }
}
