@extends('layouts.master_page')

@section('titulo','Perfil')

@section('conteudo')
    <section class="section-user-perfil">
        <div class="cards-perfil-container">
            <div class="cards-perfil-content">
                <div class="card-perfil" id="card-status">
                    <div class="upCard">
                        ◉ Online
                    </div>
                    <div class="downCard">
                        Status
                    </div>
                </div>
                <div class="card-perfil">
                    <div class="upCard">
                        0
                    </div>
                    <div class="downCard">
                        Solicitações
                    </div>
                </div>
                <div class="card-perfil">
                    <div class="upCard">
                        0
                    </div>
                    <div class="downCard">
                        Perfis Visitados
                    </div>
                </div>
                <div class="card-perfil">
                    <div class="upCard">
                        0
                    </div>
                    <div class="downCard">
                        Serviços
                    </div>
                </div>
	        </div>
        </div>
        <div class="user-perfil-container">
        
            {{-- LADO DIREITO DA SECTION PERFIL --}}
            <div class="right-perfil-content">

                {{-- FOTO DE PERFIL --}}
                <div class="user-perfil-picture" style="text-align: center">
                    foto do usuário
                </div>

                {{-- BOTÃO DE MUDAR A FOTO DE PERFIL --}}
                <button class="btnPerfil change-user-picture" onclick="#">Mudar foto de perfil</button>
            </div>

            {{-- LADO ESQUERDO DA SECTION PERFIL --}}
            <div class="left-perfil-content">

                {{-- FORMULÁRIO PARA MUDAR AS INFORMAÇÕES DO USUÁRIO --}}
                <h3 class="perfil-title">Informações Pessoais</h3>
                <form id="frmAtualizaPerfil" action="#" method="POST">
                    <label for="nome" class="cadLabel">Nome</label><br>
                    <input type="text"  placeholder="Nome Completo" name='nomeUsuario' class="cadInput" id="nome"required>
                    <label for="email" class="cadLabel">Email</label><br>
                    <input type="email" placeholder="voltaic@email.com" name="email" class="cadInput" id="email" required>
                    <label for="senha" class="cadLabel">Senha</label><br>
                    <input type="password" placeholder="✱✱✱✱✱✱✱✱" name="senha" class="cadInput" id="senha" required>
                    <input type='submit' class="btnPerfil atualizar-informacoes" value="Atualizar Minhas Informações"> 
                </form>
            </div>
        </div>
    </section>
@stop