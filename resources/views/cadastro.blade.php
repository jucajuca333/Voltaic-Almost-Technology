@extends('layouts.master_page')

@section('titulo','Cadastro')

@section('conteudo')
        <section class="sectionCad">
            <div class="cadContainer">
                <div class="cadContent">
                    @if (isset($errors) && count($errors) > 0)
                        @foreach ($errors->all() as $erro)
                            {{$erro}}<br>
                        @endforeach
                    @endif

                    @if (session('erro_bd'))
                        <p>{{session('erro_bd')}} </p>
                    @endif
                    
                    <form name="frmCadastro" id="frmCadastro" class="cadForm" method="POST" action="{{url('login')}}">
                        @csrf
                        <h2 class="cadTitle cad-screen-title">Cadastro</h2>

                        <label for="email" class="cadLabel">Email</label><br>
                        <input type="email" placeholder="voltaic@email.com" name="email" class="cadInput" id="email" required>

                        <label for="senha" class="cadLabel">Senha</label><br>
                        <input type="password" placeholder="✱✱✱✱✱✱✱✱" name="senha" class="cadInput" id="senha" required>

                        <label for="tipo_usuario" class="cadLabel">Tipo de usuário</label><br>
                        <select name="tipo_usuario" class="cadselect-in" id="tipo_usuario" required>
                            <option value="0" selected disabled>Selecione o tipo de usuário</option>
                            <option value="1">Pessoa Física</option>
                            <option value="2">Pessoa Jurídica</option>
                            <option value="3">Prestador de Serviços</option>
                        </select>

                        <label for="endereco" class="cadLabel">Endereço</label><br>
                        <input type="text" name="endereco" class="cadInput" id="endereco" required>
                        
                        <button type="submit" class="btn btnCadastrar">Enviar
                        </button>
                    </form>

                    <p class="cadLogin">Já tem uma conta? <a class="login" href="/login">Faça login.</a></p>
                </div>
            </div>
        </section>

    <script type="text/javascript" src="../js/cadUser.js"></script>
    <script type="text/javascript" src="../js/showCadData.js"></script>
@stop