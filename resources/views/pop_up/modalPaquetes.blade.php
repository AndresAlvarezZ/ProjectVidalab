<link href="{{ asset('css/estiloDePopUp.css') }}?v=<?php echo(rand()); ?>" rel="stylesheet">

<!--TAMAÑOS
modal-dialog modal-xl
modal-dialog modal-lg
modal-dialog modal-sm
SCROLL
modal-dialog modal-dialog-scrollable
-->



<!--MODALS-->

    <!-- MODAL AGREGAR IMAGEN-->
    <div class="modal fade" id="agregarImagen" tabindex="-1" aria-labelledby="labelImagen" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-ml">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title col-10 text-center col-10 text-center" id="labelImagen">Agregando Imagen de perfil</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form accept-charset="UTF-8" enctype="multipart/form-data" action="/subirImagenPaquete" method="post">
                @csrf
                @method ('PUT')
                    <div class="modal-body">
                        <div class="form-row">
                            <div class="alert alert-info" role="alert">
                                <center><b>¡Su cambio será visible cuando presione el botón subir!</b></center>
                            </div>
                            
                            <input type="hidden" name="id" id="idAgregarImagen">
                            
                            <br></br>
                            <input required type="file" accept="image/*" class="form-control"  name="imagenDelPaquete"/> <br>
                            @error('imagenDelPaquete')
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
    <!--FIN MODAL AGREGAR IMAGEN-->


    <!-- MODAL AGREGAR-->
        <div class="modal fade" id="agregarPaquete" tabindex="-1" aria-labelledby="labelAgregarPaquete" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title col-11 text-center col-11 text-center" id="labelAgregarPaquete">Formulario de Registro de Paquetes</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form id="agregarForm">
                        <div class="modal-body">
                            {{ csrf_field() }}
                            <div class="form-row">

                                <div class="alert alert-info" role="alert">
                                    <center><b>¡Por favor, antes de Registrar verifique que los datos sean los correctos y respetar los formatos solicitados por el sistema!</b></center>
                                </div>

                                <h4>Datos Generales</h4>
                                <label for="codigo1" class="col-12 text-center">Código/Identificador</label>
                                <input requeired type="text" class="form-control" placeholder="Ingrese el código del paquete" name="codigoDelPaquete1" value="{{old('codigoDelPaquete1')}}" /></br>
                                @error('codigoDelPaquete1')
                                    <div class="alert alert-danger">{{$message}}</div>
                                @enderror
                                <br></br>

                                <label for="nombre1" class="col-12 text-center">Nombre</label>
                                <input requeired type="text" class="form-control" placeholder="Ingrese el nombre del paquete" name="nombreDelPaquete1" value="{{old('nombreDelPaquete1')}}"/></br>
                                @error('nombreDelPaquete1')
                                    <div class="alert alert-danger">{{$message}}</div>
                                @enderror
                                <br></br>

                                <label for="descripción1" class="col-12 text-center">Descripción</label>
                                <textarea requeired name="descripcionDelPaquete1" class="form-control" cols="30" rows="5" placeholder="Ingrese una descripción del paquete">{{old('descripcionDelPaquete1')}}</textarea></br>
                                @error('descripcionDelPaquete1')
                                    <div class="alert alert-danger">{{$message}}</div>
                                @enderror
                                <br></br>

                                <h4>Datos: Precios</h4>
                                <label for="costo1" class="col-12 text-center">Costo</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">₡</span>
                                    </div>
                                    <input requeired type="text" class="form-control" placeholder="Ingrese el precio normal/regular del paquete en colones" name="costoDelPaquete1" value="{{old('costoDelPaquete1')}}"/></br>
                                    <div class="input-group-append">
                                        <span class="input-group-text">.00</span>
                                    </div>
                                </div>
                                @error('costoDelPaquete1')
                                    <div class="alert alert-danger">{{$message}}</div>
                                @enderror
                                <br></br>

                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger btn-lg" data-dismiss="modal">Cancelar Registro</button>
                            <button type="submit" class="btn btn-success btn-lg">Registrar Paquete</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <!--FIN MODAL AGREGAR-->


    <!-- MODAL EDITAR-->
        <div class="modal fade" id="editarPaquete" tabindex="-1" aria-labelledby="labelEditarPaquete" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title col-11 text-center" id="labelEditarPaquete">Formulario para Actualizar Datos de Paquete</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form id="editarForm">
                            <div class="modal-body">
                                {{ csrf_field() }}
                                {{method_field('PUT')}}
                                <div class="form-row">
                                    <input type="hidden" name="id" id="idEditar">

                                    <div class="alert alert-warning" role="alert">
                                        <center><b>¡Por favor, verifique que el regitro a actualizar sea el correcto!</b></center>
                                    </div>

                                    <label for="codigo3" class="col-12 text-center">Código/Identificador</label>
                                    <input type="text" class="form-control" placeholder="Ingrese el código del paquete" name="codigoDelPaquete3" id="codigoDelPaquete3" /></br>
                                    </br></br>

                                    <label for="nombre3" class="col-12 text-center">Nombre</label>
                                    <input type="text" class="form-control" placeholder="Ingrese el nombre del paquete" name="nombreDelPaquete3" id="nombreDelPaquete3"/></br>
                                    </br></br>

                                    <label for="imagen3" class="col-12 text-center">Imagen</label>
                                    <input type="file" accept="image/*" class="form-control"  name="imagenDelPaquete3"/> <br>
                                    @error('imagenDelPaquete3')
                                        <div class="alert alert-danger">{{$message}}</div>
                                    @enderror


                                    <label for="descripción3" class="col-12 text-center">Descripción</label>
                                    <input type="text" class="form-control" placeholder="Ingrese una descripción del paquete" name="descripcionDelPaquete3" id="descripcionDelPaquete3"/></br>
                                    </br></br>

                                    <label for="costo3" class="col-12 text-center">Costo Regular</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">₡</span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Ingrese el costo regular/normal en colones del paquete" name="costoDelPaquete3" id="costoDelPaquete3"/></br>
                                        <div class="input-group-append">
                                            <span class="input-group-text">.00</span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger btn-lg" data-dismiss="modal">Cancelar Actualización</button>
                                <button type="submit" class="btn btn-success btn-lg">Actualizar Paquete</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    <!--FIN MODAL EDITAR-->


    <!-- MODAL ELIMINAR-->
        <div class="modal fade" id="eliminarPaquete" tabindex="-1" aria-labelledby="labelEliminarPaquete" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title col-11 text-center" id="labelEliminarPaquete">Eliminar Registro Completo del Paquete</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form id="eliminarForm">
                            <div class="modal-body">
                                {{ csrf_field() }}
                                {{method_field('DELETE')}}
                                <div class="form-row">
                                    <input type="hidden" name="id" id="idEliminar">

                                    <div class="alert alert-danger" role="alert">
                                        <center>¡Lea cuidadosamente la información!</center>
                                    </div>
                                    
                                    <label for="codigo4" class="col-12 text-center">Código del paquete</label>
                                    <input type="text" class="form-control" name="codigoDelPaquete4" readonly="codigoDelPaquete4" id="codigoDelPaquete4"/>
                                    <br> </br>
                                    <label for="nombre4" class="col-12 text-center">Nombre del paquete</label>
                                    <input type="text" class="form-control" name="nombreDelPaquete4" readonly="nombreDelPaquete4" id="nombreDelPaquete4"/>
                                    <br> </br>
                                    <label for="costo4" class="col-12 text-center">Costo del paquete</label>
                                    <input type="text" class="form-control" name="costoDelPaquete4" readonly="costoDelPaquete4" id="costoDelPaquete4"/>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-secondary btn-lg">Confirmar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    <!--FIN MODAL ELIMINAR-->
