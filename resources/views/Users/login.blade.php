@extends('Layout/Header')

@section('content')
    <div class="container-fluid">
    
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
                @if (session()->has('error'))
                    <div class="alert alert-danger">{{session()->get('error')}}</div>
                        
                    @endif
                    <form action="login" method="POST">
                    @csrf
                    <div class="card " style="margin-top: 50px">
                        <div class="card-body" style="background-color: gold">
                            <label for="Email" class="form-label">EMAIL</label>
                            <input type="email" name="email" placeholder="tata@gmail.com" value="{{old('email')}}" class="form-control">
                        </div>
                        <div class="card-body" style="background-color: gold">
                            <label for="password" class="form-label">Mot de Passe</label>
                            <input type="password" name="password" placeholder="TOTO"  class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary" style="width:100%; text-align:center; margin-top:10px;">Connecter</button>
                    </div>
                </form>
            </div>
            <div class="col-3"></div>
        </div>
    </div>
@endsection