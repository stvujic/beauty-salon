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
                    <strong>Ukupno rezervacija:</strong>
                    <p>{{ Appointment::count() }}</p>
                </div>
                <div class="col-4 col-12-medium">
                    <strong>Aktivnih paketa:</strong>
                    <p>{{ Package::count() }}</p>
                </div>
                <div class="col-4 col-12-medium">
                    <strong>Komentara na čekanju:</strong>
                    <p>{{ Comment::where('is_approved', false)->count() }}</p>
                </div>
                <div class="col-4 col-12-medium">
                    <strong>Slika u galeriji:</strong>
                    <p>{{ GalleryImage::count() }}</p>
                </div>
            </div>
        </div>
    </section>
@endsection
