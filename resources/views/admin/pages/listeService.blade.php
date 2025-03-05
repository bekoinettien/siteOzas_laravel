@extends('Layout/Header')

@section('content')
    <style>
        .secttion-1 {
            background-image: url("{{ asset('images/services.jpg') }}");
            /* Remplace par ton image */
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        color: #fff;
        text-align: center;
        height: 250px;
        }

        .secttion-1 .titre-service h1{
            align-items: center;
            margin-left: 20px;
        }
    </style>

    <section class="secttion-1">
        <h1>{{ $service->titre }}</h1> <!-- Affiche le titre du service -->
    </section>

    <section class="service_detail_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2>{{ $service->titre }}</h2>
                    <img src="/storage/service/{{ basename($service->image_path) }}" alt="{{ $service->titre }}" class="img-fluid" style="max-width: 100%; height: auto;">
                    
                    <p>{!! $service->contenue !!}</p>
                    <p>Créé le : {{ $service->created_at }}</p>
                </div>
                 
            </div>
        </div>
    </section>
@endsection


@extends('Layout/Header')

{{-- @section('content')
    <style>
        .secttion-1 {
            background-image: url('images/services.jpg'); /* Remplace par ton image */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            color: #fff;
            text-align: center;
            height: 250px;
        }

        .secttion-1 .titre-service h1 {
            align-items: center;
            margin-left: 20px;
        }

        /* Style de la sidebar */
        .sidebar {
            width: 100px;
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            background-color: #333;
            padding-top: 20px;
        }

        .sidebar a {
            padding: 10px 15px;
            text-decoration: none;
            font-size: 18px;
            color: white;
            display: block;
        }

        .sidebar a:hover {
            background-color: #575757;
        }

        .service-detail {
            margin-left: 270px; /* Espace pour la sidebar */
            padding: 20px;
        }
    </style>

    <!-- Sidebar -->
    <div class="sidebar">
        @foreach ($services as $service) <!-- Liste des services -->
            <a href="{{ route('service.show', $service->id) }}">{{ $service->titre }}</a>
        @endforeach
    </div>

    <!-- Contenu de la page -->
    <div class="service-detail">
        <section class="secttion-1">
            <h1>{{ $service->titre }}</h1> <!-- Affiche le titre du service -->
        </section>

        <section class="service_detail_section layout_padding">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <img src="/storage/service/{{ basename($service->image_path) }}" alt="{{ $service->titre }}" class="img-fluid" style="max-width: 100%; height: auto;">
                        <h2>{{ $service->titre }}</h2>
                        <p>{!! $service->description !!}</p>
                        <p>{!! $service->contenue !!}</p>
                        <p>Créé le : {{ $service->created_at }}</p>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
 --}}
