@extends('admin.layouts.dashboard')

@section('content')
    <section class="section-service1">
        <form method="POST" action="/part" enctype="multipart/form-data">
            @csrf

        <div class="container-fluid">
             <div class="row">
                 
                 <div class="col-lg-12">
                    <div class="form-group mb-4 mt-4">
                        <label>Image du partenaire</label><br />
                        <input type="file" name="image" required accept="image/*">
                        @error('image')
                        <div class="text text-danger">{{$message}}</div> 
                            
                         @enderror
                    </div>
                   
                 <p><button type="submit" class="btn btn-primary">Ajouter le partenaire</button></p>
             </div>
        </div>
     </div>
</form>
    </section>
 {{-- fin presentation des acctivités --}}


@endsection