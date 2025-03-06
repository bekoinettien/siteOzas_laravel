<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/Monstyle/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/Monstyle/stylecontact.css')}}">
    <link rel="stylesheet" href="{{asset('css/Monstyle/styleservice.css')}}">
    <link rel="stylesheet" href="{{asset('css/Monstyle/styleabout.css')}}">
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Oozas</title>
  
    <link rel="icon" type="image/x-icon" href="images/logo1.png">
   
   

</head>
<body>
    <header>
         <nav class="navbar navbar-expand-lg" style="background-color: #e3f2fd;">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        
        <a class="navbar-brand " href="/about"> <img src="{{ asset('images/logo1.png') }}" alt="Oozas" class="logo" style="height: 45px;">
        </a>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
          
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active navig" aria-current="page" href="/">Accueil</a>
            </li>
            {{-- <li class="nav-item">
              <a class="nav-link navig" href="/about">A Propos</a>
            </li> --}}
            <li class="nav-item">
              <a class="nav-link navig" href="/expertise">Nos Expertises</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link navig" href="/prestations">Formations</a>
            </li>
            <li class="nav-item">
              <a class="nav-link navig" href="references">References</a>
            </li>
            <li class="nav-item">
              <a class="nav-link navig" href="/blogs">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link navig" href="/contact">Contactez-Nous</a>
            </li>
            
            @auth
                
            @if(auth()->check() && auth()->user()->is_admin == 3)
            <li class="nav-item">
              <a class="nav-link navig" href="/admin">Admin</a>
            </li>
            @endif
            @endauth
            {{-- <li class="nav-item">
              <a class="nav-link navig" href="/login">Connexion</a>
            </li>
            <li class="nav-item">
              <a class="nav-link navig" href="/register">Inscription</a>
            </li> --}}
          </ul>
        </div>
        {{-- <div >
          <form class="d-flex" role="search" action="{{ route('search') }}" method="GET">
            <input class="form-control" style="height: 30px; margin-top:10px" type="search" name="query" placeholder="Tapez ici ..." aria-label="Search">
            <button class="btn btn-outline-success" type="submit" style="height: 30px; margin-top:10px">Rechercher</button>
        </form>
        
        </div> --}}
      </div>
    </nav>
    </header>
      @yield('content')
      <button id="back-to-top" class="btn btn-primary" title="Revenir en haut">
        ↑
      </button>
</body>
<script src="{{asset('js/style.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

@extends('Layout/foot')
</html>