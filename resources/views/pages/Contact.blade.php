@extends('Layout/Header')
@section('content')
<style>
    .secttion-1 {
        background-image: url('images/contact.jpg'); /* Remplace par ton image */
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        color: #fff;
        text-align: center;
        height: 250px;
    }
    
    
</style>
</head>
<body>
<section class="secttion-1">
 
</section>
</body>

<section class="section-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                
                <div class="box-contact">
                    <div class="img-box-contact">
                        <i class="fa-solid fa-location-dot loc"></i>
                    </div>
                    <div class="detail-box-contact">
                      <h5>
                        Adresse
                      </h5>
                      <p class="p-exp-contact">
                        II Plateaux Blv 8ième Tranche ,Rue L84, Pont Soro, Pharmacie Notre Dame du Grand signe 
                      </p>
                  </div>
                </div>
                <div class="box-contact">
                        <div class="img-box-contact">
                            <i class="fa-solid fa-phone tel"></i>
                        </div>
                        <div class="detail-box-contact">
                          <h5>
                            Téléphone
                          </h5>
                          <p class="p-exp-contact">
                            +225 07 58 31 93 30   
                          </p> 
                        </div>
                </div>
                    
                <div class="box-contact">
                            <div class="img-box-contact">
                                <i class="fa-solid fa-envelope env"></i>
                            </div>
                            <div class="detail-box-contact">
                              <h5>
                                Adresse Email
                              </h5>
                              <p class="p-exp-contact">
                                contacts@oozas.com  
                              </p>
                            </div>
                </div>
            </div>
            <div class="col-lg-1">

            </div>
            <div class="col-lg-7">
                <form action="/contacts" method="POST" class="titre-contact">
                    @csrf

                    <h3 class="titre">Ecrivez- <span> Nous Ici!</span></h3>
                      <div class="mb-4">
                        <label for="Nom" class="form-label">Nom & Prenoms</label>
                        <input type="text" class="form-control inp" name="nom" value="{{old('nom')}}">
                        @error('nom')
                        <div class="text text-danger">{{$message}}</div>  
                       @enderror
                    <br>  
                      </div>
                    <div class="mb-4">
                        <div class="row">
                            <div class="col">
                                <label for="email">Adresse Email</label>
                              <input type="email" class="form-control"  name="email" value="{{old('email')}}">
                              @error('email')
                              <div class="text text-danger">{{$message}}</div> 
                          @enderror
                          <br>  
                            </div>
                            <div class="col">
                                <label for="premons">Télephone</label>
                              <input type="text" class="form-control"  name="telephone" value="{{old('telephone')}}">
                              @error('telephone')
                              <div class="text text-danger">{{$message}}</div>
                              
                          @enderror
                          <br>  
                            </div>
                          </div>
                    </div>
                    <div class="mb-4">
                        <label for="exampleFormControlTextarea1" class="form-label">Votre Message</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="message" value="{{old('message')}}"></textarea>   
                        @error('message')
                        <div class="text text-danger">{{$message}}</div>
                        
                    @enderror
                    <br>           
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary cont">Envoyer</button>
                    </div>
                  </form>
            </div>
        </div>
    </div>
</section>
<section>
    
</section>
@endsection
