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

    <title>Ozas</title>
  
    <link rel="icon" type="image/x-icon" href="images/logo.jpg">
   
    <nav class="navbar navbar-expand-lg" style="background-color: #e3f2fd;">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        
        <a class="navbar-brand " href="/"> <img src="images/logo.jpg" alt="tdsci" class="logo" style="height: 35px"> </a>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active navig" aria-current="page" href="/">Accueil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link navig" href="/about">A Propos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link navig" href="/services">Nos Expertises</a>
            </li>
            <li class="nav-item">
              <a class="nav-link navig" href="/blogs">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link navig" href="/prestations">Formations</a>
            </li>
            <li class="nav-item">
              <a class="nav-link navig" href="/references">References</a>
            </li>
            <li class="nav-item">
              <a class="nav-link navig" href="/contact">Contactez-Nous</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

</head>
<body>
    
</body>
</html>
<body>
<div class="d-flex" id="wrapper">
    <!-- Sidebar -->
    <div  text-white p-3" id="sidebar-wrapper" style="width: 250px; height: 100%;" class="dashbord">
        <h3 class="text-center">Dashboard</h3>
        <hr>
        <ul class="nav flex-column">
            <!-- Menu principal -->
            <li class="nav-item">
              <a href="/service" class="nav-link text-white">AJOUTER UN SERVICE</a>
            </li>
              <hr>
              <li class="nav-item">
                <a href="/reference" class="nav-link text-white">AJOUTER UNE REFERENCE</a>
            </li>

            <hr>
           
            <li class="nav-item">
                <a href="/prestation" class="nav-link text-white">AJOUTER UNE PRESTATION</a>
            </li>
            <hr>

            <li class="nav-item">
              <a href="/blog" class="nav-link text-white">AJOUTER UN BOG</a>
           </li>

          <hr>
          <li class="nav-item">
            <a href="/news" class="nav-link text-white">AJOUTER UNE ACTUALITE</a>
         </li>

        <hr>
            {{-- <li class="nav-item">
                <a href="#" class="nav-link text-white d-flex justify-content-between align-items-center" data-bs-toggle="collapse" data-bs-target="#serviceSubmenu" aria-expanded="false" aria-controls="serviceSubmenu">
                    DETAILS DES SERVICES
                    <i class="fas fa-chevron-down"></i>
                </a>
                <!-- Sous-menu pour les services -->
                <div class="collapse" id="serviceSubmenu">
                    <ul class="nav flex-column ms-3">
                        <li class="nav-item">
                            <a href="/service-odoo" class="nav-link text-dashbord ">Service-Odoo</a>
                        </li>
                        <li class="nav-item">
                            <a href="/service-bigdata" class="nav-link text-dashbord ">services BIG DATA</a>
                        </li>
                        <li class="nav-item">
                            <a href="/service-devweb" class="nav-link text-dashbord ">Développement Web</a>
                        </li>
                        <li class="nav-item">
                            <a href="/service-cyber" class="nav-link text-dashbord ">Cybersécurité</a>
                        </li>
                        <li class="nav-item">
                            <a href="/service-formation" class="nav-link text-dashbord ">Formation continue</a>
                        </li>
                        <li class="nav-item">
                            <a href="/service-boutique" class="nav-link text-dashbord ">Boutique et services</a>
                        </li>
                    </ul>
                </div>
            </li>
            <hr>
            --}}
            <li class="nav-item">
                <a href="services-odoo" class="nav-link text-white">LISTE SERVICE</a>
            </li>

            <hr> 
        </ul>
    </div>
    <!-- Main content (Dynamic content area) -->
    <div class="flex-grow-1 p-4">
        @yield('content') <!-- Zone où le formulaire ou autre contenu sera chargé -->
    </div>
</div>
</body>
<script src="{{asset('js/style.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/35.0.1/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#description'))
            .catch(error => {
                console.error(error);
            });
    </script>