@extends('layouts.front')

@section('title', 'Zakazi tretman')

@section('content')
    <section class="wrapper style1 special fade-up">
        <div class="container">
            <header class="major">
                <h2>Zakazi tretman</h2>
                <p>Izaberi paket, datum i vreme koji ti najviše odgovaraju.</p>
            </header>

            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul style="list-style-type: none;">
                        @foreach ($errors->all() as $error)
                            <li>• {{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('appointments.store') }}" style="max-width: 600px; margin: 0 auto;">
                @csrf

                <div class="row gtr-uniform">
                    <!-- Paket -->
                    <div class="col-12">
                        <label for="package_id">Paket</label>
                        <select name="package_id" id="package_id" required>
                            <option value="">-- Izaberi paket --</option>
                            @foreach($packages as $package)
                                <option value="{{ $package->id }}" {{ old('package_id') == $package->id ? 'selected' : '' }}>
                                    {{ $package->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Cena -->
                    <div class="col-12">
                        <label for="price">Cena (RSD)</label>
                        <input type="text" id="price" readonly>
                    </div>

                    <!-- Datum -->
                    <div class="col-12">
                        <label for="appointment_date">Datum</label>
                        <input
                            type="date"
                            name="appointment_date"
                            id="appointment_date"
                            required
                            style="background-color: #222; border: 1px solid #444; padding: 10px; border-radius: 5px;"
                        >
                    </div>

                    <!-- Termin -->
                    <div class="col-12">
                        <label for="appointment_time">Vreme</label>
                        <select name="appointment_time" id="appointment_time" required>
                            <option value="">-- Izaberi vreme --</option>
                        </select>
                    </div>

                    <!-- Napomena -->
                    <div class="col-12">
                        <label for="note">Napomena (opciono)</label>
                        <textarea name="note" id="note" rows="4">{{ old('note') }}</textarea>
                    </div>

                    <div class="col-12">
                        <ul class="actions">
                            <li><button type="submit" class="button primary">Zakazi</button></li>
                        </ul>
                    </div>
                </div>
            </form>
        </div>
    </section>

    <!-- JavaScript deo -->
    <script>
        const packageSelect = document.getElementById('package_id');
        const priceInput = document.getElementById('price');
        const dateInput = document.getElementById('appointment_date');
        const timeSelect = document.getElementById('appointment_time');
        const packages = {!! json_encode($packages) !!};

        function updatePrice() {
            const selectedId = packageSelect.value;
            const selectedPackage = packages.find(p => p.id === parseInt(selectedId));
            priceInput.value = selectedPackage ? selectedPackage.price + ' RSD' : '';
        }

        function fetchAvailableTimes() {
            const date = dateInput.value;
            const packageId = packageSelect.value;

            if (date && packageId) {
                fetch(`/available-times?date=${date}&package_id=${packageId}`)
                    .then(response => response.json())
                    .then(data => {
                        timeSelect.innerHTML = '<option value="">-- Izaberi vreme --</option>';
                        data.forEach(time => {
                            const option = document.createElement('option');
                            option.value = time;
                            option.textContent = time;
                            timeSelect.appendChild(option);
                        });
                    });
            }
        }

        packageSelect.addEventListener('change', () => {
            updatePrice();
            fetchAvailableTimes();
        });

        dateInput.addEventListener('change', fetchAvailableTimes);
        window.addEventListener('DOMContentLoaded', updatePrice);
    </script>
@endsection
