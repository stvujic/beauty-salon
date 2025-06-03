@extends('layouts.front')

@section('title', 'Cenovnik')

@section('content')
    <section class="wrapper style1 special fade-up">
        <div class="container">
            <header class="major">
                <h2>Cenovnik tretmana</h2>
                <p>Pregled dostupnih paketa maderoterapije</p>
            </header>

            @if ($packages->isEmpty())
                <p>Trenutno nema paketa u ponudi.</p>
            @else
                <div class="row gtr-50 gtr-uniform">
                    @foreach ($packages as $package)
                        <div class="col-4 col-12-medium">
                            <section class="box">
                                <h3 style="margin-bottom: 10px;">{{ $package->name }}</h3>
                                <p style="min-height: 80px;">{{ $package->description }}</p>
                                <p style="font-weight: bold; font-size: 1.2em; color: #e77e23;">
                                    {{ number_format($package->price, 0, ',', '.') }} RSD
                                </p>
                            </section>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </section>
@endsection
