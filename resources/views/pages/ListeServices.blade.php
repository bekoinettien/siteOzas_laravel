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


     <section>
      <div class="container">
        @foreach ($expertise as $index => $expertises)
        <p >{!! $expertises->description !!}</p> 
        @endforeach
      </div>
     </section>
 @endsection