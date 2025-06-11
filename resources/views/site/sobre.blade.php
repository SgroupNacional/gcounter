@extends('site.template')

@section('corpo')

    <header class="heading-6 fixed-top" id="heading">
        <div class="container">
            <a href="/" class="logo">
                <img src="/images/logo-brown.png" alt="financetop">
            </a>
            <button type="button" class="button-menu hidden-lg-up" data-toggle="collapse" data-target="#main-menu" aria-expanded="false">
                <i class="fa fa-bars" aria-hidden="true"></i>
            </button>
            <div class="get-quote hidden-lg-down">
                <a target="_blank" href="https://wa.me/5585999505692">
                    <p>Agende uma visita</p>
                </a>
            </div>
            <nav id="main-menu" class="collapse">
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="/Sobre">Sobre</a></li>
                    <li><a data-scroll href="#Servicos">Serviços</a></li>
                    <li><a href="/Portfolio">Portfólio</a></li>
                    <li><a data-scroll href="#Contato">Contato</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section style="max-height: 150px;" class="headings">
        <div class="text-heading text-center">

        </div>
    </section>
    <!-- START SECTION ABOUT -->
    <section class="who-we-are">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 who">
                    <img src="images/what-we-offer/choosing-2.jpg" alt="">
                </div>
                <div class="col-lg-6 col-md-12 who-1">
                    <div>
                        <h2 class="text-left mb-4"><span>Sobre</span></h2>
                    </div>
                    <div class="pftext">
                        <p style="text-align: justify;">A GCounter tem como propósito: Contribuir para o crescimento sustentável das organizações com foco no resultado. Utilizando estratégias objetivas, desenvolve soluções para empresas de diversos segmentos utilizando ferramenta de Business Inteligence (Power BI). Utilizando metodologias modernas e inovadoras a GCounter se propõem a gerar informações que ajudem aos gestores nas tomadas de decisões.</p>

                        <h2>Missão</h2>
                        <p style="text-align: justify;">Proporcionar soluções empresariais de alta qualidade, contribuindo para a gestão e o crescimento dos nossos clientes.</p>

                        <h2>Visão</h2>
                        <p style="text-align: justify;">Ser referência como empresa de consultoria de Inteligência de Negócios, prestando serviços de alta qualidade para a atuação no mercado.</p>

                        <ul>
                            <li>Valores</li>
                            <li>Agilidade</li>
                            <li>Comprometimento</li>
                            <li>Inovação</li>
                            <li>Legalidade</li>
                            <li>Pontualidade</li>
                            <li>Ética</li>
                            <li>Relacionamento</li>
                            <li>Responsabilidade Social</li>
                            <li>Segurança</li>
                            <li>Transparência</li>
                        </ul>

                    </div>

                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- END SECTION ABOUT -->

@endsection
