@extends('admin.layouts.dashboard')

@section('content')
    <section class="section-service1">
        <form method="POST" action="/prestation" enctype="multipart/form-data">
            @csrf

        <div class="container-fluid">
             <div class="row">
                
                 <div class="col-lg-12">
                    <div class="form-group mb-4 mt-4">
                        <label>Image de la prestation</label><br />
                        <input type="file" name="image" required accept="image/*">
                        @error('image')
                        <div class="text text-danger">{{$message}}</div> 
                            
                         @enderror
                    </div>
                    <div class="form-group mb-4">
                        <label>Titre de la prestation</label>
                        <input type="text" name="titre" class="form-control" name="titre" value="{{ old('titre') }}" placeholder="Nom du service">
                        @error('titre')
                             <div class="text text-danger">{{$message}}</div> 
                        @enderror
                    </div>   
                    <div class="form-group mb-4">
                        <label>Redigez la Description</label>
                        <textarea style="height:100px;" name="description" class="form-control" name="description" value="{{ old('description') }}" placeholder="Decription du service"></textarea>
                        @error('description')
                        <div class="text text-danger">{{$message}}</div> 
                        @enderror
                    </div>
                 <p><button type="submit" class="btn btn-primary">Ajouter la prestation</button></p>
             </div>
        </div>
     </div>
</form>
    </section>
 {{-- fin presentation des acctivités --}}


@endsection