@extends('Layout/headadmin') <!-- Hérite de la vue du dashboard -->

@section('content')
<section class="service-odoo1">
    <h1 class="text-center">Ajouter Les details du Dev-Web</h1>

    <form method="POST" action="/service-devweb" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="image" class="form-label">Image du service</label>
            <input type="file" name="image" class="form-control" required>
            @error('image')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="titre" class="form-label">Nom du service</label>
            <input type="text" name="titre" class="form-control" value="{{ old('titre') }}" required>
            @error('titre')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Rédigez la Description</label>
            <textarea name="description" class="form-control" rows="4" required>{{ old('description') }}</textarea>
            @error('description')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Ajouter le service</button>
    </form>
</section>
@endsection
