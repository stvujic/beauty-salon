@extends('layouts.front')

@section('title', 'Pregled svih termina')

@section('content')
    <section class="wrapper style1 special fade-up">
        <div class="container">
            <header class="major">
                <h2>Pregled svih zakazanih termina</h2>
                <p>Ovde administrator može da vidi sve zakazane tretmane.</p>
            </header>

            @if ($appointments->isEmpty())
                <p>Trenutno nema zakazanih termina.</p>
            @else
                <div class="table-wrapper">
                    <table>
                        <thead>
                        <tr>
                            <th style="text-align: center;">Korisnik</th>
                            <th style="text-align: center;">Paket</th>
                            <th style="text-align: center;">Datum i vreme</th>
                            <th style="text-align: center;">Cena</th>
                            <th style="text-align: center;">Status</th>
                            <th style="text-align: center;">Akcija</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($appointments as $appointment)
                            <tr>
                                <td style="text-align: center;">{{ $appointment->user->name ?? 'N/A' }}</td>
                                <td style="text-align: center;">{{ $appointment->package->name }}</td>
                                <td style="text-align: center;">
                                    {{ \Carbon\Carbon::parse($appointment->appointment_date)->format('d.m.Y. H:i') }}
                                </td>
                                <td style="text-align: center;">{{ $appointment->price }} RSD</td>
                                <td style="text-align: center;">{{ ucfirst($appointment->status) }}</td>
                                <td style="text-align: center;">
                                    <form action="{{ route('admin.appointments.destroy', $appointment->id) }}" method="POST" onsubmit="return confirm('Da li ste sigurni da želite da obrišete ovaj termin?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="button small">Obriši</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            @endif
        </div>
    </section>
@endsection
