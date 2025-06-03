@extends('layouts.front')

@section('title', 'Paketi')

@section('content')
    <section class="wrapper style1 special fade-up">
        <div class="container">
            <header class="major">
                <h2>Lista paketa</h2>
            </header>

            <div style="display: flex; justify-content: flex-end; margin-bottom: 20px;">
                <a href="{{ route('packages.create') }}" class="button primary">+ Dodaj paket</a>
            </div>

            @if ($packages->isEmpty())
                <p>Trenutno nema unetih paketa.</p>
            @else
                <div class="table-wrapper">
                    <table>
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Naziv</th>
                            <th>Opis</th>
                            <th>Cena (RSD)</th>
                            <th>Akcija</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($packages as $package)
                            <tr>
                                <td>{{ $package->id }}</td>
                                <td>{{ $package->name }}</td>
                                <td>{{ $package->description }}</td>
                                <td>{{ $package->price }}</td>
                                <td>
                                    <a href="{{ route('packages.edit', $package->id) }}" class="button small">Izmeni</a>
                                    <form action="{{ route('packages.destroy', $package->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="button small" onclick="return confirm('Da li ste sigurni da želite da obrišete ovaj paket?')">Obriši</button>
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
