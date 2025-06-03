@extends('layouts.front')

@section('title', 'Izmena korisnika')

@section('content')
    <section class="wrapper style1 special fade-up">
        <div class="container">
            <header class="major">
                <h2>Izmena korisnika</h2>
            </header>

            <form method="POST" action="{{ route('admin.users.update', $user->id) }}">
                @csrf
                @method('PUT')

                <div class="row gtr-uniform">
                    <div class="col-6 col-12-xsmall">
                        <label for="name">Ime</label>
                        <input type="text" name="name" id="name" value="{{ old('name', $user->name) }}" required />
                    </div>
                    <div class="col-6 col-12-xsmall">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" value="{{ old('email', $user->email) }}" required />
                    </div>
                    <div class="col-6 col-12-xsmall">
                        <label for="phone">Telefon</label>
                        <input type="text" name="phone" id="phone" value="{{ old('phone', $user->phone) }}" />
                    </div>
                    <div class="col-6 col-12-xsmall">
                        <label for="password">Nova lozinka (opciono)</label>
                        <input type="password" name="password" id="password" autocomplete="new-password" />
                    </div>
                    <div class="col-6 col-12-xsmall">
                        <label for="password_confirmation">Potvrdi lozinku</label>
                        <input type="password" name="password_confirmation" id="password_confirmation" autocomplete="new-password" />
                    </div>

                    <div class="col-12">
                        <ul class="actions">
                            <li><input type="submit" class="primary" value="Sačuvaj izmene" /></li>
                            <li><a href="{{ route('admin.users.index') }}" class="button">Nazad</a></li>
                        </ul>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection
