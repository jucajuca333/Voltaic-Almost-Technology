@extends('layouts.master_page')

@section('titulo','Login')

@section('conteudo')
        <section class="sectionLogin">
            <div class="leftSide">
                <picture>
                    <source src="../img/painel_solar.png">
                    <img src="../img/painel_solar.png" alt="Painel Solar" id="img-login">
                </picture>
            </div>
            <div class="rightSide rSide">
                <div class="loginContainer">
                    <div class="loginContent">
                        @if (isset($errors) && count($errors) > 0)
                        @foreach ($errors->all() as $erro)
                            {{$erro}}<br>
                        @endforeach

                    @endif

                    @if (session('msg'))
                        <p>{{session('msg')}}</p>
                    @endif

                    @if (session('erro_bd'))
                        <p>{{session('erro_bd')}} </p>
                    @endif

                        <h3 class="cadTitle loginTitle">Bem-Vindo Novamente!</h3>
                        <form id="frmLogin" class="cadForm" method="POST" action="{{url('perfil')}}">
                            @csrf
                            <label for="email" class="cadLabel">Email</label><br>
                            <input type="email" placeholder="voltaic@email.com" name="email" class="cadInput loginInput" id="email" required>
                            <label for="senha" class="cadLabel">Senha</label><br>
                            <input type="password" placeholder="✱✱✱✱✱✱✱✱" name="senha" class="cadInput loginInput" id="senha" required>
                            <button type="submit" class="btn btnCadastrar btnLogin">Entrar</button>
                        </form>
                        <p class="cadLogin">Não tem uma conta? <a class="login" href="/cadastro">Cadastre-se agora.</a></p>
                    </div>
                </div>
            </div>
        </section>
@stop