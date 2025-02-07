@extends('Layout/Header')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
                <form action="register" method="POST">
                    @csrf
                    <div class="card" style="margin-top: 50px">
                        <div class="card-body" style="background-color: gold">
                            <label for="name" class="form-label">NOM</label>
                            <input type="text" name="name" placeholder="OZAS" value="{{old('name')}}" class="form-control">
                            @error('name')
                                <div class="text text-danger">
                                    <p>{{$message}}</p>
                                </div>
                            @enderror
                        </div>
                        <div class="card-body" style="background-color: gold">
                            <label for="lastname" class="form-label">PRENOMS</label>
                            <input type="text" name="lastname" placeholder="Ozas Ozas" value="{{old('lastname')}}" class="form-control">
                            @error('lastname')
                                <div class="text text-danger">
                                    <p>{{$message}}</p>
                                </div>
                            @enderror
                        </div>
                        <div class="card-body" style="background-color: gold">
                            <label for="Email" class="form-label">EMAIL</label>
                            <input type="email" name="email" placeholder="tata@gmail.com" value="{{old('email')}}" class="form-control">
                            @error('email')
                                <div class="text text-danger">
                                    <p>{{$message}}</p>
                                </div>
                            @enderror
                        </div>
                        <div class="card-body" style="background-color: gold">
                            <label for="password" class="form-label">Mot de Passe</label>
                            <input type="password" name="password" placeholder="*****"  class="form-control">
                            @error('password')
                                <div class="text text-danger">
                                    <p>{{$message}}</p>
                                </div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary" style="width:100%; text-align:center; margin-top:10px;">Valider</button>
                    </div>
                </form>
            </div>
            <div class="col-3"></div>
        </div>
    </div>
@endsection