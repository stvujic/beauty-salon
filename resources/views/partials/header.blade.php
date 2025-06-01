<header id="header">
    <h1 id="logo"><a href="/">KRALJEVSKA MADEROTERAPIJA</a></h1>
    <nav id="nav">
        <ul>
            <li><a href="/">Glavna</a></li>
            <li><a href="{{ url('/#one') }}" class="scrolly">O nama</a></li>
            <li><a href="{{ route('appointments.create') }}">Rezervacije</a></li>
            <li><a href="/">Komentari</a></li>
            <li><a href="/">Galerija</a></li>
            <li><a href="/">Vauceri</a></li>
            <li><a href="/">Cenovnik</a></li>
            <li><a href="#four">Paketi</a></li>

            {{-- Dropdown posle cu ga iskorisiti --}}
            <li>
                <a href="#">Paketi</a>
                <ul>
                    <li><a href="/left-sidebar">Left Sidebar</a></li>
                    <li><a href="/right-sidebar">Right Sidebar</a></li>
                    <li><a href="/no-sidebar">No Sidebar</a></li>
                    <li>
                        <a href="#">Submenu</a>
                        <ul>
                            <li><a href="#">Option 1</a></li>
                            <li><a href="#">Option 2</a></li>
                            <li><a href="#">Option 3</a></li>
                            <li><a href="#">Option 4</a></li>
                        </ul>
                    </li>
                </ul>
            </li>

            {{-- Ovde su mi ostali dizajn elementi --}}
            <li><a href="/elements">Elements</a></li>

            {{-- Autentikacija --}}
            @auth
                <li><a href="{{ route('appointments.index') }}">Moje rezervacije</a></li>
                <li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="button">Logout</button>
                    </form>
                </li>
            @endauth

            {{-- Ovo vidi gost --}}
            @guest
                <li><a href="{{ route('login') }}" class="button">Login</a></li>
                <li><a href="{{ route('register') }}" class="button primary">Sign Up</a></li>
            @endguest
        </ul>
    </nav>
</header>
