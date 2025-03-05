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
        <a href="/blog" class="btn btn-success mod" style="margin: 5px;">Ajouter un nouveau Blog</a></br>
        <a href="" class="btn btn-danger sup" style="margin: 5px;">SUPPRIMER</a>
        </div>
</section>

</body>


<section class="service_section layout_padding">
    <div class="container ">
      <div class="titre">
        <h2> Nos <span> Articles</span></h2>
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
      <div class="row">
    
        @foreach($blog as $index => $blogs)
        
        <tr>
            <td> <img src="/storage/blog/{{ basename($blogs->image_path) }}" style="max-width: 280px; height: 150px; padding-top:10px"></td>

              <td>{{ $blogs->titre }}</td>
              <td>{{ $blogs->description}}</td>
              <td>{{ $blogs->created_at}}</td>
            @if(auth()->check() && auth()->user()->is_admin == 3)
            <td> <a href="/blog/edit/{{$blogs->id}}" class=" btn btn-success mod" style="margin: 5px;">MODIFIER</a>
                <a href="/blog/delete/{{$blogs->id}}" class=" btn btn-danger sup">SUPPRIMER</a>
            </td>
           @endif
        </tr>
        @endforeach
    
    </tbody>
    </table>
    </div>
    </section>
@endsection