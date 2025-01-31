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
                <p class="services-1-about"><span class="section-1-titre">Qui Sommes Nous!</span><br>Technologies Du Sud (TDS) a été fondé en 2013. 
                  C’est un Cabinet de consultance exerçant dans les domaines du
                   développement de logiciel, d’intégration de solution de Gestion 
                   basé sur l’ERP Odoo et de formation continue. Ses fondateurs sont
                    des experts en système d’information issus des grands cabinets de
                     Consulting locaux et Européens.
                  Nos domaines d’activité couvrent aussi l’Audit de système
                   d’information, la planification stratégique et les schémas
                    directeurs, la rédaction de cahier des charges, la maîtrise 
                    d’ouvrage et la gestion de projet.
                  </p>
            </div>
            <div class="col-lg-4 mx-auto">
              
          </div>
        </div>
    </div>
</section>
</body>

<section>
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
      
</section>
 
 {{-- DEBUT DES NOUVELLES --}}
  <section>
    <div class="titre">
    <h2> NOTRE <span>EQUIPE</span></h2>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-3 col-sm-4">
      
            <div class="card" >
                <div class="card-body">
                    <h5 class="card-title">Konan Christophe</h5>
                    <p class="card-text">PDG</p>
                  </div>
              <img src="images/equipe1.png" class="card-img-top" alt="...">
              <div class="ico">
                <i class="fa-brands fa-facebook fa"></i>
                <i class="fa-solid fa-envelope en"></i>
                <i class="fa-brands fa-linkedin lin"></i>
                <i class="fa-brands fa-twitter twi"></i>
              </div>
            </div>
        </div>
        <div class="col-12 col-lg-3 col-sm-4">
          <div class="card" >
            <div class="card-body">
                <h5 class="card-title">Bekoin Etienne</h5>
                <p class="card-text">Informaticien Developpeur</p>
              </div>
            <img src="images/equipe3.jpg" class="card-img-top" alt="...">
            <div class="ico">
                <i class="fa-brands fa-facebook fa"></i>
                <i class="fa-solid fa-envelope en"></i>
                <i class="fa-brands fa-linkedin lin"></i>
                <i class="fa-brands fa-twitter twi"></i>
              </div>
          </div>
        </div>

        <div class="col-12 col-lg-3 col-sm-4">
          <div class="card">
            <div class="card-body">
                <h5 class="card-title">Ines Gregorienne</h5>
                <p class="card-text">Infographe</p>
            </div>
            <img src="images/equipe2.jpg" class="card-img-top" alt="...">
            <div class="ico">
                <i class="fa-brands fa-facebook fa"></i>
                <i class="fa-solid fa-envelope en"></i>
                <i class="fa-brands fa-linkedin lin"></i>
                <i class="fa-brands fa-twitter twi"></i>
              </div>
          </div>
        </div>
        <div class="col-12 col-lg-3 col-sm-4">
            <div class="card">
              <div class="card-body">
                  <h5 class="card-title">Yao Ruth</h5>
                  <p class="card-text">Commerciale</p>
              </div>
              <img src="images/pres1.jpg" class="card-img-top" alt="...">
              <div class="ico">
                <i class="fa-brands fa-facebook fa"></i>
                <i class="fa-solid fa-envelope en"></i>
                <i class="fa-brands fa-linkedin lin"></i>
                <i class="fa-brands fa-twitter twi"></i>
              </div>
            </div>
          </div>
  </div>
</div>
  </section>

  {{-- FIN DES NOUVELLE --}}

@endsection