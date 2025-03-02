@extends('Layout/Header')

@section('content')
<div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active " data-bs-interval="10000">
      <img src="images/AT2.jpg" class="d-block w-100 tres " alt="...">
      <div class="titre-img1 container">
        <h3 class="text11">
          Odoo la solution ERP idéale pour tous vos problèmes de gestion
           d'entreprise, Complète, Simple et abordable. 
           <span>Oozas nous sommes à vos côtés pour vous aider à bien
         réussir votre implémentation</span>
        </h3>
      </br>
     
         <div>
          <a href="/services-odoo" class="btn btn-primary">Savoir Plus</a>
          <a href="/contact" class="btn btn-success">Contactez-Nous</a>  
         </div>
            
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="10000">
      <img src="images/BUS1.jpg" class="d-block w-100  tres " alt="...">
      <div class="titre-img1 container">
        <h3 class="text11">
          Sociétés de transport, faites du voyage dans vos véhicules, 
          un expérience inoubliable...
          avec notre système de  réservation et de gestion des passagers
        </h3>
      </br>
      <p class="">Nous vous proposons des formations sur mesures</p>
        <a href="/services" class="btn btn-primary">Savoir Plus</a>
      <a href="/contact" class="btn btn-success">Contactez-Nous</a>        
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/ERP.webp" class="d-block w-100  tres  " alt="...">
      <div class="titre-img1 container">
        <h1 class="text11">
          Odoo pour la Fabrication
          Tout ce dont vous avez besoin en une seule plateforme, rapide et
           facile à utiliser.
            MRP + MES + PLM + Qualité + Atelier + Maintenance
        </h1>
      </br>
      <p class="">Nous vous proposons des formations sur mesures</p>
      <a href="/services" class="btn btn-primary">Savoir Plus</a>
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
<section class="docs">
 {{-- <a href="document/CV_BEKOIN.pdf" download="devis.pdf"> <i class="fa-solid fa-cloud-arrow-down">azert</i></a> --}}
  {{-- <a href="document/CV_BEKOIN.pdf" class="btn btn-primary" download="devis.pdf">
    Télécharger le devis
</a>   --}}
</section>
{{-- DEBUT PRESENTATION --}}
<section class="animation-section">
  <!-- Column 1: Image -->
  <div class="col-lg-6 image-container">
      <img src="images/act1.jpg" alt="Image animée" class="img-annim1">
      <img src="images/act3.jpg" alt="Image animée" class="img-annim2">
      {{-- <img src="images/act2.png" alt="Image animée" class="img-annim3">
      <img src="images/act4.jpg" alt="Image animée" class="img-annim4"> --}}
  </div>

  <!-- Column 2: Text -->
  <div class="col-lg-6 text-container">
      <p>
        Domaines d'expertise :
        Nous intervenons dans divers secteurs des NTIC, notamment :
        Développement d'applications : Conception de logiciels sur mesure, développement d'applications web et mobiles.
        Solutions Cloud et hébergement : Migration vers le cloud, 
        hébergement sécurisé et gestion de données. <br>
        Sécurité informatique : Protection des systèmes d'information, audit de sécurité, mise en place de solutions de cybersécurité.
        Réseaux et télécommunications : Installation, maintenance et optimisation des réseaux d'entreprise.
        Intelligence artificielle et analyse de données : Développement d'algorithmes pour la prise de décision et la valorisation des données.
        Formation et accompagnement : Sensibilisation aux outils numériques, formations en bureautique, gestion des réseaux, et solutions ERP.<br>
        Nos valeurs :
        Chez Oozs Technologies, nous nous engageons à :<br>
        Innover : Nous utilisons les technologies les plus récentes pour proposer des solutions modernes et performantes.
        Collaborer : Nous plaçons nos clients au centre de nos priorités en travaillant main dans la main pour atteindre leurs objectifs.
        Protéger : Nous mettons un point d'honneur à sécuriser vos données et garantir leur confidentialité.
      </p>
  </div>
 
</section>
{{-- FIN PRESENTATION --}}

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
  <section>
    <div class="titre">
      <h2> Nos domaines  <span>Expertises</span></h2>
    </div>
    <div class="container-fluid">
      <div class="row">
       
        <div class="col-12 col-lg-4 col-sm-4">
          <div class="box ">
            <div class="img-box">
              <img src="images/service2.png" alt="" class="img-image" />
            </div>
            <div class="detail-box">
              <h5>
                Offre ERP Odoo
              </h5>
              <p  class="p-exp">
                Avec 14 année d'expérience dans la mise en 
                œuvre de l'ERP Odoo dans des entreprises de 
                diverses tailles, ...
              </p>
              <a href="/services-odoo" class="btn btn-primary">Plus d'Infos</a>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-4 col-sm-4">
          <div class="box ">
            <div class="img-box">
              <img src="images/service4.jpeg" alt="" class="img-image" />
            </div>
            <div class="detail-box">
              <h5>
                Offre de services
                BIG DATA
                            
              
              </h5>
              <p class="p-exp">
                La donnée occupe une place centrale dans un 
                contexte de digitalisation au sein de l'entreprise 
                de nos jours... 
                       
                  </p>
                  <a href="/services-bigdata" class="btn btn-primary">Plus d'Infos</a>
            </div>
          </div>
        </div>
        
        <div class="col-12 col-lg-4 col-sm-4">
          <div class="box ">
            <div class="img-box">
              <img src="images/service6.jpeg" alt="" class="img-image"/>
            </div>
            <div class="detail-box">
              <h5>
                Développement Web
               
              </h5>
              <p  class="p-exp">
                . Développement de site internet<br>
                . Développement d'application Web<br>
                . Analyse et conseils pour digitalisation...
               
              </p>
              <a href="/services-devweb" class="btn btn-primary">Plus d'Infos</a>
            </div>
          </div>
        </div>
        
        <div class="col-12 col-lg-4 col-sm-4">
          <div class="box ">
            <div class="img-box">
              <img src="images/service7.jpeg" alt="" class="img-image"/>
            </div>
            <div class="detail-box">
              <h5>
                Cybersécurité
              </h5>
              <p class="p-exp">
                La cybersécurité demeure un domaine 
                incontournable. Avec l’augmentation des 
                cyberattaques,... 
                
              </p>
              <a href="/services-cyber" class="btn btn-primary">Plus d'Infos</a>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-4 col-sm-4">
          <div class="box ">
            <div class="img-box">
              <img src="images/service8.jpeg" alt="" class="img-image"/>
            </div>
            <div class="detail-box">
              <h5>
                Formation continue
              
              </h5>
              <p class="p-exp">
                Technologies du Sud vous accompagne dans le 
                développement des vos compétences internes, 
                en vous offrant...
                
              </p>
              <a href="/services-formation" class="btn btn-primary">Plus d'Infos</a>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-4 col-sm-4">
          <div class="box ">
            <div class="img-box">
              <img src="images/service9.jpeg" alt="" class="img-image" />
            </div>
            <div class="detail-box">
              <h5>
                Boutique et services
              </h5>
              <p class="p-exp">
                Câblage Réseaux et pose de Fibre optique.
                Vente de matériel et tout accessoire 
               électronique...</p>
               
               <a href="/services-boutique" class="btn btn-primary">Plus d'Infos</a>
            </div>
          </div>
        </div>
        
      </div>
      <div class="bout">
        <a href="/services" class=" btn btn-success mod">VOIR PLUS</a>
       </div> 
  </section>
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
      <div class="col-6 col-lg-3 col-sm-6">
    
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
      <div class="col-6 col-lg-3 col-sm-6">
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

      <div class="col-6 col-lg-3 col-sm-6">
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
      <div class="col-6 col-lg-3 col-sm-6">
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

@endsection