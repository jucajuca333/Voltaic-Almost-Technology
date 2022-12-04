<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <link rel="shortcut icon" href="../img/favicon.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Solicitação</title>
</head>

<body>
    <nav id="navbar">
        <div class="logo">
            <a href="/"><img src="../img/voltaic_logo_secundario_fundo_preto.png" alt="logo da Voltaic Technology"></a>
        </div>
        <div class="nav-items">
            <ul class="nav-links">
                <li><a href="/">Página inicial</a></li>
                <li><a href="/solicitacao">Solicite agora</a></li>
                <li><a href="/buscar-provedores">Provedores</a></li>
                <a href="/login"><button class="btn">Entrar</button></a>
            </ul>
        </div>
    </nav>
    <main>
        <section class="section-solicitacao">
            <div class="solic-container">
                <div class="solic-content">
                    <h1 class="cadTitle solicTitle">Nova Solicitação</h1>
                    <div class="solic-text-container">
                        <p class="card-text solic-text">Realize um pedido de orçamentos visível para todos provedores ativos na plataforma!</p>
                    </div>

                    <div class="solic-section-title">
                        <h2>Dados do Contratante</h2>
                    </div>
                    <form>
                        <div class="solic-section">

                            <div class="solic-alinhado">
                                <label for="nome-solic" class="cadLabel labelSolic">Responsável pela Solicitação</label>
                                <input type="text" placeholder="Insira o nome completo" name="nome-solic" class="cadInput loginInput wInputSec2" id="nome-solic" required>
                            </div>
                            <div class="solic-alinhado">
                                <label for="tel-solic" class="cadLabel labelSolic">Telefone</label>
                                <input type="text" placeholder="(00) 00000-0000" name="tel-solic" class="cadInput loginInput wInputSec1" id="tel-solic" required>
                            </div>
                        </div>

                        <div class="solic-section-title">
                            <h2>Endereço</h2>
                        </div>

                        <div class="solic-section">
                            <div class="solic-alinhado">
                                <label for="cep-solic" class="cadLabel labelSolic">CEP</label>
                                <input type="text" placeholder="00000-000" name="cep-solic" class="cadInput loginInput w55" id="cep-solic" required>
                            </div>
                            <div class="solic-alinhado">
                                <label for="estados-solic" class="cadLabel labelSolic">UF</label>
                                <select name="estados-solic" class="cadselect-in cadInput" id="estados-solic" required>
                                    <option selected disabled style="color:var(--placeholder)">Selecione</option>
                                    <option value="AC">Acre</option>
                                    <option value="AL">Alagoas</option>
                                    <option value="AP">Amapá</option>
                                    <option value="AM">Amazonas</option>
                                    <option value="BA">Bahia</option>
                                    <option value="CE">Ceará</option>
                                    <option value="DF">Distrito Federal</option>
                                    <option value="ES">Espírito Santo</option>
                                    <option value="GO">Goiás</option>
                                    <option value="MA">Maranhão</option>
                                    <option value="MT">Mato Grosso</option>
                                    <option value="MS">Mato Grosso do Sul</option>
                                    <option value="MG">Minas Gerais</option>
                                    <option value="PA">Pará</option>
                                    <option value="PB">Paraíba</option>
                                    <option value="PR">Paraná</option>
                                    <option value="PE">Pernambuco</option>
                                    <option value="PI">Piauí</option>
                                    <option value="RJ">Rio de Janeiro</option>
                                    <option value="RN">Rio Grande do Norte</option>
                                    <option value="RS">Rio Grande do Sul</option>
                                    <option value="RO">Rondônia</option>
                                    <option value="RR">Roraima</option>
                                    <option value="SC">Santa Catarina</option>
                                    <option value="SP">São Paulo</option>
                                    <option value="SE">Sergipe</option>
                                    <option value="TO">Tocantins</option>
                                </select>
                            </div>
                            <div class="solic-alinhado">
                                <label for="endereco-solic" class="cadLabel labelSolic">Endereço</label>
                                <input type="text" name="endereco-solic" class="cadInput loginInput wInputSec1" id="endereco-solic" required>
                            </div>
                        </div>
                        <div class="solic-section2">
                            <div class="solic-alinhado">
                                <label for="cidade-solic" class="cadLabel labelSolic">Cidade</label>
                                <input type="text" name="cidade-solic" class="cadInput loginInput wInputSec1" id="cidade-solic" required>
                            </div>
                            <div class="solic-alinhado">
                                <label for="bairro-solic" class="cadLabel labelSolic">Bairro</label>
                                <input type="text" name="bairro-solic" class="cadInput loginInput" id="bairro-solic" required>
                            </div>
                            <div class="solic-alinhado">
                                <label for="numero-solic" class="cadLabel labelSolic">Número</label>
                                <input type="text" name="numero-solic" class="cadInput loginInput" id="numero-solic" required>
                            </div>
                        </div>

                        <div class="solic-section-title">
                            <h2>Informações da Solicitação</h2>
                        </div>

                        <div class="solic-section">
                            <div class="solic-alinhado">
                                <label for="titulo-solic" class="cadLabel labelSolic">Título</label>
                                <input type="text" placeholder="Ex: Instalação de Painel Solar" name="titulo-solic" class="cadInput loginInput wInputSec2" id="titulo-solic" required>
                            </div>
                            <div class="solic-alinhado">
                                <label for="data-solic" class="cadLabel labelSolic">Data limite para o orçamento</label>
                                <input type="date" name="titulo-solic" class="cadInput loginInput wInputSec1" id="data-solic" required>
                            </div>
                        </div>
                        <div class="solic-section2">
                            <div class="solic-alinhado">
                                <label for="desc-solic" class="cadLabel labelSolic">Descrição</label>
                                <textarea placeholder="Insira mais informações sobre o processo a ser orçamentado" name="desc-solic" class="cadInput loginInput wInputSec1" id="desc-solic" required rows="4" cols="30"></textarea>
                            </div>
                        </div>
                        <div class="solic-section2">
                            <div class="solic-alinhado">
                                <label for="midia-solic" class="cadLabel labelSolic">Mídia</label>
                                <input type="file" name="midia-solic" class="cadInput loginInput wInputSec1" id="midia-solic" required>
                            </div>
                        </div>
                        <div class="solic-btn">
                            <input type="submit" class="btn" value="Confirmar Solicitação">
                        </div>
                </div>
            </div>
            </form>
        </section>
    </main>
    <footer>
        <div class="social">
            <a href="https://www.instagram.com/voltaic.technolgy/" target="_blank"><i class="fab fa-instagram"></i></a>
            <a href="https://github.com/massoladb/voltaic-reformed" target="_blank"><i class="fab fa-github"></i></a>
            <a href="https://twitter.com/VoltaicDS" target="_blank"><i class="fab fa-twitter"></i></a>
            <a href="https://www.facebook.com/100088201811934/" target="_blank"><i class="fab fa-facebook"></i></a>
        </div>

        <ul class="list">
            <li><a href="/">Página Inicial</a></li>
            <li><a href="/#sobreNos">Sobre</a></li>
            <li><a href="#">Termos de Uso</a></li>
            <li><a href="#">Política de privacidade</a></li>
        </ul>

        <p class="copyright">Voltaic Technology © 2022</p>
    </footer>
    <script type="text/javascript" src="../js/cadUser.js"></script>
    <script type="text/javascript" src="../js/showCadData.js"></script>
</body>

</html>