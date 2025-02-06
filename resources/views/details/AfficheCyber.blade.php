@extends('Layout/Header')

@section('content')

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


<section class="service_section layout_padding">
    <div class="container ">
      <div class="titre">
        @foreach ($service_cyber as $index => $services_cyber)
        <h2> Detail  <span>{{ $services_cyber->titre }}</span></h2>
        @endforeach
      </div>
     
      <div class="row">
        
        <div class="col-lg-4">
          <div class="inf-service">
            <div class="titre-info">
              <h2 class="titre-autre">AUTRES SERVICES</h2>
            </div>
                <div class="box-odoo1">
                  <i class="fa-solid fa-arrow-right-long ico-serv"></i>
                    <a href="/services-odoo" class="titre-autres">ERP Odoo</a>
                </div>
            
                <div class="box-odoo1">
                  <i class="fa-solid fa-arrow-right-long ico-serv"></i>
                    <a href="/services-bigdata" class="titre-autres">BIG DATA</a>
                </div>
                <div class="box-odoo1">
                  <i class="fa-solid fa-arrow-right-long ico-serv"></i>
                  <a href="/services-devweb" class="titre-autres">Développement Web</a>
                </div>
          
                  
                <div class="box-odoo1">
                  <i class="fa-solid fa-arrow-right-long ico-serv"></i>
                  <a href="/services-formation" class="titre-autres">Formation continue</a>
                </div>
          
                <div class="box-odoo1">
                  <i class="fa-solid fa-arrow-right-long ico-serv"></i>
                  <a href="/services-boutique" class="titre-autres">Boutique et services</a>
                </div>     
        </div>
      </div>
        @foreach($service_cyber as $index => $services_cyber)
        <div class="col-sm-6 col-md-4 col-lg-8">
          <div class="box-service-odoo ">
            <div>
              <img src="/storage/service_cyber/{{ basename($services_cyber->path_image) }}" style="max-width: 100%; height: 270px; padding-top:10px">
              <h4>{{ $services_cyber->titre }}</h4>
              <p>{{ $services_cyber->description}}</p>
            
            </div>
          </div>
  
          <div class="bout">
            <a href="/cyber/edit/{{$services_cyber->id}}" class=" btn btn-success mod">MODIFIER</a>
            {{-- <a href="/service-odoo/delete/{{$services->id}}" class=" btn btn-danger sup">SUPPRIMER</a> --}}
           </div> 
              
        </div>
        @endforeach
    
      </div>
    </div>
    </section>
@endsection