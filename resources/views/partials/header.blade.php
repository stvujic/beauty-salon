<header id="header">
    <h1 id="logo"><a href="/">KRALJEVSKA MADEROTERAPIJA</a></h1>
    <nav id="nav">
        <ul>
            @auth
                @if(auth()->user()->is_admin)
                    {{-- Samo admin vidi ovo --}}
                    <li><a href="{{ route('admin.appointments') }}">Sve rezervacije</a></li>
                    <li><a href="{{ route('admin.users.index') }}">Korisnici</a></li>
                    <li><a href="{{ route('admin.packages.index') }}">Paketi</a></li>
                    <li><a href="{{ route('admin.comments.index') }}">Admin Komentari</a></li>
                    <li><a href="{{ route('admin.gallery.index') }}">Admin Galerija</a></li>
                @else
                    {{-- Samo običan korisnik vidi ovo --}}
                    <li><a href="{{ route('appointments.create') }}">Rezervacije</a></li>
                    <li><a href="{{ route('appointments.index') }}">Moje rezervacije</a></li>

                    <li><a href="/">Glavna</a></li>
                    <li><a href="{{ url('/#one') }}" class="scrolly">O nama</a></li>
                    <li><a href="{{ route('public.comments') }}">Komentari</a></li>
                    <li><a href="{{ route('public.gallery') }}">Galerija</a></li>
                    <li><a href="/">Vauceri</a></li>
                    <li><a href="{{ route('public.packages') }}">Cenovnik</a></li>

                    {{-- Dropdown --}}
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

                    <li><a href="/elements">Elements</a></li>
                @endif

                <li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="button">Logout</button>
                    </form>
                </li>
            @else
                {{-- Gost vidi ovo --}}
                <li><a href="{{ route('appointments.create') }}">Rezervacije</a></li>
                <li><a href="/">Glavna</a></li>
                <li><a href="{{ url('/#one') }}" class="scrolly">O nama</a></li>
                <li><a href="{{ route('public.comments') }}">Komentari</a></li>
                <li><a href="{{ route('public.gallery') }}">Galerija</a></li>
                <li><a href="/">Vauceri</a></li>
                <li><a href="{{ route('public.packages') }}">Cenovnik</a></li>

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

                <li><a href="/elements">Elements</a></li>

                <li><a href="{{ route('login') }}" class="button">Login</a></li>
                <li><a href="{{ route('register') }}" class="button primary">Sign Up</a></li>
            @endauth
        </ul>
    </nav>
</header>
