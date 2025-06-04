@extends('layouts.front')

@section('title', 'Admin Galerija')

@section('content')
    <section class="wrapper style1 special fade-up">
        <div class="container">
            <header class="major">
                <h2>Galerija – administracija</h2>
            </header>

            @if(session('success'))
                <p style="color: green;">{{ session('success') }}</p>
            @endif

            <form method="POST" action="{{ route('admin.gallery.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="row gtr-uniform">
                    <div class="col-12">
                        <input type="file" name="image" required>
                    </div>
                    <div class="col-12">
                        <input type="submit" value="Upload sliku" class="primary" />
                    </div>
                </div>
            </form>

            <hr>

            @if($images->isEmpty())
                <p>Trenutno nema slika.</p>
            @else
                <div class="row">
                    @foreach ($images as $image)
                        <div class="col-4 col-12-medium">
                            <img src="{{ asset('storage/' . $image->path) }}" alt="Slika" style="width: 100%; height: auto;">
                            <p>Status: {{ $image->is_visible ? 'Vidljivo' : 'Skriveno' }}</p>

                            <form method="POST" action="{{ route('admin.gallery.toggle', $image) }}">
                                @csrf
                                @method('PATCH')
                                <button type="submit">{{ $image->is_visible ? 'Sakrij' : 'Prikaži' }}</button>
                            </form>

                            <form method="POST" action="{{ route('admin.gallery.destroy', $image) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Obrisati sliku?')">Obriši</button>
                            </form>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </section>
@endsection
