@extends('layouts.front')

@section('title', 'Početna')

@section('content')

    <!-- Banner -->
    <section id="banner">
        <div class="content">
            <header>
                <h2>Tvoje telo zaslužuje nežnu revoluciju</h2>
                <p>Bez čudotvornih krema i lažnih obećanja.<br />
                    Samo stručna ruka i vidljivi rezultati.</p>
                <ul class="actions special stacked" style="margin-top: 2em;">
                    <li><a href="#packages" class="button primary">Pogledaj pakete</a></li>
                    <li><a href="#contact" class="button">Zakaži tretman</a></li>
                </ul>
                <ul class="icons">
                    <li><a href="#" class="icon brands alt fa-twitter"><span class="label">Twitter</span></a></li>
                    <li><a href="#" class="icon brands alt fa-facebook-f"><span class="label">Facebook</span></a></li>
                    <li><a href="#" class="icon brands alt fa-linkedin-in"><span class="label">LinkedIn</span></a></li>
                    <li><a href="#" class="icon brands alt fa-instagram"><span class="label">Instagram</span></a></li>
                    <li><a href="#" class="icon brands alt fa-github"><span class="label">GitHub</span></a></li>
                    <li><a href="#" class="icon solid alt fa-envelope"><span class="label">Email</span></a></li>
                </ul>
            </header>
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
                            <h2>Lepota je jednostavna — kada je negujete sa pravim ljudima</h2>
                            <p>U našem salonu sve je posvećeno tome da se osećate bolje, zategnutije i sigurnije u svom telu.</p>
                        </header>
                    </div>
                    <div class="col-4 col-12-medium">
                        <p>Bez šablona, bez žurbe.</p>
                    </div>
                    <div class="col-4 col-12-medium">
                        <p>Samo Vi, Vaše telo i tretman koji odgovara baš Vama.</p>
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
                <h2>PONUDA PAKETA</h2>
                <p>Izaberi paket koji odgovara tebi</p>
            </header>
            <div class="box alt">
                <div class="row gtr-uniform">
                    <section class="col-4 col-6-medium col-12-xsmall">
                        <span class="icon solid alt major fa-leaf"></span>
                        <h3>Detox Bliss</h3>
                        <p>Pomaže telu da se oslobodi toksina i povrati prirodnu energiju.</p>
                    </section>
                    <section class="col-4 col-6-medium col-12-xsmall">
                        <span class="icon solid alt major fa-user"></span>
                        <h3>Silhouette Touch</h3>
                        <p>Oblikuje figuru kroz anticelulit tretmane i limfnu drenažu.</p>
                    </section>

                    <section class="col-4 col-6-medium col-12-xsmall">
                        <span class="icon solid alt major fa-star"></span>
                        <h3>Glow Ritual</h3>
                        <p>Pruža blistav izgled koži kroz piling, masažu i dubinsku negu.</p>
                    </section>
                    <section class="col-4 col-6-medium col-12-xsmall">
                        <span class="icon solid alt major fa-spa"></span>
                        <h3>Harmony Escape</h3>
                        <p>Paket za relaksaciju tela i uma — savršen beg od svakodnevice.</p>
                    </section>
                    <section class="col-4 col-6-medium col-12-xsmall">
                        <span class="icon solid alt major fa-dumbbell"></span>
                        <h3>Premium Sculpt</h3>
                        <p>Intenzivni tretmani za zatezanje i učvršćivanje kritičnih zona.</p>
                    </section>
                    <section class="col-4 col-6-medium col-12-xsmall">
                        <span class="icon solid alt major fa-crown"></span>
                        <h3>Royal Experience</h3>
                        <p>Ekskluzivan tretman za celokupnu regeneraciju i osećaj luksuza.</p>
                    </section>
                </div>
            </div>

            <footer class="major">
                <ul class="actions special">
                    <li><a href="#" class="button">Vise o paketima</a></li>
                </ul>
            </footer>
        </div>
    </section>

    <!-- Five -->
    <section id="five" class="wrapper style2 special fade">
        <div class="container">
            <header>
                <h2>Gde se nalazimo</h2>
                <p>Poseti nas u našem salonu</p>
            </header>
            <div style="width: 100%; height: 450px;">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2806.597177934578!2d19.82216147596568!3d45.29636114462203!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475b113b980bd65d%3A0xf510d5f50de0c992!2z0JLQsNGB0LUg0J_Rg9GI0LjQsdGA0LrQsCAzLCDQndC-0LLQuCDQodCw0LQgNDA1NjEw!5e0!3m2!1ssr!2srs!4v1747752637111!5m2!1ssr!2srs" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>


@endsection
