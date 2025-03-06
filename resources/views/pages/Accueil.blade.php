@extends('Layout/Header')

@section('content')
<div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active " data-bs-interval="10000">
      <img src="images/AT2.jpg" class="d-block w-100 tres " alt="...">
      <div class="titre-img1 container">
        <h3 class="text11">
          Odoo, la solution ERP idéale pour tous vos problèmes de gestion
           d'entreprise, Complète, Simple et abordable. </br>
           <span style="font-size: 30px;">Oozas nous sommes à vos côtés pour vous aider à bien
         réussir votre implémentation</span>
        </h3>
      </br>
     
         <div>
          <a href="#services" class="btn btn-primary">Savoir Plus</a>
          <a href="/contact" class="btn btn-success">Contactez-Nous</a>  
         </div>
            
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="10000">
      <img src="images/BUS1.jpg" class="d-block w-100  tres " alt="...">
      <div class="titre-img1 container">
        <h3 class="text11">
          Sociétés de transport, faites du voyage dans vos véhicules, 
          un expérience inoubliable... </br>
          <span style="font-size: 30px;">avec notre système de  réservation et de gestion des passagers</span>
        </h3>
      </br>
      <p class="">Nous vous proposons des formations sur mesures</p>
        <a href="/expertise" class="btn btn-primary">Savoir Plus</a>
      <a href="/contact" class="btn btn-success">Contactez-Nous</a>        
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/ERP.webp" class="d-block w-100  tres  " alt="...">
      <div class="titre-img1 container">
        <h1 class="text11">
          Odoo pour la Fabrication:
          Tout ce dont vous avez besoin en une seule plateforme, rapide et
           facile à utiliser. </br>
           <span style="font-size: 30px;"> MRP + MES + PLM + Qualité + Atelier + Maintenance</span>
        </h1>
      </br>
      <p class="">Nous vous proposons des formations sur mesures</p>
      <a href="/expertise" class="btn btn-primary">Savoir Plus</a>
      <a href="/contact" class="btn btn-success">Contactez-Nous</a>        
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


{{-- debut evenement --}}
<section>
  <div class="container">
    <div class="titre">
      <h2> NOS  <span>ACTUALITES</span></h2>
    </div>
    <div class="row">
    
      @foreach($actualite as $index => $actualites)
      <div class="col-sm-6 col-md-4 col-lg-4">
        <div class="box-service ">
          <div>
            <img src="/storage/actualite/{{ basename($actualites->image_path) }}" style="max-width: 280px; height: 150px; padding-top:10px">

            <h4>{{ $actualites->titre }}</h4>
            <p>{{ $actualites->description}}</p>
            <p>{{ $actualites->created_at}}</p>
          </div>
        </div>
        <div class="bout">
          @if(auth()->check() && auth()->user()->is_admin == 3)
         <a href="/actualite/edit/{{$actualites->id}}" class=" btn btn-success mod">MODIFIER</a>
         <a href="/actualite/delete/{{$actualites->id}}" class=" btn btn-danger sup">SUPPRIMER</a>
         @endif
        </div>     
      </div>
      @endforeach
  
    </div>

  </div>
</section>
{{-- fin evenement --}}



  {{-- section de la presentation des activites --}}

 {{-- fin presentation des acctivités --}}
  <style>
    .secttion-4 {
        background-image: url('images/accueil1.jpg'); /* Remplace par ton image */
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        padding: 30px 0;
        color: #fff;
        text-align: center;
        margin-top: 100px;
    }
    .secttion-4 h1 {
        margin-bottom: 20px;
        font-size: 2.5rem;
    }
    .secttion-4 p {
        font-size: 1.2rem;
    }
</style>

</head>
<body>


  {{-- text service --}}
  <section class="service_section layout_padding" id="services">
    <div class="container ">
      <div class="titre">
        <h2> Nos domaines  <span>Expertises</span></h2>
      </div>
      <div class="row">
    
        @foreach($service as $index => $services)
        <div class="col-sm-6 col-md-4 col-lg-4">
          <div class="box-service ">
            <div>
              <img src="/storage/service/{{ basename($services->image_path) }}" class="img-image" style="margin-bottom: 15px;">

              <h4><a href="{{ route('service.show', $services->id) }}" style="background-color: rgb(243, 205, 14); text-decoration: none; color:#fff">{{ $services->titre }}</a>
              </h4>
              <p>{!! $services->description !!}</p> 
            </div>
          </div>
          <div class="bout">
            @if(auth()->check() && auth()->user()->is_admin == 3)
           <a href="/service-odoo/edit/{{$services->id}}" class=" btn btn-success mod">MODIFIER</a>
           <a href="/service-odoo/delete/{{$services->id}}" class=" btn btn-danger sup">SUPPRIMER</a>
           @endif
          </div>     
        </div>
        @endforeach
    
      </div>
    </div>
  </section>
  {{-- fin service --}}
<section class="secttion-4">
    <h1>A Propos</h1>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <p class="services-1"><span class="section-1-titre">Qui Sommes Nous!</span><br>
                  Nos experts sont généreux, ils donnent tout leur savoir-faire. Vous allez aimer travailler avec nous.

Avec notre « ancêtre » AfricaLand fondée en 1998, notre « mère » Technologies Du Sud fondé en 2013, c'est plus de 25 années d'expérience capitalisées que nous sommes heureux de mettre à votre disposition sous un tout nouveau label : Oozas

Nous avons réalisé de grands projets dans l'administration ivoiriennes (aux Douanes, au Trésor, au Ministère de la Fonction Publique, au BNETD), ainsi que chez de nombreux privés. Nous sommes partenaire Odoo depuis 2011

                  </p>
            </div>
            <div class="col-lg-4 mx-auto">
              
          </div>
        </div>
    </div>
</section>
</body>
<section>
  <div class="titre">
  <h2> NOTRE <span>EQUIPE</span></h2>
  </div>
  <div class="container">
    <div class="row">
      @foreach($equipe as $index => $equipes)
     
     
      <div class="col-6 col-lg-3 col-sm-6">
          <div class="card" >
              <div class="card-body">
                  <h5 class="card-title">{{ $equipes->nom }}</h5>
                  <p class="card-text">{{ $equipes->fonction}}</p>
                </div>
                <img src="/storage/equipe/{{ basename($equipes->path_image) }}" style="max-width: 280px; height: 150px; padding-top:10px"  class="card-img-top" alt="...">

          </div>
      </div>
      
      @endforeach
    </div>
</div>

</section>

{{-- debut partenaire --}}

{{-- Debut logo --}}
<section>
  <div class="titre">
    <h2> Nos <span>Partenaires</span></h2>
  </div>
  <!-- Owl Carousel CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
  <style>
      .logo-item {
          display: flex;
          justify-content: center;
          align-items: center;
          padding: 10px;
          margin-top: 15px
      }

      .logo-item img {
          max-width: 300px;
          max-height: 100px;
          object-fit: contain;
      }
  </style>
</head>
<body>
  <!-- Carousel -->
  <div class="logo-carousel owl-carousel">
      @foreach($partenaires as $partenaire)
      <div class="logo-item"><img src="{{ asset('storage/' . $partenaire->image_path) }}" alt="Logo {{ $partenaire->nom }}"></div>
      @endforeach
  </div>

  <!-- jQuery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <!-- Owl Carousel JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <script>
      $(document).ready(function () {
          $(".logo-carousel").owlCarousel({
              loop: true,
              margin: 10,
              autoplay: true,
              autoplayTimeout: 2000,
              autoplayHoverPause: true,
              responsive: {
                  0: { items: 2 },
                  600: { items: 3 },
                  1000: { items: 5 }
              }
          });
      });
  </script>
</body>

</section>
{{-- Fin logo --}}


{{-- fin partenaire --}}
<script>
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function (e) {
          e.preventDefault();

          document.querySelector(this.getAttribute('href')).scrollIntoView({
              behavior: 'smooth'
          });
      });
  });
</script>
@endsection