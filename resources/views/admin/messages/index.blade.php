@extends('layouts.front')

@section('title', 'Inbox poruke')

@section('content')
    <section class="wrapper style1 special fade-up">
        <div class="container">
            <header class="major">
                <h2>Inbox – Kontakt poruke</h2>
            </header>

            @if (session('success'))
                <p style="color: green;">{{ session('success') }}</p>
            @endif

            @if ($messages->isEmpty())
                <p>Trenutno nema poruka.</p>
            @else
                <div class="table-wrapper">
                    <table>
                        <thead>
                        <tr>
                            <th>Ime</th>
                            <th>Email</th>
                            <th>Poruka</th>
                            <th>Datum</th>
                            <th>Akcija</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($messages as $msg)
                            <tr>
                                <td>{{ $msg->name }}</td>
                                <td>{{ $msg->email }}</td>
                                <td>{{ $msg->message }}</td>
                                <td>{{ $msg->created_at->format('d.m.Y H:i') }}</td>
                                <td>
                                    <form method="POST" action="{{ route('admin.messages.destroy', $msg->id) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" onclick="return confirm('Da li ste sigurni?')">Obriši</button>
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
