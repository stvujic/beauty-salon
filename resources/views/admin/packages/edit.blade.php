@extends('layouts.front')

@section('title', 'Izmeni paket')

@section('content')
    <section class="wrapper style1 special fade-up">
        <div class="container">
            <header class="major">
                <h2>Izmena paketa</h2>
            </header>

            <form method="POST" action="{{ route('packages.update', $package->id) }}">
                @csrf
                @method('PUT')

                <div class="row gtr-uniform">
                    <div class="col-6 col-12-xsmall">
                        <label for="name">Naziv paketa</label>
                        <input type="text" name="name" id="name" value="{{ old('name', $package->name) }}" required />
                    </div>

                    <div class="col-6 col-12-xsmall">
                        <label for="price">Cena (RSD)</label>
                        <input type="number" name="price" id="price" value="{{ old('price', $package->price) }}" step="0.01" required />
                    </div>

                    <div class="col-12">
                        <label for="description">Opis</label>
                        <textarea name="description" id="description" rows="4">{{ old('description', $package->description) }}</textarea>
                    </div>

                    <div class="col-12">
                        <ul class="actions">
                            <li><input type="submit" value="Sačuvaj izmene" class="primary" /></li>
                            <li><a href="{{ route('packages.index') }}" class="button">Nazad</a></li>
                        </ul>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection
