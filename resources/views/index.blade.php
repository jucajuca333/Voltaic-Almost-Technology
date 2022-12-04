@extends('layouts.master_page')

@section('internalStyle')
    <style>
        #navbar {
            background-color: #ffffff00;
        }
    </style>
@stop

@section('titulo', 'Bem-vindo à Voltaic Technology')

@section('conteudo')
    <section id="bg-cadastro" class="hero">
        <div class="leftSide" style="margin-top: 3rem;">
            <h1 class="heroText" id="heroText">Entre agora no mundo da <highlight>energia solar</highlight> como nunca antes!
                </p>
        </div>
        <div class="rightSide" style="margin-top: 3rem;">
            <div class="cad">
                <div class="cadContent">
                    <h2 class="cadTitle">Cadastre-se e <highlight>realize uma solicitação</highlight> quando quiser!</h2>

                    <form action="cadastro" id="formCadIndex" class="cadForm">
                        @csrf
                        <label for="emailInput" class="cadLabel">Email</label><br>
                        <input type="email" placeholder="voltaic@email.com" name="emailInput" class="cadInput"
                            id="emailInput" require>
                        <label for="pswInput" class="cadLabel">Senha</label><br>
                        <input type="password" placeholder="✱✱✱✱✱✱✱✱" name="pswInput" class="cadInput" id="pswInput"
                            require>

                        <div id="modalCad" class="modal">
                            <div class="modal-content">
                                <span id="closeModal" class="close">&times;</span>
                                <div class="modal-title">
                                    <h1>Como você deseja se cadastrar...</h1>
                                </div>
                                <div class="modal-card">
                                    <div class="user-card">
                                        <div class="user-card-title">Pessoa<br>
                                            <highlight>Física</highlight>
                                        </div>
                                        <div class="cad-card-text">Seja um usuário contratante de serviços</div>
                                        
                                            <a href="{{url('cadastro/create')}}">
                                                <button type="submit" class="btn card-btn" id="btnContinuePF">Continuar</button>
                                            </a>
                                        
                                    </div>
                                    <div class="user-card">
                                        <div class="user-card-title">Pessoa<br>
                                            <highlight>Jurídica</highlight>
                                        </div>
                                        <div class="cad-card-text">Seja uma empresa contratante de serviços</div>
                                        
                                            <a href="{{url('cadastro/create')}}">
                                                <button type="submit" class="btn card-btn" id="btnContinuePJ">Continuar</button>
                                            </a>
                                        
                                    </div>
                                    <div class="user-card">
                                        <div class="user-card-title">Prestador de <highlight>Serviços</highlight>
                                        </div>
                                        <div class="cad-card-text">Seja uma empresa instaladora ou provedora</div>
                                        
                                            <a href="{{url('cadastro/create')}}">
                                                <button type="submit" class="btn card-btn" id="btnContinuePS">Continuar</button>
                                            </a>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <button class="btn btnMargin" id="continueCad">Continuar cadastro</button>
                    <p class="cadLogin">Já tem uma conta? <a class="login" href="/login">Faça login.</a></p>
                </div>
            </div>
        </div>
    </section>

    <section class="section-cards">
        <div class="topSide">
            <h2 class="title">Por que utilizar a nossa plaforma?</h2>
        </div>
        <div class="bottomSide">
            <div class="home-card">
                <div class="cardContent">
                    <img class="card-check" src="../img/check.png" alt="check">
                    <h3 class="card-title">Conexão Direta</h3>
                    <p class="card-text">Usuários contratantes e provedores de serviço comunicam-se entre si de maneira
                        prática</p>
                    <figure class="figureHome">
                        <img class="card-image" src="../img/conections.png" alt="Ícone de um conexões">
                    </figure>
                </div>
            </div>
            <div class="home-card">
                <div class="cardContent">
                    <img class="card-check" src="../img/check.png" alt="check">
                    <h3 class="card-title">Apoio ao Meio Ambiente</h3>
                    <p class="card-text">Contribua com a ampliação de uma das maiores fontes de energia limpa e sustentável
                    </p>
                    <figure class="figureHome">
                        <img class="card-image" src="../img/meioambiente.png" alt="Ícone do planeta terra">
                    </figure>
                </div>
            </div>
            <div class="home-card">
                <div class="cardContent">
                    <img class="card-check" src="../img/check.png" alt="check">
                    <h3 class="card-title">Livre Escolha de Contato</h3>
                    <p class="card-text">Decida qual a melhor forma para se comunicar com provedores de serviços</p>
                    <figure class="figureHome">
                        <img class="card-image" src="../img/share.png" alt="Ícone de uma corrente quebrada">
                    </figure>
                </div>
            </div>
        </div>
    </section>
    <section id="sobreNos" class="section-aboutUs">
        <div class="topSide abtTopSide">
            <div class="leftSide abtLeftSide">
                <h2 class="title abtTitle">Sobre nós</h2>
                <div class="aboutUs-text">Somos uma equipe de TCC do curso técnico em Desenvolvimento de Sistemas na Etec
                    Drª Ruth Cardoso, composta por Bruno Santana, Felipe Massola, João Gabriel, José Felipe e Kattryel
                    Rezende orientados pelos professores Charles Barros e Daniela Uebele.</div>
            </div>
            <div class="rightSide">
                <img class="abtPic" src="../img/voltaic-equipe.jpg"
                    alt="foto da equipe criadora da plataforma Voltaic Technology">
            </div>
        </div>
    </section>
@stop

@section('bottomLinks')
    <script type="text/javascript" src="../js/nav.js"></script>
    <script type="text/javascript" src="../js/modal.js"></script>
    <script type="text/javascript" src="../js/getCadData.js"></script>
    <script type="text/javascript" src="../js/achorLinks.js"></script>
@stop
