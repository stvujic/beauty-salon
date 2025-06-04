@php use App\Models\Appointment;use App\Models\Comment;use App\Models\GalleryImage;use App\Models\Package;use App\Models\User; @endphp
@extends('layouts.front')

@section('title', 'Admin Dashboard')

@section('content')
    <section class="wrapper style1 special fade-up">
        <div class="container">
            <header class="major">
                <h2>Dobrodošao administratoru</h2>
                <p>Ovde možeš pratiti osnovne informacije o radu sajta.</p>
            </header>

            <div class="row">
                <div class="col-4 col-12-medium">
                    <strong>Ukupno korisnika:</strong>
                    <p>{{ User::count() }}</p>
                </div>

                <div class="col-4 col-12-medium">
                    <strong>Registrovanih korisnika danas:</strong>
                    <p>{{ \App\Models\User::whereDate('created_at', now()->toDateString())->count() }}</p>
                </div>

                <div class="col-4 col-12-medium">
                    <strong>Rezervacije dodate danas:</strong>
                    <p>{{ Appointment::whereDate('created_at', today())->count() }}</p>
                </div>

                <div class="col-4 col-12-medium">
                    <strong>Komentara danas:</strong>
                    <p>{{ Comment::whereDate('created_at', today())->count() }}</p>
                </div>

                <div class="col-4 col-12-medium">
                    <strong>Komentara na čekanju:</strong>
                    <p>{{ Comment::where('is_approved', false)->count() }}</p>
                </div>

                <div class="col-4 col-12-medium">
                    <strong>Zakazano danas:</strong>
                    <p>{{ Appointment::whereDate('appointment_date', today())->count() }}</p>
                </div>

            </div>
        </div>
    </section>
@endsection
