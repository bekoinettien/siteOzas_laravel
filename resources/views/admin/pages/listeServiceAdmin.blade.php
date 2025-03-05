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
    <a href="/service" class="btn btn-success mod" style="margin: 5px;">Ajouter un nouveau service</a></br>
    <a href="" class="btn btn-danger sup" style="margin: 5px;">SUPPRIMER</a>
    </div>
</section>

<section class="service_section layout_padding">
    <div class="container">
      <div class="titre">
        <h2> Nos domaines <span>Expertises</span></h2>
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
        @foreach($service as $index => $services)
          <tr>
            <td><img src="/storage/service/{{ basename($services->image_path) }}" style="max-width: 50px; height: 50px; padding-top:10px"></td>
            <td>{{ $services->titre }}</td>
            <td>{!! $services->description !!}</td>
            <td>{{ $services->created_at }}</td>
            @if(auth()->check() && auth()->user()->is_admin == 3)
            <td>
              <a href="/service-odoo/edit/{{$services->id}}" class="btn btn-success mod" style="margin-bottom: 5px;">MODIFIER</a></br>
              <a href="/service-odoo/delete/{{$services->id}}" class="btn btn-danger sup">SUPPRIMER</a>
            </td>
            @endif
          </tr>
        @endforeach
        </tbody>
      </table>
    </div>
</section>

</body>
@endsection
