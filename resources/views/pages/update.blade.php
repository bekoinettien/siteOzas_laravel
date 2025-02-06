@extends('Layout/headadmin')
@section('content')
    <section class="section-service1">
        <form method="POST" action="/services/odoo/edit/" enctype="multipart/form-data">
            @csrf

        <div class="container-fluid">
             <div class="row">
                 <div class="col-lg-5">
                   <img src="images/lampe.jpg" alt="" width="100%" height="350px">
                 </div>
                 <div class="col-lg-7">
                    <div class="form-group mb-4 mt-4">
                        <label>Image du service</label><br />
                        <input type="file" name="image" required accept="image/*" value="{{$service->image}}">
                        @error('image')
                        <div class="text text-danger">{{$message}}</div> 
                            
                         @enderror
                    </div>
                    <div class="form-group mb-4">
                        <input type="text" name="id" class="form-control" value="{{$service->id}}" style="display: none">
                    </div>
                    <div class="form-group mb-4">
                        <label>Titre du service</label>
                        <input type="text" name="titre" class="form-control" name="titre" value="{{$service->titre}}"" placeholder="Nom du service">
                        @error('titre')
                             <div class="text text-danger">{{$message}}</div> 
                        @enderror
                    </div>   
                    <div class="form-group mb-4">
                        <label>Redigez la Description</label>
                        <textarea style="height:100px;" name="description" class="form-control" name="description" placeholder="Decription du service">{{$service->description}}</textarea>
                        @error('description')
                        <div class="text text-danger">{{$message}}</div> 
                        @enderror
                    </div>
                   
                    <p><button type="submit" class="btn btn-primary">Modifier le service</button></p> 
                   
             </div>
        </div>
     </div>
</form>
    </section>
 {{-- fin presentation des acctivités --}}


@endsection