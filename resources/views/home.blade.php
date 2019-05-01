@extends('layouts.app')

@section('content')
<section class="section pt-lg-0 mt--200">
        <div class="container text-center">
          <div class="row justify-content-center">
            <div class="col-lg-12">
              <div class="row row-grid">
                <div class="col-lg-4">
                  <div class="card card-lift--hover shadow border-0">
                    <div class="card-body py-5">
                      <div class="icon icon-shape icon-shape-primary rounded-circle mb-4">
                        <i class="fa fa-save"></i>
                      </div>
                      <h6 class="text-primary font-weight-bold text-uppercase">Reservar Libros</h6>
                      <p class="description mt-3">Aqui puedes reservar los libros que necesites, de esa manera te aseguras de siempre ser el primero.</p>
                      <a href="#" class="btn btn-primary mt-4">Más Detalles</a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="card card-lift--hover shadow border-0">
                    <div class="card-body py-5">
                      <div class="icon icon-shape icon-shape-success rounded-circle mb-4">
                        <i class="fa fa-home"></i>
                      </div>
                      <h6 class="text-success font-weight-bold text-uppercase">Prestamos de Libros</h6>
                      <p class="description mt-3">Confiamos en ti a la hora de prestarte los libros que necesites para tus deberes.</p>
                      <a href="#" class="btn btn-success mt-4">Reservar Libro</a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="card card-lift--hover shadow border-0">
                    <div class="card-body py-5">
                      <div class="icon icon-shape icon-shape-warning rounded-circle mb-4">
                        <i class="fa fa-database "></i>
                      </div>
                      <h6 class="text-warning font-weight-bold text-uppercase">Explorar Libros</h6>
                      <p class="description mt-3">Puedes explorar nuestra base de datos y buscar ese libro que necesitas al instante desde casa.</p>
                      <a href="#" class="btn btn-warning mt-4">Base de datos</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="section pb-0 section-books">
        <div class="container">
          <div class="row pb-5">
            <div class="col-md-6 d-flex flex-column justify-content-center">
              <div class="icon icon-lg icon-shape icon-shape-success shadow rounded-circle mb-5">
                <i class="fa fa-book"></i>
              </div>
              <h4 class="h4 text-success">
                Todo lo que necesites
              </h4>
              <p>Contamos con más de <span class="font-weight-bold">3000</span> libros disponibles en nuestra, con una amplia variedad de temas y materias, como ciencia, matemáticas, literatura y más. </p>
            </div>
            <div class="col-md-6 text-center">
              <img class="img-fluid" src="{{ asset("/assets/img/img_books.png") }}" alt=""
              style="height: 300px"
              >
            </div>
          </div>
        </div>
      </section>

      <section class="section secction-reservation">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <img class="img-fluid" src="https://previews.123rf.com/images/ilyakovshik/ilyakovshik1808/ilyakovshik180800001/112374189-online-booking-house-hand-with-smartphone-and-application-for-reservation-house-for-rent-vector-flat.jpg" alt=""
              style="height: 300px"
              >
            </div>
            <div class="col-md-6">
             <div class="icon icon-lg icon-shape icon-shape-info shadow rounded-circle mb-5">
              <i class="fa fa-save"></i>
            </div>
            <h4 class="h4 text-info">
              Reservaciones y prestamos.
            </h4>
            <p>Reserva el libro que necesites, ven a nuestas instalaciones y el libro estará listo para ti.  </p>
          </div>
        </div>
      </div>
    </section>

    @guest
    <section class="section bg-gradient-success section-register">
            <div class="row">
              <div class="col-md-10 mx-auto text-center text-white">
                <h1 class="font-weight-bold text-white">
                  ¿Que esperas?
                </h1>
                <p>Únete y usa para aumentar tu productividad con <span class="font-weight-bold">Biblioteca.org</span></p>
                <div>
                  <a href="{{ route("register") }}" class="btn bg-dark text-white">
                    Registrarse
                  </a>
                </div>
              </div>
            </div>
          </section>
    @endguest
@endsection
