@extends('Layout/Header')

@section('content')
<div id="carouselExampleDark" class="carousel carousel-dark slide" >
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="1000">
        <img src="images/reference.png" class="d-block" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>First slide label</h5>
          <p>Some representative placeholder content for the first slide.</p>
        </div>
      </div>
      <div class="carousel-item" data-bs-interval="2000">
        <img src="images/formation.png" class="d-block " alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Second slide label</h5>
          <p>Some representative placeholder content for the second slide.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/accueil1.jpg" class="d-block" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5 >Third slide label</h5>
          <p>Some representative placeholder content for the third slide.</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
{{-- DEBUT PRESENTATION --}}
  <section>
    <div class="container-fluid">
      <div class="row">
        <div class="col-6 col-lg-3 col-sm-3">
          <div class="box-pres">
            <div class="img-box-pres">
              <img src="images/crm.png" alt="" class="img-pres" />
            </div>
            <div class="detail-box">
              <h5 class="text">
                support
              </h5>
             
            </div>
          </div>
        </div>
        <div class="col-6 col-lg-3 col-sm-3">
          <div class="box-pres">
            <div class="img-box-pres">
              <img src="images/pres1.jpg" alt="" class="img-pres" />
            </div>
            <div class="detail-box">
              <h5>
                support
              </h5>
             
            </div>
          </div>
        </div>
        <div class="col-6 col-lg-3 col-sm-3">
          <div class="box-pres">
            <div class="img-box-pres">
              <img src="images/pres1.jpg" alt="" class="img-pres" />
            </div>
            <div class="detail-box">
              <h5>
                support
              </h5>
             
            </div>
          </div>
        </div>

        <div class="col-6 col-lg-3 col-sm-3">
          <div class="box-pres">
            <div class="img-box-pres">
              <img src="images/pres1.jpg" alt="" class="img-pres" />
            </div>
            <div class="detail-box">
              <h5>
                support
              </h5>
             
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

{{-- FIN PRESENTATION --}}


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
                de nos jours. Les entreprises s’appuient sur des... 
                       
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
                cyberattaques, protéger les systèmes informatiques n’a jamais
                 été aussi... 
                
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
                en vous offrant des formations pratiques, de ...
                
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
                <p class="services-1"><span class="section-1-titre">Qui Sommes Nous!</span><br>Technologies Du Sud (TDS) a été fondé en 2013. 
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