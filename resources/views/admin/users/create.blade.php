@extends('layouts.front')

@section('title', 'Dodaj korisnika')

@section('content')
    <section class="wrapper style1 special fade-up">
        <div class="container">
            <header class="major">
                <h2>Dodavanje novog korisnika</h2>
            </header>

            <form method="POST" action="{{ route('admin.users.store') }}">
                @csrf

                <div class="row gtr-uniform">
                    <div class="col-6 col-12-xsmall">
                        <label for="name">Ime</label>
                        <input type="text" name="name" id="name" value="{{ old('name') }}" required />
                    </div>
                    <div class="col-6 col-12-xsmall">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" value="{{ old('email') }}" required autocomplete="off" />
                    </div>
                    <div class="col-6 col-12-xsmall">
                        <label for="phone">Telefon</label>
                        <input type="text" name="phone" id="phone" value="{{ old('phone') }}" />
                    </div>
                    <div class="col-6 col-12-xsmall">
                        <label for="password">Lozinka</label>
                        <input type="password" name="password" id="password" required autocomplete="new-password" />
                    </div>
                    <div class="col-6 col-12-xsmall">
                        <label for="password_confirmation">Potvrdi lozinku</label>
                        <input type="password" name="password_confirmation" id="password_confirmation" required autocomplete="new-password" />
                    </div>

                    <div class="col-12">
                        <ul class="actions">
                            <li><input type="submit" class="primary" value="Dodaj korisnika" /></li>
                            <li><a href="{{ route('admin.users.index') }}" class="button">Nazad</a></li>
                        </ul>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection
