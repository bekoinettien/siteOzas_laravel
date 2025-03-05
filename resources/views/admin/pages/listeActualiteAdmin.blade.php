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
    <a href="/news" class="btn btn-success mod" style="margin: 5px;">Ajouter une nouvelle Actualité</a></br>
    <a href="" class="btn btn-danger sup" style="margin: 5px;">SUPPRIMER</a>
    </div>
</section>

<section>
    <div class="container">
      <div class="titre">
        <h2> NOS  <span>ACTUALITES</span></h2>
      </div>
      <table>
        <thead>
          <tr>
            <th>Image</th>
            <th>Titre</th>
            <th>Description</th>
            <th>Date de création</th>
            @if(auth()->check() && auth()->user()->is_admin == 3)
            <th>Actions</th>
            @endif
          </tr>
        </thead>
        <tbody>
      
        @foreach($actualite as $index => $actualites)
        
            <tr>
                <td> <img src="/storage/actualite/{{ basename($actualites->image_path) }}" style="max-width: 100px; height: 100px; padding-top:10px"> </td>
  
              <td>{{ $actualites->titre }}</td>
              <td>{{ $actualites->description}}</td>
              <td>{{ $actualites->created_at}}</td>
            
          
            @if(auth()->check() && auth()->user()->is_admin == 3)
            <td>
                <a href="/actualite/edit/{{$actualites->id}}" class=" btn btn-success mod" style="margin: 5px;">MODIFIER</a>
                <a href="/actualite/delete/{{$actualites->id}}" class=" btn btn-danger sup">SUPPRIMER</a>
            </td>
           @endif
        </tr>
        @endforeach
    
      </div>
  
    </div>
  </section>
@endsection