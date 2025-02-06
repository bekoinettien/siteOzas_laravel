@extends('Layout/header')

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
        <h2> Nos domaines  <span>Expertises</span></h2>
      </div>
      <div class="row">
    
        @foreach($service as $index => $services)
        <div class="col-sm-6 col-md-4 col-lg-4">
          <div class="box-service ">
            <div>
              <img src="/storage/service/{{ basename($services->image_path) }}" style="max-width: 80px; height: 70px; padding-top:10px">

              <h4>{{ $services->titre }}</h4>
              <p>{{ $services->description}}</p>
              <p>{{ $services->created_at}}</p>
            </div>
          </div>
          <div class="bout">
           <a href="/service-odoo/edit/{{$services->id}}" class=" btn btn-success mod">MODIFIER</a>
           <a href="/service-odoo/delete/{{$services->id}}" class=" btn btn-danger sup">SUPPRIMER</a>
          </div>     
        </div>
        @endforeach
    
      </div>
    </div>
    </section>
@endsection