<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModelUsuario;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;


class ControllerUsuario extends Controller
{
    private $objUsuario;

    public function __construct()
    {
        $this->objUsuario = new ModelUsuario();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {  
        if(!Session::has('login'))
        {
            return view('login');
        }
        else
        {
            return view('perfilusuario');
        }
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cadastro');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'email'=>'required|email',
            'senha'=>'required|between:6,12',
            'endereco'=>'required'
        ]);

        $dados = $this->objUsuario->where(['nm_email'=>$request->email])
                                  ->get();
        
        if($dados->count() != 0)
        {
            return redirect('cadastro')->with('erro_bd','Já existe um usuário com o mesmo email!');
        }

        $cadUsuario = $this->objUsuario->create([
            'nm_email'=>$request->email,
            'nm_senha'=>Hash::make($request->senha),
            'nm_endereco'=>$request->endereco
        ]);
        if($cadUsuario)
        {
            return redirect('login')->with('msg','Usuário cadastrado com sucesso!');
        }
    }

    public function efetuaLogin(Request $request)
    {
        $this->validate($request,[
            'email'=>'required',
            'senha'=>'required'
        ]);

        $usuario = $this->objUsuario->firstWhere(['nm_email'=>$request->email]);
        if (!$usuario) {
            return redirect('login')->with('erro_bd','Usuário não cadastrado!');
        }

        if (!Hash::check($request->senha, $usuario->nm_senha)) 
        {
            return redirect('login')->with('erro_bd','Senha incorreta!');
        }

        Session::put('login', 'ativo');
        Session::put('email', $usuario->nm_email);

        return redirect('login');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
