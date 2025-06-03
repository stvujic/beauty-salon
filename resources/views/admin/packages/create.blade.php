@extends('layouts.front')

@section('title', 'Dodaj paket')

@section('content')
    <section class="wrapper style1 special fade-up">
        <div class="container">
            <header class="major">
                <h2>Dodavanje novog paketa</h2>
            </header>

            <form method="POST" action="{{ route('packages.store') }}">
                @csrf

                <div class="row gtr-uniform">
                    <div class="col-6 col-12-xsmall">
                        <label for="name">Naziv paketa</label>
                        <input type="text" name="name" id="name" value="{{ old('name') }}" required />
                    </div>

                    <div class="col-6 col-12-xsmall">
                        <label for="price">Cena (RSD)</label>
                        <input type="number" name="price" id="price" value="{{ old('price') }}" step="0.01" required />
                    </div>

                    <div class="col-12">
                        <label for="description">Opis</label>
                        <textarea name="description" id="description" rows="4">{{ old('description') }}</textarea>
                    </div>

                    <div class="col-12">
                        <ul class="actions">
                            <li><input type="submit" value="Sačuvaj paket" class="primary" /></li>
                            <li><a href="{{ route('packages.index') }}" class="button">Nazad</a></li>
                        </ul>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection
