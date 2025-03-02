@extends('Layout/headadmin') <!-- Hérite de la vue du dashboard -->

@section('content')
<section class="service-odoo1">
    <h1 class="text-center">Ajouter Les details du Développement Web</h1>

    <form method="POST" action="/devweb/edit" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" value="{{ $service_devweb->id }}" style="display: none">

        <div class="mb-3">
            <label for="image" class="form-label">Image du service</label>
            <input type="file" name="image" class="form-control">
            
            @if($service_devweb->path_image)
                <div class="mt-2">
                    <p>Image actuelle :</p>
                    <img src="{{ asset('storage/' . $service_devweb->path_image) }}" alt="Image du service" style="max-width: 200px; max-height: 200px;">
                </div>
            @endif
            
            @error('image')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>


        <div class="mb-3">
            <label for="titre" class="form-label">Nom du service</label>
            <input type="text" name="titre" class="form-control" value="{{ $service_devweb->titre }}"" required>
            @error('titre')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Rédigez la Description</label>
            <textarea name="description" class="form-control" rows="4" required>{{ $service_devweb->description }}</textarea>
            @error('description')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Modifier le Dev</button>
    </form>
</section>
@endsection
