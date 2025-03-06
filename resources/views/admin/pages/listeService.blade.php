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
                    {{-- <img src="/storage/service/{{ basename($service->image_path) }}" alt="{{ $service->titre }}" class="img-fluid" style="max-width: 100%; height: auto;"> --}}
                    
                    <p>{!! $service->contenue !!}</p>
                    <p>Créé le : {{ $service->created_at }}</p>
                </div>
                 
            </div>
        </div>
    </section>
@endsection


