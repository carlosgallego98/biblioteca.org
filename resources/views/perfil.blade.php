@extends('layouts.app')
@section('title','Mi Perfil | '.auth()->user()->name)

@section('content')
@include('modals.cambiar_contraseña')
@include('modals.editar_perfil')
<div class="container">
    <div class="row my-2">
        <div class="col-lg-12 card card-body shadow-sm">
            <div class="row mb-4">
                <div class="col-lg-4 mx-auto">
                    <img src="{{ auth()->user()->getAvatar() }}" alt="" class="img-fluid rounded-circle shadow">
                </div>
            </div>
            <hr>
            <div class="row flex-column mx-3">
                <h4 class="m-0 h4-responsive font-weight-bold">
                    {{ auth()->user()->name }}
                    <small>{{ auth()->user()->surname }}</small>
                </h4>
                <div class="my-1">
                    <small class="text-muted">Correo Electrónico</small>
                    <p class="m-0">{{ auth()->user()->email }}</p>
                </div>
                <div class="my-1">
                    <small class="text-muted">Direccion</small>
                    <p class="m-0">{{ auth()->user()->direction }}</p>
                </div>
            </div>
            <div class="row mt-3 mx-auto">
                <div class="col-12">
                    <ul class="nav d-flex justify-content-center">
                        <a href="#" class="btn btn-danger nav-item m-1" data-toggle="modal" data-target="#modal-cambiar-contraseña"><i class="fa fa-key"></i>
                            Cambiar Contraseña
                        </a>
                        <a href="#" class="btn btn-danger nav-item m-1" data-toggle="modal" data-target="#modal-editar-perfil">
                          <i class="fa fa-pencil"></i>
                            Editar Perfil
                        </a>
                    </ul>
                </div>
            </div>
            <hr>
            <div class="row mt-3 text-center">
                <div class="col-12">
                    <p>Aqui solo aparecerán los prestamos y reservaciones de libros actualmente activos, usa ver todo para mas detalles.</p>

                </div>
                <div class="col-md-6">
                    <h4 class="card-title font-weight-bold">
                        Prestamos
                    </h4>
                    <table class="table ">
                        <thead>
                            <tr>
                                <th>Libro</th>
                                <th>Fecha de Prestamo</th>
                                <th>Fecha de Límite</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><a href="#">Lorem Ipsum</a></td>
                                <td>10/10/2010</td>
                                <td>11/10/2010</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-md-6">
                    <h4 class="card-title font-weight-bold">
                        Libros reservados
                    </h4>
                    <table class="table ">
                        <thead>
                            <tr>
                                <th>Libro</th>
                                <th>Fecha de Reserva</th>
                                <th>Fecha de Vencimiento</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><a href="#">Lorem Ipsum</a></td>
                                <td>10/10/2010</td>
                                <td>11/10/2010</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-12">
                    <a href="#prestamos-reservaciones" class="btn btn-info"><i class="fa fa-eye"></i>
                        Ver Todo</a>
                    </div>
                </div>
                <hr>
            </div>
        </div>
    </div>
    @endsection
