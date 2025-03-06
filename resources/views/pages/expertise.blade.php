@extends('admin.layouts.dashboard')
@section('content')
<script src="https://cdn.tiny.cloud/1/tg6k0dv098m2uo06ty67wwgx6ypu75go4rd4qcemrjyif8dx/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    tinymce.init({
    selector: 'textarea#description', // Cible le champ description
    plugins: 'advlist autolink lists link image charmap print preview anchor code textcolor colorpicker',
    toolbar: 'undo redo | styleselect | bold italic forecolor backcolor | fontsizeselect | alignleft aligncenter alignright alignjustify | outdent indent | link image',
    menubar: false,
    branding: false,
    height: 300,
    content_style: "body { font-size: 16px; }", // Définit la taille de base
    fontsize_formats: "8pt 10pt 12pt 14pt 18pt 24pt 36pt", // Définit les tailles disponibles
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
        <form method="POST" action="/expert" enctype="multipart/form-data">
            @csrf

        <div class="container-fluid">
             <div class="row">
                 
                 <div class="col-lg-12">
                    <div class="form-group mb-4">
                        <label>Redigez la Description</label>
                        <textarea id="description"  name="description" class="form-control">{{ old('description') }}</textarea>
                        @error('description')
                        <div class="text text-danger">{{$message}}</div> 
                        @enderror
                    </div>
                    
                 <p><button type="submit" class="btn btn-primary">Ajouter</button></p>
             </div>
        </div>
     </div>
</form>
    </section>
 {{-- fin presentation des acctivités --}}


@endsection