@extends('layouts.app')

@section('title', 'Right Sidebar')

@section('content')

    <!-- Main -->
    <div id="main" class="wrapper style1">
        <div class="container">
            <header class="major">
                <h2>Right Sidebar</h2>
                <p>Ipsum dolor feugiat aliquam tempus sed magna lorem consequat accumsan</p>
            </header>
            <div class="row gtr-150">
                <div class="col-8 col-12-medium">

                    <!-- Content -->
                    <section id="content">
                        <a href="#" class="image fit"><img src="{{ asset('images/pic06.jpg') }}" alt="" /></a>
                        <h3>Dolore Amet Consequat</h3>
                        <p>Aliquam massa urna, imperdiet sit amet mi non, bibendum euismod est...</p>
                        <p>Vestibulum diam quam, mollis at consectetur non, malesuada quis augue...</p>
                        <h3>Sed Magna Ornare</h3>
                        <p>In vestibulum massa quis arcu lobortis tempus...</p>
                        <ul>
                            <li>Faucibus orci lobortis ac adipiscing integer.</li>
                            <li>Col accumsan arcu mi aliquet placerat.</li>
                            <li>Lobortis vestibulum ut magna tempor massa nascetur.</li>
                            <li>Blandit massa non blandit tempor interdum.</li>
                            <li>Lacinia mattis arcu nascetur lobortis.</li>
                        </ul>
                    </section>

                </div>
                <div class="col-4 col-12-medium">

                    <!-- Sidebar -->
                    <section id="sidebar">
                        <section>
                            <h3>Magna Feugiat</h3>
                            <p>Sed tristique purus vitae volutpat commodo suscipit amet sed nibh...</p>
                            <footer>
                                <ul class="actions">
                                    <li><a href="#" class="button">Learn More</a></li>
                                </ul>
                            </footer>
                        </section>
                        <hr />
                        <section>
                            <a href="#" class="image fit"><img src="{{ asset('images/pic07.jpg') }}" alt="" /></a>
                            <h3>Amet Lorem Tempus</h3>
                            <p>Sed tristique purus vitae volutpat commodo suscipit amet sed nibh...</p>
                            <footer>
                                <ul class="actions">
                                    <li><a href="#" class="button">Learn More</a></li>
                                </ul>
                            </footer>
                        </section>
                    </section>

                </div>
            </div>
        </div>
    </div>

@endsection
