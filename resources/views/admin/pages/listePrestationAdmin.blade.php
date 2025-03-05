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
</head>
<body>
<section class="secttion-1">
    <div class="btn-container">
        <a href="/prestation" class="btn btn-success mod" style="margin: 5px;">Ajouter une nouvelle Prestation</a></br>
        <a href="" class="btn btn-danger sup" style="margin: 5px;">SUPPRIMER</a>
    </div>
</section>

<section class="service_section layout_padding">
    <div class="container ">
      <div class="titre">
        <h2> Nos <span> Prestations</span></h2>
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
    
        @foreach($prestation as $index => $prestations)
        <tr>
              <td> <img src="/storage/prestation/{{ basename($prestations->image_path) }}" style="max-width: 100px; height: 100px; padding-top:10px"></td>
              <td>{{ $prestations->titre }}</td>
              <td>{{ $prestations->description}}</td>
              <td>{{ $prestations->created_at}}</td>
            
            @if(auth()->check() && auth()->user()->is_admin == 3)
        <td>
           <a href="/prestation/edit/{{$prestations->id}}" class=" btn btn-success mod" style="margin: 5px;">MODIFIER</a>
           <a href="/prestation/delete/{{$prestations->id}}" class=" btn btn-danger sup">SUPPRIMER</a>
        </td>
           @endif
           
        </tr>
        @endforeach
    
    </tbody>
    </table>
    </div>
    </section>
@endsection