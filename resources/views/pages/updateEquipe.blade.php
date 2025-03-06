@extends('admin.layouts.dashboard')

@section('content')
    <section class="section-service1">
        <form method="POST" action="{{ route('equipe.add') }}" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" value="{{ $equipe->id }}" style="display: none">

        <div class="container-fluid">
            <div class="form-group mb-4">
                <label>Nom</label>
                <input type="text" name="nom" class="form-control" name="nom" value="{{$equipe->nom}}"" placeholder="Nom du service">
                @error('nom')
                     <div class="text text-danger">{{$message}}</div> 
                @enderror
            </div>   
            <div class="form-group mb-4">
                <label>Description de la fonction</label>
                <textarea style="height:100px;" name="fonction" class="form-control" name="fonction" placeholder="Decription de la fonction">{{$equipe->fonction}}</textarea>
                @error('fonction')
                <div class="text text-danger">{{$message}}</div> 
                @enderror
            </div>
           
                    <div class="mb-3">
                        <label for="image" class="form-label">Image Personne</label>
                        <input type="file" name="image" class="form-control">
                        
                        @if($equipe->path_image)
                            <div class="mt-2">
                                <p>Image actuelle :</p>
                                <img src="{{ asset('storage/' . $equipe->path_image) }}" alt="Image Personne" style="max-width: 200px; max-height: 200px;">
                            </div>
                        @endif
                        
                        @error('image')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group mb-4">
                        <input type="text" name="id" class="form-control" value="{{$equipe->id}}" style="display: none">
                    </div>
                    
                    <p><button type="submit" class="btn btn-primary">Modifier la personne</button></p> 
                   
             
     </div>
</form>
    </section>
 {{-- fin presentation des acctivités --}}


@endsection