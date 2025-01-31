{{-- Debut logo  --}}
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
      <div class="logo-item"><img src="images/part1.jpg" alt="Logo 1" ></div>
      <div class="logo-item"><img src="images/part2.png" alt="Logo 2"></div>
      <div class="logo-item"><img src="images/part3.png" alt="Logo 3"></div>
      <div class="logo-item"><img src="images/part4.png" alt="Logo 4"></div>
      <div class="logo-item"><img src="images/part5.png" alt="Logo 1" ></div>
      <div class="logo-item"><img src="images/part6.png" alt="Logo 2"></div>
      <div class="logo-item"><img src="images/part7.png" alt="Logo 3"></div>
      <div class="logo-item"><img src="images/part8.png" alt="Logo 4"></div>
      <div class="logo-item"><img src="images/part9.png" alt="Logo 1" ></div>
      <div class="logo-item"><img src="images/part10.png" alt="Logo 2"></div>

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
{{-- Fin  logo --}}

<div class="container-fluid footer">
    <div class="row">
        <div class="col-lg-5"> 
            <div class="imag-foot">
                <img src="images/logo.jpg" alt="" class="image-foot">
            </div>
            <p class="services-foot">Technologies Du Sud (TDS) a été fondé en 2013. 
                C’est un Cabinet de consultance exerçant dans les domaines du
                développement de logiciel, d’intégration de solution de Gestion 
                basé sur l’ERP Odoo et de formation continue. Ses fondateurs sont
                des experts en système d’information issus des grands cabinets de
                Consulting locaux et Européens.
                </p> 
        </div>
        <div class="col-lg-3">
          <div class="titrefoot">
            <h1 class="titre-foot">Nos services</h1>
          </div>
             <div class="menu-foot">

                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                      <a class="foot" href="#">Accueil</a>
                    </li>
                    <li class="nav-item">
                      <a class="foot"  href="#">A Propos</a>
                    </li>
                    <li class="nav-item">
                      <a class="foot"  href="#">Nos Expertises</a>
                    </li>
                    <li class="nav-item">
                      <a class="foot" href="#">Blog</a>
                    </li>
                    <li class="nav-item">
                      <a class="foot" href="#">Formations</a>
                    </li>
                    <li class="nav-item">
                      <a class="foot"  href="#">References</a>
                    </li>
                    <li class="nav-item">
                      <a class="foot" href="#">Contact</a>
                    </li>
                  </ul>
             </div>
        </div>
        <div class="col-lg-3">
            <div class="cont-foot">
                <h2>Contact</h2>
            </div>
            <div class="icon-foot">
            <ul>
                <li>  
                    <i class="fa-solid fa-phone"></i>
                    <p>+225 27 22 502 238</p>
                </li>
                <li>
                    <i class="fa-solid fa-location-dot"></i>
                    <p> II Plateaux 7ème Tranche Rue L100, lot 3656 </p>
                </li>
                <li>
                    <i class="fa-solid fa-envelope"></i>
                    <p>contacts@tds.ci</p>
                </li>
            </ul>
        </div>
        </div>
    </div>
</div>