@extends('admin.layouts.dashboard')

@section('content')
    <section class="section-service1">
        <form method="POST" action="/equip" enctype="multipart/form-data">
            @csrf

        <div class="container-fluid">
             <div class="row">
                 
                 <div class="col-lg-12">
                    <div class="form-group mb-4">
                        <label>Nom Personne</label>
                        <input type="text" name="nom" class="form-control" name="nom" value="{{ old('nom') }}" placeholder="Nom du service">
                        @error('nom')
                             <div class="text text-danger">{{$message}}</div> 
                        @enderror
                    </div> 

                    <div class="form-group mb-4">
                        <label>Fonction</label>
                        <textarea style="height:100px;" name="fonction" class="form-control" name="fonction" value="{{ old('fonction') }}" placeholder="fonction de la personne"></textarea>
                        @error('fonction')
                        <div class="text text-danger">{{$message}}</div> 
                        @enderror
                    </div>

                    <div class="form-group mb-4 mt-4">
                        <label>Image Presonne</label><br />
                        <input type="file" name="image" required accept="image/*">
                        @error('image')
                        <div class="text text-danger">{{$message}}</div> 
                            
                         @enderror
                    </div>
                     
                    
                 <p><button type="submit" class="btn btn-primary">Ajouter la personne</button></p>
             </div>
        </div>
     </div>
</form>
    </section>
 {{-- fin presentation des acctivités --}}


@endsection