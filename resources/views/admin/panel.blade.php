@extends('layouts.admin')
@section("title","Escritorio Administrativo")
@section('content')
<div class="container-fluid">
  <div class="row">
    {{-- Info Box Usuarios Registrados --}}
    <div class="col-md-3 col-sm-6 col-12">
      <div class="info-box">
        <span class="info-box-icon bg-success"><i class="fa fa-users"></i></span>
        <div class="info-box-content">
          <span class="info-box-text">Usuarios</span>
          <span class="info-box-number">0</span>
        </div>
      </div>
    </div>
    {{-- Info Box Libros Registrados --}}
    <div class="col-md-3 col-sm-6 col-12">
      <div class="info-box">
        <span class="info-box-icon bg-info"><i class="fa fa-book"></i></span>
        <div class="info-box-content">
          <span class="info-box-text">Libros</span>
          <span class="info-box-number">0</span>
        </div>
      </div>
    </div>
    {{-- Info Box Prestamos --}}
    <div class="col-md-3 col-sm-6 col-12">
      <div class="info-box">
        <span class="info-box-icon bg-warning"><i class="fa fa-save"></i></span>
        <div class="info-box-content">
          <span class="info-box-text">Prestamos Realizados</span>
          <span class="info-box-number">0</span>
        </div>
      </div>
    </div>
    {{-- Info Box Reservas --}}
    <div class="col-md-3 col-sm-6 col-12">
      <div class="info-box">
        <span class="info-box-icon bg-danger"><i class="fa fa-clock-o"></i></span>
        <div class="info-box-content">
          <span class="info-box-text">Reservas Realizados</span>
          <span class="info-box-number">0</span>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="card">
  <div class="card-header">
    <h1 class="card-title">Bienvenido de vuelta <b>{{ auth()->user()->nombre_completo() }}</b></h1>
    <div class="card-tools">
      <button type="button" class="btn btn-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
        <i class="fa fa-minus"></i></button>
      </div>
    </div>
    <div class="card-body">
    </div>
    <div class="card-footer">
      Footer
    </div>
  </div>
  @endsection
