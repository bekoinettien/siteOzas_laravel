@extends('Layout/headadmin')
@section('content')
    <section class="section-service1">
        <form method="POST" action="{{route('service.add')}}" enctype="multipart/form-data">
            @csrf

        <div class="container-fluid">
             
                    <div class="mb-3">
                        <label for="image" class="form-label">Image du service</label>
                        <input type="file" name="image" class="form-control">
                        
                        @if($service->image_path)
                            <div class="mt-2">
                                <p>Image actuelle :</p>
                                <img src="{{ asset('storage/' . $service->image_path) }}" alt="Image du service" style="max-width: 200px; max-height: 200px;">
                            </div>
                        @endif
                        
                        @error('image')
                            <div class="text-danger">{{ $message }}</div>
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
                    {{-- <div class="form-group mb-4">
                        <label>Redigez la Description</label>
                        <textarea style="height:100px;" name="description" class="form-control" name="description" placeholder="Decription du service">{{$service->description}}</textarea>
                        @error('description')
                        <div class="text text-danger">{{$message}}</div> 
                        @enderror
                    </div> --}}
                    {{-- <div class="form-group mb-4">
                        <label for="description">Rédigez la Description11</label>
                        <textarea id="description" name="description" class="form-control" placeholder="Description du service"></textarea>
                    </div>
                    
                    <script>
                        tinymce.init({
                            selector: '#description',
                            height: 300,
                            menubar: false,
                            plugins: 'advlist autolink lists link charmap print preview anchor',
                            toolbar: 'undo redo | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat'
                        });
                    </script> --}}
                    
                    <script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>
                    <textarea id="description"></textarea>
                    <script>
                        CKEDITOR.replace('description');
                    </script>
                    
                    <p><button type="submit" class="btn btn-primary">Modifier le service</button></p> 
                   
            
     </div>
</form>
    </section>
 {{-- fin presentation des acctivités --}}


@endsection