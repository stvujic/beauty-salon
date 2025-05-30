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

            <form method="POST" action="{{ route('appointments.store') }}">
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

                    <!-- Datum i vreme -->
                    <div class="col-12">
                        <label for="appointment_date">Datum i vreme</label>
                        <input type="datetime-local" name="appointment_date" id="appointment_date" value="{{ old('appointment_date') }}" required />
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

    <!-- JavaScript za prikaz cene -->
    <script>
        const packageSelect = document.getElementById('package_id');
        const priceInput = document.getElementById('price');
        const packages = {!! json_encode($packages) !!};

        function updatePrice() {
            const selectedId = packageSelect.value;
            const selectedPackage = packages.find(p => p.id === parseInt(selectedId));
            priceInput.value = selectedPackage ? selectedPackage.price + ' RSD' : '';
        }

        packageSelect.addEventListener('change', updatePrice);
        window.addEventListener('DOMContentLoaded', updatePrice);
    </script>
@endsection
