@extends('layouts.app')

@section('title', 'Početna')

@section('content')

    <!-- Banner -->
    <section id="banner">
        <div class="content">
            <header>
                <h2>Tvoje telo zaslužuje nežnu revoluciju</h2>
                <p>Bez čudotvornih krema i lažnih obećanja.<br />
                    Samo stručna ruka i vidljivi rezultati.</p>
            </header>
            <span class="image"><img src="{{ asset('images/pic01.jpg') }}" alt="" /></span>
        </div>
        <a href="#one" class="goto-next scrolly">Next</a>
    </section>

    <!-- One -->
    <section id="one" class="spotlight style1 bottom">
        <span class="image fit main"><img src="{{ asset('images/pic02.jpg') }}" alt="" /></span>
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-4 col-12-medium">
                        <header>
                            <h2>Naša misija je Vaša lepota i samopouzdanje</h2>
                            <p>Stručno, posvećeno i sa ljubavlju prema svakom telu.</p>
                        </header>
                    </div>
                    <div class="col-4 col-12-medium">
                        <p>U našem salonu kombinuju se proverene tehnike, pažljivo birani tretmani i individualni pristup. Svaka masaža je više od rutine — ona je korak ka boljem osećaju u sopstvenoj koži. Verujemo da nega nije luksuz, već potreba savremene žene.</p>
                    </div>
                    <div class="col-4 col-12-medium">
                        <p>Godine iskustva, konstantno usavršavanje i ljubazna atmosfera učinili su nas izborom mnogih žena koje žele rezultate. Neka i Vaše telo prodiše, zategne se i zasija — jer Vi to zaslužujete.</p>
                    </div>
                </div>
            </div>
        </div>
        <a href="#two" class="goto-next scrolly">Next</a>
    </section>

    <!-- Two -->
    <section id="two" class="spotlight style2 right">
        <span class="image fit main"><img src="{{ asset('images/pic03.jpg') }}" alt="" /></span>
        <div class="content">
            <header>
                <h2>Stručnost u koju možete imati poverenja</h2>
                <p>Naš tim čine licencirani terapeuti sa bogatim iskustvom i znanjem.</p>
            </header>
            <p>Svi naši radnici poseduju priznate sertifikate i prošli su kroz obuke koje garantuju profesionalan pristup svakom tretmanu. Redovno se usavršavamo i pratimo najnovije metode u borbi protiv celulita, kako bismo vam pružili vrhunsku negu, sigurnost i vidljive rezultate. Vaše telo zaslužuje najbolje.</p>
            <ul class="actions">
                <li><a href="#" class="button">Learn More</a></li>
            </ul>
        </div>
        <a href="#three" class="goto-next scrolly">Next</a>
    </section>

    <!-- Three -->
    <section id="three" class="spotlight style3 left">
        <span class="image fit main bottom"><img src="{{ asset('images/pic04.jpg') }}" alt="" /></span>
        <div class="content">
            <header>
                <h2>Paket tretmana prilagođen baš Vama</h2>
                <p>Jer svako telo je drugačije i zaslužuje poseban pristup</p>
            </header>
            <p>U ponudi imamo pažljivo osmišljene pakete anticelulit masaža koji odgovaraju različitim ciljevima i tipovima tela. Bilo da želite brze rezultate, dubinsku negu ili dugoročnu transformaciju — zajedno biramo plan koji vama najviše odgovara. Pratimo vaš napredak i prilagođavamo svaki korak vašim potrebama.</p>
            <ul class="actions">
                <li><a href="#" class="button">Learn More</a></li>
            </ul>
        </div>
        <a href="#four" class="goto-next scrolly">Next</a>
    </section>

    <!-- Four -->
    <section id="four" class="wrapper style1 special fade-up">
        <div class="container">
            <header class="major">
                <h2>Accumsan sed tempus adipiscing blandit</h2>
                <p>Iaculis ac volutpat vis non enim gravida nisi faucibus posuere arcu consequat</p>
            </header>
            <div class="box alt">
                <div class="row gtr-uniform">
                    <section class="col-4 col-6-medium col-12-xsmall">
                        <span class="icon solid alt major fa-chart-area"></span>
                        <h3>Ipsum sed commodo</h3>
                        <p>Feugiat accumsan lorem eu ac lorem amet accumsan donec. Blandit orci porttitor.</p>
                    </section>
                    <section class="col-4 col-6-medium col-12-xsmall">
                        <span class="icon solid alt major fa-comment"></span>
                        <h3>Eleifend lorem ornare</h3>
                        <p>Feugiat accumsan lorem eu ac lorem amet accumsan donec. Blandit orci porttitor.</p>
                    </section>
                    <section class="col-4 col-6-medium col-12-xsmall">
                        <span class="icon solid alt major fa-flask"></span>
                        <h3>Cubilia cep lobortis</h3>
                        <p>Feugiat accumsan lorem eu ac lorem amet accumsan donec. Blandit orci porttitor.</p>
                    </section>
                    <section class="col-4 col-6-medium col-12-xsmall">
                        <span class="icon solid alt major fa-paper-plane"></span>
                        <h3>Non semper interdum</h3>
                        <p>Feugiat accumsan lorem eu ac lorem amet accumsan donec. Blandit orci porttitor.</p>
                    </section>
                    <section class="col-4 col-6-medium col-12-xsmall">
                        <span class="icon solid alt major fa-file"></span>
                        <h3>Odio laoreet accumsan</h3>
                        <p>Feugiat accumsan lorem eu ac lorem amet accumsan donec. Blandit orci porttitor.</p>
                    </section>
                    <section class="col-4 col-6-medium col-12-xsmall">
                        <span class="icon solid alt major fa-lock"></span>
                        <h3>Massa arcu accumsan</h3>
                        <p>Feugiat accumsan lorem eu ac lorem amet accumsan donec. Blandit orci porttitor.</p>
                    </section>
                </div>
            </div>
            <footer class="major">
                <ul class="actions special">
                    <li><a href="#" class="button">Magna sed feugiat</a></li>
                </ul>
            </footer>
        </div>
    </section>

    <!-- Five -->
    <section id="five" class="wrapper style2 special fade">
        <div class="container">
            <header>
                <h2>Magna faucibus lorem diam</h2>
                <p>Ante metus praesent faucibus ante integer id accumsan eleifend</p>
            </header>
            <form method="post" action="#" class="cta">
                <div class="row gtr-uniform gtr-50">
                    <div class="col-8 col-12-xsmall">
                        <input type="email" name="email" id="email" placeholder="Your Email Address" />
                    </div>
                    <div class="col-4 col-12-xsmall">
                        <input type="submit" value="Get Started" class="fit primary" />
                    </div>
                </div>
            </form>
        </div>
    </section>

@endsection
