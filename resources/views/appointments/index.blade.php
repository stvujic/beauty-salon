@php use Carbon\Carbon; @endphp
@extends('layouts.front')

@section('title', 'Moje rezervacije')

@section('content')
    <section class="wrapper style1 special fade-up">
        <div class="container">
            <header class="major">
                <h2>Moje rezervacije</h2>
                <p>Ovde možeš videti sve svoje zakazane tretmane</p>
            </header>

            @if ($appointments->isEmpty())
                <p>Nemate nijedan zakazan tretman.</p>
            @else
                <div class="table-wrapper">
                    <table>
                        <thead>
                        <tr>
                            <th style="text-align: center;">Paket</th>
                            <th style="text-align: center;">Datum i vreme</th>
                            <th style="text-align: center;">Cena</th>
                            <th style="text-align: center;">Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($appointments as $appointment)
                            <tr>
                                <td style="text-align: center;">{{ $appointment->package->name }}</td>
                                <td style="text-align: center;">
                                    {{ Carbon::parse($appointment->appointment_date)->format('d.m.Y. H:i') }}
                                </td>
                                <td style="text-align: center;">{{ $appointment->price }} RSD</td>
                                <td style="text-align: center;">{{ ucfirst($appointment->status) }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>


            @endif
        </div>
    </section>
@endsection
