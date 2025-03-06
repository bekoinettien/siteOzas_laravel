@extends('admin.layouts.dashboard')

@section('content')
<style>
    
    .secttion-1 .titre-service h1{
       align-items: center;
       margin-left: 20px
    }
    table {
        width: 100%;
        border-collapse: collapse;
        margin: 20px 0;
    }
    th, td {
        padding: 10px;
        border: 1px solid #ddd;
        text-align: left;
    }
    th {
        background-color: #f2f2f2;
        font-weight: bold;
    }
    .btn-container {
        display: flex;
        justify-content: center; /* Center align the buttons */
    }
    
    
</style>
<section class="secttion-1">
    <div class="btn-container">
    <a href="/equip" class="btn btn-success mod" style="margin: 5px;">Ajouter une nouvelle Personne</a></br>
    <a href="" class="btn btn-danger sup" style="margin: 5px;">SUPPRIMER</a>
    </div>
</section>

<section>
    <div class="container">
      <div class="titre">
        <h2> NOTRE  <span>EQUIPE</span></h2>
      </div>
      <table>
        <thead>
          <tr>
            <th>nom</th>
            <th>fonction</th>
            <th>Image</th>
            <th>Date de création</th>
            @if(auth()->check() && auth()->user()->is_admin == 3)
            <th>Actions</th>
            @endif
          </tr>
        </thead>
        <tbody>
      
        @foreach($equipe as $index => $equipes)
        
            <tr>
                <td>{{ $equipes->nom }}</td>
                <td>{{ $equipes->fonction}}</td>
                <td> <img src="/storage/equipe/{{ basename($equipes->path_image) }}" style="max-width: 100px; height: 100px; padding-top:10px"> </td>
              
              <td>{{ $equipes->created_at}}</td>
            
          
            @if(auth()->check() && auth()->user()->is_admin == 3)
            <td>
                <a href="/equipe/edit/{{$equipes->id}}" class=" btn btn-success mod" style="margin: 5px;">MODIFIER</a>
                <a href="/equipe/delete/{{$equipes->id}}" class=" btn btn-danger sup">SUPPRIMER</a>
            </td>
           @endif
        </tr>
        @endforeach
    
      </div>
  
    </div>
  </section>
@endsection