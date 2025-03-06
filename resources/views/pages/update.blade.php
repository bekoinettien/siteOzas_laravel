@extends('admin.layouts.dashboard')
@section('content')
<script src="https://cdn.tiny.cloud/1/tg6k0dv098m2uo06ty67wwgx6ypu75go4rd4qcemrjyif8dx/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    tinymce.init({
        selector: 'textarea#contenue', // Cible le champ description
        plugins: 'advlist autolink lists link image charmap print preview anchor code',
        toolbar: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | outdent indent | link image',
        menubar: false,
        branding: false,
        height: 300,
        images_upload_url: '/upload-image', // Route Laravel pour upload
        automatic_uploads: true,
        file_picker_types: 'image',
        file_picker_callback: function(callback, value, meta) {
            let input = document.createElement('input');
            input.setAttribute('type', 'file');
            input.setAttribute('accept', 'image/*');
            input.onchange = function() {
                let file = this.files[0];
                let formData = new FormData();
                formData.append('file', file);

                fetch('/upload-image', {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    }
                })
                .then(response => response.json())
                .then(result => {
                    if (result.location) {
                        callback(result.location);
                    } else {
                        alert('Erreur lors de l\'upload');
                    }
                })
                .catch(() => alert('Erreur serveur'));
            };
            input.click();
        }
    });
</script>
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
                    <div class="form-group mb-4">
                        <label>Redigez la Description</label>
                        <textarea style="height:100px;" name="description" class="form-control" name="description" placeholder="Decription du service">{{$service->description}}</textarea>
                        @error('description')
                        <div class="text text-danger">{{$message}}</div> 
                        @enderror
                    </div>

                    <div class="form-group mb-4">
                        <label>Redigez le Contenue</label>
                        <textarea id="contenue" style="height:100px;" name="contenue" class="form-control" name="contenue" placeholder="Decription du service">{{$service->contenue}}</textarea>
                        @error('contenue')
                        <div class="text text-danger">{{$message}}</div> 
                        @enderror
                    </div>
                   
                    <p><button type="submit" class="btn btn-primary">Modifier le service</button></p> 
                   
            
     </div>
</form>
    </section>
 {{-- fin presentation des acctivités --}}


@endsection