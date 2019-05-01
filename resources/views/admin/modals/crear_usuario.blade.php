<div class="modal fade" id="modalCrearUsuario" role="dialog" tabindex="-1" aria-labelledby="modalCrearUsuario" aria-hidden="true">

  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLongTitle">
          <i class="fa fa-user"></i>
          <span class="font-weight-bold">
            Crear Usuario
          </span>
        </h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form class="modal-body" method="POST" action="{{route("usuarios.store")}}" autocomplete="off" id="form_crear_usuario">
        @csrf
        <div class="form-row">
          <div class="form-group col-lg-6">
            <label for="name">Nombres</label>
            <input required type="text" name="name" id="name" class="form-control custom-form-control"
            placeholder="ej: Jean Gallego">
          </div>
          <div class="form-group col-lg-6">
            <label for="surname">Apellidos</label>
            <input required type="text" name="surname" id="surname" class="form-control custom-form-control"
            placeholder="ej: Gallego Mosquera">
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-lg-12">
            <label for="email">Correo Electrónico</label>
            <input required type="email" name="email" id="email" class="form-control custom-form-control"
            placeholder="ej: correo@example.com">
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-lg-6">
            <label for="email">Número de Telefono</label>
            <input required type="text" maxlength="10" name="phonenumber" id="phonenumber" class="form-control custom-form-control"
            placeholder="ej: xxx xxx xxxx">
          </div>
          <div class="form-group col-lg-6">
            <label for="email">Dirección</label>
            <input required type="text" name="direction" id="direction" class="form-control custom-form-control"
            placeholder="ej: KRA A11b">
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-12">
            <label for="rol">Tipo de Perfil</label>
            <select class="form-control text-uppercase" name="rol">
                @foreach ($roles as $rol)
                      <option value="{{ $rol->id }}">{{ $rol->name }}</option>
                @endforeach
            </select>
          </div>
        </div>
      </form>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary" form="form_crear_usuario">
          <i class="fa fa-save"></i>
          Guardar
      </button>
      </div>

    </div>
  </div>
</div>
