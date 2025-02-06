@extends('Layout/Header')
@section('content')
<div class="d-flex" id="wrapper">
    <!-- Sidebar -->
    <div class="bg-secondary text-white p-3" id="sidebar-wrapper" style="width: 250px;">
      <h3 class="text-center">Dashboard</h3>
      <hr>
      <ul class="nav flex-column">
        <li class="nav-item">
          <a href="#" class="nav-link text-white">Gestion des Visites</a>
          <a href="#" class="btn btn-primary">AJOUTER</a>
        </li>
        <hr>
        <li class="nav-item">
          <a href="#" class="nav-link text-white">Gestion des Hotels</a>
          <a href="#" class="btn btn-primary">AJOUTER</a>
        </li>
        <hr>
        <li class="nav-item">
          <a href="#" class="nav-link text-white">Gestion Immobilières</a>
        </li>
        <hr>
        <li class="nav-item">
            <a href="#" class="nav-link text-white">Gestion des Evènements</a>
        </li>
        <hr>
        <li class="nav-item">
            <a href="#" class="nav-link text-white">Gestion des Vehicules</a>
        </li>
        <hr>
        <li class="nav-item">
            <a href="#" class="nav-link text-white">Gestion des Spa & Santé</a>
        </li>
        <hr>
        <li class="nav-item">
            <a href="#" class="nav-link text-white">Gestion des Reserves des Vols</a>
        </li>
        <hr>
        <li class="nav-item">
            <a href="#" class="nav-link text-white">Gestion des Restaurants</a>
        </li>
        <hr>
        <li class="nav-item">
            <a href="#" class="nav-link text-white">Gestion du Shopping</a>
        </li>
      </ul>
    </div>
  
    <!-- Content -->
    <div id="page-content-wrapper" class="flex-grow-1 p-3">
      <div class="container-fluid">
        <h1>Welcome to the Dashboard</h1>
        <p>Here you can manage your data and monitor performance.</p>
  
        <!-- Cards Row -->
        <div class="row">
          <div class="col-md-4">
            <div class="card shadow">
              <div class="card-body">
                <h5 class="card-title">Card Title 1</h5>
                <p class="card-text">Some quick info about this feature.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card shadow">
              <div class="card-body">
                <h5 class="card-title">Card Title 2</h5>
                <p class="card-text">Some quick info about this feature.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card shadow">
              <div class="card-body">
                <h5 class="card-title">Card Title 3</h5>
                <p class="card-text">Some quick info about this feature.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      
    </div>
  </div>
  
@endsection