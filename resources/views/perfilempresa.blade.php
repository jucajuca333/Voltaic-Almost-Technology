@extends('layouts.master_page')

@section('titulo','Perfil - Empresa')

@section('conteudo')
        <section class="section-prf-empresa">
            <div class="prf-empresa-container">
                <div class="prf-empresa-content">
                    <div class="prf-lSide">
                        <picture>
                            <source src="../img/banner-perfil-empresa.jpg">
                            <img src="../img/banner-perfil-empresa.jpg" alt="Banner da Empresa" class="banner-sample">
                        </picture>
                        <div class="prf-info">
                            <h2 class="prf-info-title">Sobre o provedor:</h2>
                            <button class="btn">CONTATAR</button>
                        </div>
                        <div class="prf-info-text">
                            Somos um dos principais fornecedores de painéis solares do país. Nossa organização tem uma forte posição de mercado em vários estados por causa de nossos serviços eficientes e econômicos. Devido ao nosso desempenho e eficiência, fomos premiados duas vezes pela associação empresarial local. Também fornecemos painéis solares para grandes empresas que estão na indústria da construção. Temos trabalhado com alguns clientes eficientes que já começaram a se beneficiar de nossos serviços. Eles continuam voltando para nós para o fornecimento de produtos solares de qualidade.
                        </div>
                    </div>
                    <div class="prf-rSide">
                        <h1 class="prf-nome-empresa">Empresa de Energia Solar</h1>
                        <picture class="prf-foto">
                            <source src="../img/sol.png">
                            <img src="../img/sol.png" alt="Foto de perfil da empresa" class="imgEmpresa" style="width:10rem">
                        </picture>
                        <div class="prf-avaliacao">
                            <img src="../img/estrela.png" alt="Estrela de avaliação">
                            <img src="../img/estrela.png" alt="Estrela de avaliação">
                            <img src="../img/estrela.png" alt="Estrela de avaliação">
                            <img src="../img/estrela.png" alt="Estrela de avaliação">
                            <img src="../img/estrela.png" alt="Estrela de avaliação">
                        </div>
                        <h2 class="prf-label">Endereço</h2>
                        <div class="prf-desc-text">Rua Jardim São Lourenço, 36 (Campo Grande)</div>
                        <h2 class="prf-label">Status:</h2>
                        <h2 class="prf-desc-text"><status>Aberta para solicitações</status></h2>
                        <h2 class="prf-label">Disponibilidade:</h2>
                        <div class="btn-cards-disp">
                            <div class="disp-option">Casas</div>
                            <div class="disp-option">Apartamentos</div>
                            <div class="disp-option">Condomínios</div>             
                        </div>
                    </div>
                </div>
            </div>
        </section>
@stop