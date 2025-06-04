@extends('layouts.front')

@section('title', 'Komentari korisnika')

@section('content')
    <section class="wrapper style1 special fade-up">
        <div class="container">
            <header class="major">
                <h2>Pregled komentara korisnika</h2>
            </header>

            @if (session('success'))
                <p style="color: green;">{{ session('success') }}</p>
            @endif

            @if ($comments->isEmpty())
                <p>Trenutno nema komentara.</p>
            @else
                <div class="table-wrapper">
                    <table>
                        <thead>
                        <tr>
                            <th>Korisnik</th>
                            <th>Komentar</th>
                            <th>Datum</th>
                            <th>Status</th>
                            <th>Akcija</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($comments as $comment)
                            <tr>
                                <td>{{ $comment->user->name ?? 'Nepoznat korisnik' }}</td>
                                <td>{{ $comment->content }}</td>
                                <td>{{ $comment->created_at->format('d.m.Y. H:i') }}</td>
                                <td>
                                    @if ($comment->is_approved)
                                        <span style="color: green;">Odobren</span>
                                    @else
                                        <span style="color: red;">Na čekanju</span>
                                    @endif
                                </td>
                                <td>
                                    @if (!$comment->is_approved)
                                        <form method="POST" action="{{ route('admin.comments.approve', $comment) }}" style="display:inline;">
                                            @csrf
                                            @method('PATCH')
                                            <button type="submit" class="button small">Odobri</button>
                                        </form>
                                    @endif

                                    <form method="POST" action="{{ route('admin.comments.destroy', $comment) }}" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="button small" onclick="return confirm('Obrisati ovaj komentar?')">Obriši</button>
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
