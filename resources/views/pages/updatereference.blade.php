@extends('Layout/headadmin')
@section('content')
    <section class="section-service1">
        <form method="POST" action="{{ route('reference.add') }}" enctype="multipart/form-data">
            @csrf

        <div class="container-fluid">

                    <div class="mb-3">
                        <label for="image" class="form-label">Image du service</label>
                        <input type="file" name="image" class="form-control">
                        
                        @if($reference->image_path)
                            <div class="mt-2">
                                <p>Image actuelle :</p>
                                <img src="{{ asset('storage/' . $reference->image_path) }}" alt="Image du service" style="max-width: 200px; max-height: 200px;">
                            </div>
                        @endif
                        
                        @error('image')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group mb-4">
                        <input type="text" name="id" class="form-control" value="{{$reference->id}}" style="display: none">
                    </div>
                    <div class="form-group mb-4">
                        <label>Titre de la Reference</label>
                        <input type="text" name="titre" class="form-control" name="titre" value="{{$reference->titre}}"" placeholder="Nom du service">
                        @error('titre')
                             <div class="text text-danger">{{$message}}</div> 
                        @enderror
                    </div>   
                    <div class="form-group mb-4">
                        <label>Redigez la Description</label>
                        <textarea style="height:100px;" name="description" class="form-control" name="description" placeholder="Decription du service">{{$reference->description}}</textarea>
                        @error('description')
                        <div class="text text-danger">{{$message}}</div> 
                        @enderror
                    </div>
                   
                    <p><button type="submit" class="btn btn-primary">Modifier le service</button></p> 
                   
             
     </div>
</form>
    </section>
 {{-- fin presentation des acctivités --}}


@endsection