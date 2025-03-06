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
    <a href="/expert" class="btn btn-success mod" style="margin: 5px;">Ajouter une nouvelle expertise</a></br>
    <a href="" class="btn btn-danger sup" style="margin: 5px;">SUPPRIMER</a>
    </div>
</section>

<section>
    <div class="container">
      <div class="titre">
        <h2> NOS  <span>EXPERTISES</span></h2>
      </div>
      <table>
        <thead>
          <tr>
            <th>Desciption</th>
            <th>Date de création</th>
            @if(auth()->check() && auth()->user()->is_admin == 3)
            <th>Actions</th>
            @endif
          </tr>
        </thead>
        <tbody>
      
        @foreach($expertise as $index => $expertises)
        
            <tr>
                <td> {!! $expertises->description !!}</td>
              <td>{{ $expertises->created_at}}</td>
            
          
            @if(auth()->check() && auth()->user()->is_admin == 3)
            <td>
                <a href="/expertise/edit/{{$expertises->id}}" class=" btn btn-success mod" style="margin: 5px;">MODIFIER</a>
                <a href="/expertise/delete/{{$expertises->id}}" class=" btn btn-danger sup">SUPPRIMER</a>
            </td>
           @endif
        </tr>
        @endforeach
    
      </div>
  
    </div>
  </section>
@endsection