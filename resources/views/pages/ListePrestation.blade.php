@extends('Layout/Header')

@section('content')

  <style>
    .secttion-1 {
        background-image: url('images/formation.png'); /* Remplace par ton image */
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        color: #fff;
        text-align: center;
        height: 250px;
        margin-top: 50px
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
        <h2> Nos <span> Prestations</span></h2>
      </div>
      <div class="row">
    
        @foreach($prestation as $index => $prestations)
        <div class="col-sm-6 col-md-4 col-lg-4">
          <div class="box-service ">
            <div>
              <img src="/storage/prestation/{{ basename($prestations->image_path) }}" style="max-width: 280px; height: 150px; padding-top:10px">

              <h4>{{ $prestations->titre }}</h4>
              <p>{{ $prestations->description}}</p>
              <p>{{ $prestations->created_at}}</p>
            </div>
          </div>
          <div class="bout">
            @if(auth()->check() && auth()->user()->is_admin == 3)
           <a href="/prestation/edit/{{$prestations->id}}" class=" btn btn-success mod">MODIFIER</a>
           <a href="/prestation/delete/{{$prestations->id}}" class=" btn btn-danger sup">SUPPRIMER</a>
           @endif
          </div>     
        </div>
        @endforeach
    
      </div>
    </div>
    </section>
@endsection