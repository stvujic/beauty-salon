@extends('layouts.front')

@section('title', 'Galerija')

@section('content')
    <section class="wrapper style1 special fade-up">
        <div class="container">
            <header class="major">
                <h2>Naša galerija</h2>
                <p>Pogledajte atmosferu i tretmane iz našeg salona</p>
            </header>

            @if ($images->isEmpty())
                <p>Trenutno nema slika u galeriji.</p>
            @else
                <div class="row">
                    @foreach ($images as $image)
                        <div class="col-4 col-12-medium">
                            <span class="image fit">
                                <img src="{{ asset('storage/' . $image->path) }}" alt="Slika iz galerije" />
                            </span>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </section>
@endsection
