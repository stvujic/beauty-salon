<header id="header">
    <h1 id="logo"><a href="/">KRALJEVSKA MADEROTERAPIJA</a></h1>
    <nav id="nav">
        <ul>
            @auth
                @if(auth()->user()->is_admin)
                    {{-- Samo admin vidi ovo --}}
                    <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                    <li><a href="{{ route('admin.appointments') }}">Sve rezervacije</a></li>
                    <li><a href="{{ route('admin.users.index') }}">Korisnici</a></li>
                    <li><a href="{{ route('admin.packages.index') }}">Paketi</a></li>
                    <li><a href="{{ route('admin.comments.index') }}">Admin Komentari</a></li>
                    <li><a href="{{ route('admin.gallery.index') }}">Admin Galerija</a></li>
                    <li><a href="{{ route('admin.messages.index') }}">Inbox</a></li>

                @else
                    {{-- Samo običan korisnik vidi ovo --}}
                    <li><a href="{{ route('appointments.create') }}">Rezervisi termin</a></li>
                    <li><a href="{{ route('appointments.index') }}">Moje rezervacije</a></li>

                    <li><a href="/">Glavna</a></li>
                    <li><a href="{{ url('/#one') }}" class="scrolly">O nama</a></li>
                    <li><a href="{{ route('public.comments') }}">Komentari</a></li>
                    <li><a href="{{ route('public.gallery') }}">Galerija</a></li>
                    <li><a href="{{ route('public.packages') }}">Cenovnik</a></li>

                    {{-- Dropdown --}}
                    <li>
                        <a href="#">Paketi</a>
                        <ul>
                            <li><a href="{{ route('packages.detox') }}">Detox Bliss</a></li>
                            <li><a href="{{ route('packages.silhouette') }}">Silhouette Touch</a></li>
                            <li><a href="{{ route('packages.glow') }}">Glow Ritual</a></li>
                            <li><a href="{{ route('packages.harmony') }}">Harmony Escape</a></li>
                            <li><a href="{{ route('packages.premium') }}">Premium Sculpt</a></li>
                            <li><a href="{{ route('packages.royal') }}">Royal Experience</a></li>

                        </ul>
                    </li>

{{--                    <li><a href="/elements">Elements</a></li>--}}
                    {{--vidi kako da iskroistis ove Elements--}}
                @endif

                <li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="button">Logout</button>
                    </form>
                </li>

            @else
                {{-- Gost vidi ovo --}}
                <li><a href="/">Glavna</a></li>
                <li><a href="{{ url('/#one') }}" class="scrolly">O nama</a></li>
                <li><a href="{{ route('appointments.create') }}">Rezervisi termin</a></li>
                <li><a href="{{ route('public.comments') }}">Komentari</a></li>
                <li><a href="{{ route('public.gallery') }}">Galerija</a></li>
                <li><a href="{{ route('public.packages') }}">Cenovnik</a></li>

                {{-- Dropdown --}}
                <li>
                    <a href="#">Paketi</a>
                    <ul>
                        <li><a href="{{ route('packages.detox') }}">Detox Bliss</a></li>
                        <li><a href="{{ route('packages.silhouette') }}">Silhouette Touch</a></li>
                        <li><a href="{{ route('packages.glow') }}">Glow Ritual</a></li>
                        <li><a href="{{ route('packages.harmony') }}">Harmony Escape</a></li>
                        <li><a href="{{ route('packages.premium') }}">Premium Sculpt</a></li>
                        <li><a href="{{ route('packages.royal') }}">Royal Experience</a></li>

                    </ul>
                </li>

                {{--                    <li><a href="/elements">Elements</a></li>--}}
                {{--vidi kako da iskroistis ove Elements--}}

                <li><a href="{{ route('login') }}" class="button">Login</a></li>
                <li><a href="{{ route('register') }}" class="button primary">Sign Up</a></li>
            @endauth
        </ul>
    </nav>
</header>
