<div class="modal fade" id="modal-cambiar-contraseña" tabindex="-1" role="dialog" aria-labelledby="modal-default" style="display: none;" aria-hidden="true">

    <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <h4 class="modal-title font-weight-bold" id="modal-title-default">Cambiar Contraseña</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>

            <div class="modal-body">
            <form action="{{ url('cambiar-contraseña') }}" method="POST" id="form-cambiar-contraseña">
                    @csrf
                    <div class="form-group">
                        <div class="input-group input-group-alternative">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-key"></i></span>
                            </div>
                            <input class="form-control form-control-alternative" name="password" type="password" required autocomplete="current-password"
                            placeholder="Contraseña Actual">
                        </div>
                        <hr>
                    </div>
                    <div class="form-group">
                        <div class="input-group input-group-alternative">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-key"></i></span>
                            </div>
                            <input class="form-control form-control-alternative" name="new" type="password" required autocomplete="current-password"
                            placeholder="Nueva Contraseña">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group input-group-alternative">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-key"></i></span>
                            </div>
                            <input class="form-control form-control-alternative" name="new_confirmation" type="password" required autocomplete="current-password"
                            placeholder="Confirmar Contraseña">
                        </div>
                    </div>

                </form>
            </div>

            <div class="modal-footer">
                <button type="submit" form="form-cambiar-contraseña" class="btn btn-success">
                  <i class="fa fa-save"></i>
                  Guardar
                </button>
                <button type="button" class="btn btn-link  ml-auto" data-dismiss="modal">Cancelar</button>
            </div>

        </div>
    </div>

</div>
