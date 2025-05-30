@extends('layouts.front')

@section('content')
    <div class="container" style="padding: 2em;">
        <h2>Zakazivanje tretmana</h2>

        @if(session('success'))
            <div style="color: green;">{{ session('success') }}</div>
        @endif

        <form method="POST" action="{{ route('appointments.store') }}">
            @csrf

            <div style="margin-bottom: 1em;">
                <label for="package">Ime paketa:</label><br>
                <input type="text" id="package" name="package" value="{{ old('package') }}" required>
                @error('package') <div style="color: red;">{{ $message }}</div> @enderror
            </div>

            <div style="margin-bottom: 1em;">
                <label for="appointment_date">Datum i vreme:</label><br>
                <input type="datetime-local" id="appointment_date" name="appointment_date" required>
                @error('appointment_date') <div style="color: red;">{{ $message }}</div> @enderror
            </div>

            <div style="margin-bottom: 1em;">
                <label for="note">Napomena (opciono):</label><br>
                <textarea id="note" name="note">{{ old('note') }}</textarea>
                @error('note') <div style="color: red;">{{ $message }}</div> @enderror
            </div>

            <div style="margin-bottom: 1em;">
                <label for="price">Cena:</label><br>
                <input type="number" step="0.01" id="price" name="price" value="{{ old('price') }}" required>
                @error('price') <div style="color: red;">{{ $message }}</div> @enderror
            </div>

            <button type="submit">Zakazi</button>
        </form>
    </div>
@endsection
