@extends('layouts.front')

@section('title', 'Pregled svih termina')

@section('content')
    <section class="wrapper style1 special fade-up">
        <div class="container">
            <header class="major">
                <h2>Pregled svih zakazanih termina</h2>
                <form method="GET" action="{{ route('admin.appointments') }}" style="margin-bottom: 20px;">
                    <div style="display: flex; flex-wrap: wrap; gap: 10px; align-items: center;">
                        <input type="text" name="user" value="{{ request('user') }}" placeholder="Ime ili email korisnika">
                        <input type="date" name="date" value="{{ request('date') }}">
                        <select name="package_id">
                            <option value="">-- Paket --</option>
                            @foreach ($packages as $package)
                                <option value="{{ $package->id }}" {{ request('package_id') == $package->id ? 'selected' : '' }}>
                                    {{ $package->name }}
                                </option>
                            @endforeach
                        </select>
                        <button type="submit" class="button small">Filtriraj</button>
                        <a href="{{ route('admin.appointments') }}" class="button small">Poništi</a>
                    </div>
                </form>
                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
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
                                <td style="text-align: center;">
                                    <form action="{{ route('admin.appointments.updateStatus', $appointment->id) }}" method="POST">
                                        @csrf
                                        @method('PATCH')
                                        <select name="status" onchange="this.form.submit()" style="padding: 5px;">
                                            <option value="pending" {{ $appointment->status == 'pending' ? 'selected' : '' }}>Na čekanju</option>
                                            <option value="approved" {{ $appointment->status == 'approved' ? 'selected' : '' }}>Odobreno</option>
                                            <option value="rejected" {{ $appointment->status == 'rejected' ? 'selected' : '' }}>Odbijeno</option>
                                        </select>
                                    </form>
                                </td>

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
