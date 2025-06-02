@extends('layouts.front')

@section('title', 'Korisnici')

@section('content')
    <section class="wrapper style1 special fade-up">
        <div class="container">
            <header class="major">
                <h2>Lista korisnika</h2>
            </header>

            <div style="display: flex; justify-content: flex-end; margin-bottom: 20px;">
                <a href="{{ route('admin.users.create') }}" class="button primary">+ Dodaj korisnika</a>
            </div>

        @if ($users->isEmpty())
                <p>Trenutno nema registrovanih korisnika.</p>
            @else
                <div class="table-wrapper">
                    <table>
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Ime</th>
                            <th>Email</th>
                            <th>Telefon</th>
                            <th>Akcija</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->phone ?? 'N/A' }}</td>
                                <td>
                                    <a href="{{ route('admin.users.edit', $user->id) }}" class="button small">Izmeni</a>
                                    <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="button small" onclick="return confirm('Da li ste sigurni da želite da obrišete korisnika?')">Obriši</button>
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
