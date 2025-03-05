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
    <a href="/part" class="btn btn-success mod" style="margin: 5px;">Ajouter une nouvelle Actualité</a></br>
    <a href="" class="btn btn-danger sup" style="margin: 5px;">SUPPRIMER</a>
    </div>
</section>

<section>
    <div class="container">
      <div class="titre">
        <h2> NOS  <span>PARTENAIRE</span></h2>
      </div>
      <table>
        <thead>
          <tr>
            <th>Image</th>
            <th>Date de création</th>
            @if(auth()->check() && auth()->user()->is_admin == 3)
            <th>Actions</th>
            @endif
          </tr>
        </thead>
        <tbody>
      
        @foreach($partenaire as $index => $partenaires)
        
            <tr>
                <td> <img src="/storage/partenaires/{{ basename($partenaires->image_path) }}" style="max-width: 100px; height: 100px; padding-top:10px"> </td>
              <td>{{ $partenaires->created_at}}</td>
            
          
            @if(auth()->check() && auth()->user()->is_admin == 3)
            <td>
                <a href="/partenaire/edit/{{$partenaires->id}}" class=" btn btn-success mod" style="margin: 5px;">MODIFIER</a>
                <a href="/partenaire/delete/{{$partenaires->id}}" class=" btn btn-danger sup">SUPPRIMER</a>
            </td>
           @endif
        </tr>
        @endforeach
    
      </div>
  
    </div>
  </section>
@endsection