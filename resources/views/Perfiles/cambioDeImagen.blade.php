<link href="{{ asset('css/estiloDePopUp.css') }}" rel="stylesheet">
  <!--TAMAÑOS
  modal-dialog modal-xl
  modal-dialog modal-lg
  modal-dialog modal-sm<link rel="stylesheet" type="text/css" href="css/modal.css">

  SCROLL
  modal-dialog modal-dialog-scrollable
  -->



  <!--MODALS-->
      <!-- MODAL AGREGAR-->
          <div class="modal fade" id="agregarImagen" tabindex="-1" aria-labelledby="labelAgregarCita" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered modal-ml">
                  <div class="modal-content">
                      <div class="modal-header">
                          <h5 class="modal-title col-10 text-center col-10 text-center" id="labelAgregarCita">Agregando Imagen de perfil</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                          </button>
                      </div>
                      <form accept-charset="UTF-8" enctype="multipart/form-data" action="/subirImagen" method="post">
                      {{ csrf_field() }}
                      @method('put')
                          <div class="modal-body">
                              <div class="form-row">
                                  <div class="alert alert-info" role="alert">
                                      <center><b>¡Su cambio será visible cuando presione el botón subir!</b></center>
                                  </div>
                                  <br></br>
                                    <input required type="file" accept="image/*" class="form-control"  name="imagenDelCliente"/> <br>
                                    @error('imagenDelCliente')
                                        <div class="alert alert-danger">{{$message}}</div>
                                    @enderror
                              </div>
                          </div>
                          <div class="modal-footer">
                              <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                              <button type="submit" class="btn btn-success">Subir</button>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      <!--FIN MODAL AGREGAR -->

        <!-- INICIO MODAL editarPerfil -->
        <div class="modal fade" id="editarPerfil" tabindex="-1" aria-labelledby="labelAgregarCita" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title col-11 text-center col-11 text-center" id="labelAgregarCita">Editando perfil</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <form action="/editarPerfil" method="post">
                        @csrf
                        @method ('PUT')
                        <div class="modal-body">
                        <div class="row">
                            <div class="col">
                                <label for="numeroDeHijos" class="col-12 text-center">Número de hijos</label>
                                <input required type="text" class="form-control" placeholder="Ingrese el total de hijos que tiene" name="numeroDehijosDelcliente" value="{{$cliente->numeroDehijosDelcliente}}"/> <br>
                                @error('numeroDehijosDelcliente')
                                    <div class="alert alert-danger">{{$message}}</div>
                                @enderror
                            </div>
                        </div>


                        <div class="row">
                            <div class="col">
                                <label for="telefonoDelCliente" class="col-12 text-center">Teléfono</label>
                                <input required type="text" class="form-control" placeholder="Ingrese un número telefónico para contactar" name="telefonoDelCliente" value="{{$cliente->telefonoDelCliente}}"/> <br>
                                @error('telefonoDelCliente')
                                    <div class="alert alert-danger">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="col">
                                <label for="domicilioDelCliente" class="col-12 text-center">Domicilio</label>
                                <textarea  name="domicilioDelCliente" class="form-control" placeholder="Ingrese su domicilio en el siguiente formato: Provincia, contón, distrito, dirección exacta" id="domicilioDelCliente" rows="6">{{$cliente->domicilioDelCliente}}</textarea>
                                @error('domicilioDelCliente')
                                  <div class="alert alert-danger">{{$message}}</div>
                                @enderror
                            </div>
                        </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-success">Guardar Cambios</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!--FIN MODAL editarPerfil -->
