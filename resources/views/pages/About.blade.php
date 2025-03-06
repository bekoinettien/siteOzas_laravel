@extends('Layout/Header')

@section('content')
<style>
    .secttion-1 {
        background-image: url('images/about.jpg'); /* Remplace par ton image */
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        color: #fff;
        text-align: center;
        height: 250px;
        
    }
    .secttion-1 .titre-service h1{
       align-items: center;
       margin-left: 20px
    }
    
    
</style>
</head>
<body>
<section class="secttion-1">
 
</section>

</body>
<style>
    .secttion-1-about{
        background-image: url('images/accueil1.jpg'); /* Remplace par ton image */
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        padding: 30px 0;
        color: #fff;
        text-align: center;
        margin-top: 100px;
    }
    .secttion-1-about h1 {
        margin-bottom: 20px;
        font-size: 2.5rem;
    }
    .secttion-1-about p {
        font-size: 1.2rem;
    }
</style>
</head>
<body>
<section class="secttion-1-about">
    <h1>A Propos</h1>
    <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <p class="services-1-about"><span class="section-1-titre" style="color: #fff">Qui Sommes Nous!</span><br>
              Nos experts sont généreux, ils donnent tout leur savoir-faire. Vous allez aimer travailler avec nous.

              Avec notre « ancêtre » AfricaLand fondée en 1998, notre « mère » Technologies Du Sud fondé en 2013, c'est plus de 25 années d'expérience capitalisées que nous sommes heureux de mettre à votre disposition sous un tout nouveau label : Oozas
              
              Nous avons réalisé de grands projets dans l'administration ivoiriennes (aux Douanes, au Trésor, au Ministère de la Fonction Publique, au BNETD), ainsi que chez de nombreux privés. Nous sommes partenaire Odoo depuis 2011
              
              Oozas est une offre globale pour répondre à tous les besoins en matière de Système d’Information, d’équipement et, de renforcement de capacité technique et organisationnelle de ses clients. Nous pensons qu'avoir des partenaires multiples pour votre système d'information peut conduire à complexifier vos relations et en définitive à un manque de maîtrise de vos solutions. Nous vous proposons un partenariat durable basé sur la confiance et un bénéfice mutuel. Notre parfaite connaissance de l'entreprise et de ses enjeux d'une côte, et notre connaissance des dernières avancées technologiques nous permet de proposer la solution la plus adaptée à vos problèmes de gestion.
              
              Oozas est un réseau d’un réseau de compétences locales et internationales, capable de fournir un service de classe mondiale et est à votre disposition pour garantir le succès de vos projets.
              
        </div>
            <div class="col-lg-4 mx-auto">
              
          </div>
        </div>
    </div>
</section>

</body>

{{-- <section>
    <div class="tabs-container">
        <!-- Les onglets -->
        <div class="tabs">
          <button class="tab-btn active" data-tab="tab-1">NOTRE VISION</button>
          <button class="tab-btn" data-tab="tab-2">Equipe expérimentée</button>
          <button class="tab-btn" data-tab="tab-3">NOS MISSIONS</button>
        </div>
      
        <!-- Le contenu des onglets -->
        <div class="tab-content">
          <div id="tab-1" class="tab-pane active">
            <p>Contenu pour "Nos cibles" ici...</p>
          </div>
          <div id="tab-2" class="tab-pane">
            <div class="info">
              <img src="images/equipe.jpg" alt="Equipe expérimentée">
              <ul>
                <li>✔️ 10 à 20 collaborateurs</li>
                <li>✔️ Équipe compétente et expérimentée</li>
                <li>✔️ Présents depuis 2018</li>
              </ul>
            </div>
          </div>
          <div id="tab-3" class="tab-pane">
            <p>Contenu pour "Nos Missions" ici...</p>
          </div>
        </div>
      </div>
      
</section> --}}
 
 {{-- DEBUT DES NOUVELLES --}}
 
</div>
  </section>

  {{-- FIN DES NOUVELLE --}}
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

@endsection