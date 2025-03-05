@extends('admin.layouts.dashboard')
@section('content')
<script src="https://cdn.tiny.cloud/1/tg6k0dv098m2uo06ty67wwgx6ypu75go4rd4qcemrjyif8dx/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    tinymce.init({
        selector: 'textarea#description', // Cible le champ description
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
<section class="service-odoo1">
    <h1 class="text-center">Ajouter Les details de la Formation</h1>

    <form method="POST" action="/formation/edit" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" value="{{ $service_formation->id }}" style="display: none">

        <div class="mb-3">
            <label for="image" class="form-label">Image du service</label>
            <input type="file" name="image" class="form-control">
            
            @if($service_formation->path_image)
                <div class="mt-2">
                    <p>Image actuelle :</p>
                    <img src="{{ asset('storage/' . $service_formation->path_image) }}" alt="Image du service" style="max-width: 200px; max-height: 200px;">
                </div>
            @endif
            
            @error('image')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>


        <div class="mb-3">
            <label for="titre" class="form-label">Nom du service</label>
            <input type="text" name="titre" class="form-control" value="{{ $service_formation->titre }}"" required>
            @error('titre')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Rédigez la Description</label>
            <textarea id="description" name="description" class="form-control" rows="4" required>{{ $service_formation->description }}</textarea>
            @error('description')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Modifier la Formation</button>
    </form>
</section>
@endsection
