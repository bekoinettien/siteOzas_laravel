@extends('admin.layouts.dashboard')

@section('content')
    <section class="section-service1">
        <form method="POST" action="{{ route('partenaire.add') }}" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" value="{{ $partenaire->id }}" style="display: none">

        <div class="container-fluid">
             
                    <div class="mb-3">
                        <label for="image" class="form-label">Image du partenaire</label>
                        <input type="file" name="image" class="form-control">
                        
                        @if($partenaire->image_path)
                            <div class="mt-2">
                                <p>Image actuelle :</p>
                                <img src="{{ asset('storage/' . $partenaire->image_path) }}" alt="Image du service" style="max-width: 200px; max-height: 200px;">
                            </div>
                        @endif
                        
                        @error('image')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group mb-4">
                        <input type="text" name="id" class="form-control" value="{{$partenaire->id}}" style="display: none">
                    </div>
                   
                    
                    <p><button type="submit" class="btn btn-primary">Modifier le partenaire</button></p> 
                   
             
     </div>
</form>
    </section>
 {{-- fin presentation des acctivités --}}


@endsection