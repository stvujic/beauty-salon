@extends('layouts.front')

@section('title', 'Komentari')

@section('content')
    <section class="wrapper style1 special fade-up">
        <div class="container">
            <header class="major">
                <h2>Iskustva naših korisnika</h2>
            </header>

            @auth
                <h3>Ostavite komentar</h3>

                @if(session('message'))
                    <p style="color: green;">{{ session('message') }}</p>
                @endif

                <form method="POST" action="{{ route('comments.store') }}">
                    @csrf
                    <div class="row gtr-uniform">
                        <div class="col-12">
                            <textarea name="content" rows="4" placeholder="Vaš komentar..." required>{{ old('content') }}</textarea>
                        </div>
                        <div class="col-12">
                            <ul class="actions">
                                <li><input type="submit" value="Pošalji komentar" class="primary" /></li>
                            </ul>
                        </div>
                    </div>
                </form>

                <hr>
            @else
                <p><a href="{{ route('login') }}">Prijavite se</a> kako biste ostavili komentar.</p>
                <hr>
            @endauth

            @if($comments->isEmpty())
                <p>Trenutno nema komentara za prikaz.</p>
            @else
                <div class="box">
                    @foreach ($comments as $comment)
                        <article style="border-bottom: 1px solid #ccc; padding: 15px 0;">
                            <h4>{{ $comment->user->name ?? 'Nepoznat korisnik' }}</h4>
                            <p>{{ $comment->content }}</p>
                            <small style="color: gray;">{{ $comment->created_at->format('d.m.Y. H:i') }}</small>
                        </article>
                    @endforeach
                </div>
            @endif
        </div>
    </section>
@endsection
