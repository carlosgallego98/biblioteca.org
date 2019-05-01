<div class="modal fade" id="modal-editar-perfil" tabindex="-1" role="dialog" aria-labelledby="modal-default" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title font-weight-bold" id="modal-editar-default">
                  <i class="fa fa-pencil"></i>
                  Editar Perfil</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="fa fa-times"></i></span>
                </button>
            </div>

            <div class="nav-wrapper mb-2">
  <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text" role="tablist">
      <li class="nav-item">
          <a class="btn btn-success mb-sm-3 mb-md-0 active" id="tabs-icons-text-1-tab" data-toggle="tab" href="#tab-image-perfil" role="tab" aria-controls="tabs-icons-text-1" aria-selected="true"><i class="ni ni-cloud-upload-96 mr-2"></i>Imagen de Perfil</a>
      </li>
      <li class="nav-item">
          <a class="btn btn-success mb-sm-3 mb-md-0 " id="tabs-icons-text-2-tab" data-toggle="tab" href="#tab-detalles-perfil" role="tab" aria-controls="tabs-icons-text-2" aria-selected="false"><i class="ni ni-bell-55 mr-2"></i>Detalles del Perfil</a>
      </li>
  </ul>
</div>

            <div class="modal-body">
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="tab-image-perfil" role="tabpanel" aria-labelledby="tabs-icons-text-1-tab">
              <div class="text-center">
                <img src="{{ Auth::user()->getAvatar() }}" alt="" id="img_avatar" class="rounded-circle shadow-lg" style="max-height: 258px;">
                <form enctype="multipart/form-data" action="{{url('cambiar-imagen-perfil')}}" method="post" id="form-cambiar-avatar">
                  @csrf
                  <div class="input-group my-3">
                  <input type="file" name="avatar" accept="image/*" id="input_avatar" style="display:none">
                </div>
                  <button type="sbumit" id="btn_guardar_imagen" class="btn btn-danger mx-auto d-none"><i class="fa fa-save" form="form-cambiar-avatar"></i> Guardar Imagen</button>
                </form>
                <button type="button" id="btn_seleccionar_imagen" class="btn btn-danger mx-auto"><i class="fa fa-image"></i> Cambiar Imagen</button>
              </div>
            </div>
            <div class="tab-pane fade" id="tab-detalles-perfil" role="tabpanel" aria-labelledby="tabs-icons-text-2-tab">
              <form action="#" method="POST" id="form-editar-perfil">
                      @csrf
                      <div class="form-row">
                        <div class="form-group col-md-6">
                            <div class="input-group input-group-alternative">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-user"></i></span>
                                </div>
                                <input class="form-control form-control-alternative" name="text" type="password" required autocomplete="current-password"
                                placeholder="Nombre">
                            </div>
                        </div>
                        <div class="form-group col-md-6">

                        </div>
                      </div>

                      <div class="mx-auto text-center">
                        <button type="submit" form="form-cambiar-contraseña" class="btn btn-danger">
                          <i class="fa fa-save"></i>
                          Guardar
                        </button>
                      </div>
                  </form>
            </div>
        </div>
    </div>
</div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-link  ml-auto" data-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div>

@push('styles')
  <style media="screen">
    #img_avatar{
      height: 256px;
    width: 256px;
    object-fit: cover;
    object-position: center;
    }
  </style>
@endpush

@push('scripts')
<script type="text/javascript">
$("#btn_seleccionar_imagen").click(function(){
  $("#input_avatar").click()
});
$("#input_avatar").change(function(){
  var reader = new FileReader();
  reader.onload = function (e) {
    $('#img_avatar')
    .attr('src', e.target.result);
  };
  reader.readAsDataURL(this.files[0]);
  $("#btn_seleccionar_imagen").fadeOut("hidden");
  $("#btn_guardar_imagen").fadeIn().removeClass("d-none");
})
</script>
@endpush
