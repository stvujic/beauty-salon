@extends('layouts.app')

@section('title', 'No Sidebar')

@section('content')

    <!-- Main -->
    <div id="main" class="wrapper style1">
        <div class="container">
            <header class="major">
                <h2>No Sidebar</h2>
                <p>Ipsum dolor feugiat aliquam tempus sed magna lorem consequat accumsan</p>
            </header>

            <!-- Content -->
            <section id="content">
                <a href="#" class="image fit"><img src="{{ asset('images/pic07.jpg') }}" alt="" /></a>
                <h3>Dolore Amet Consequat</h3>
                <p>Aliquam massa urna, imperdiet sit amet mi non, bibendum euismod est. Curabitur mi justo, tincidunt vel eros ullamcorper...</p>
                <p>Vestibulum diam quam, mollis at consectetur non, malesuada quis augue. Morbi tincidunt pretium interdum...</p>
                <h3>Sed Magna Ornare</h3>
                <p>In vestibulum massa quis arcu lobortis tempus. Nam pretium arcu in odio vulputate luctus. Suspendisse euismod lorem...</p>
                <ul>
                    <li>Faucibus orci lobortis ac adipiscing integer.</li>
                    <li>Col accumsan arcu mi aliquet placerat.</li>
                    <li>Lobortis vestibulum ut magna tempor massa nascetur.</li>
                    <li>Blandit massa non blandit tempor interdum.</li>
                    <li>Lacinia mattis arcu nascetur lobortis.</li>
                </ul>
            </section>
        </div>
    </div>

@endsection
