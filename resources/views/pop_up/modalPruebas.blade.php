<link href="{{ asset('css/estiloDePopUp.css') }}?v=<?php echo(rand()); ?>" rel="stylesheet">

<!--TAMAÑOS
modal-dialog modal-xl
modal-dialog modal-lg
modal-dialog modal-sm
SCROLL
modal-dialog modal-dialog-scrollable
-->



<!--MODALS-->
    <!-- MODAL AGREGAR-->
        <div class="modal fade" id="agregarPrueba" tabindex="-1" aria-labelledby="labelAgregarPrueba" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title col-11 text-center col-11 text-center" id="labelAgregarPrueba">Formulario de Registro de Análisis</h5>
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
                                <input required type="text" class="form-control" placeholder="Ingrese el código del análisis" name="codigoDelAnalisis1" value="{{old('codigoDelAnalisis1')}}" /></br>
                                @error('codigoDelAnalisis1')
                                    <div class="alert alert-danger">{{$message}}</div>
                                @enderror
                                <br></br>

                                <label for="nombre1" class="col-12 text-center">Nombre</label>
                                <input required type="text" class="form-control" placeholder="Ingrese el nombre del análisis" name="nombreDelAnalisis1" value="{{old('nombreDelAnalisis1')}}" /></br>
                                @error('nombreDelAnalisis1')
                                    <div class="alert alert-danger">{{$message}}</div>
                                @enderror
                                <br></br>

                                <label for="maquina1" class="col-12 text-center">Número de máquina</label>
                                <input required type="text" class="form-control" placeholder="Ingrese el número de máquina en la que se realiza el análisis" name="numeroDeMaquina1" value="{{old('numeroDeMaquina1')}}"/></br>
                                @error('numeroDeMaquina1')
                                    <div class="alert alert-danger">{{$message}}</div>
                                @enderror
                                <br></br>

                                <label for="descripcion1" class="col-12 text-center">Descripción</label>
                                <textarea required name="descripcionDelAnalisis1" class="form-control" cols="30" rows="5" placeholder="Ingrese una descripción del análisis">{{old('descripcionDelAnalisis1')}}</textarea></br>
                                @error('descripcionDelAnalisis1')
                                    <div class="alert alert-danger">{{$message}}</div>
                                @enderror
                                <br></br>

                                <h4>Datos: Precios</h4>
                                <label for="costo1" class="col-12 text-center">Costo Regular</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">₡</span>
                                    </div>
                                    <input required type="text" class="form-control" placeholder="Ingrese el precio normal/regular del análisis en colones" name="costoDelAnalisis1" value="{{old('costoDelAnalisis1')}}"/></br>
                                    <div class="input-group-append">
                                        <span class="input-group-text">.00</span>
                                    </div>
                                </div>
                                @error('costoDelAnalisis1')
                                    <div class="alert alert-danger">{{$message}}</div>
                                @enderror
                                <br></br>

                                <label for="costo1" class="col-12 text-center">Descuento</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">₡</span>
                                    </div>
                                    <input required type="text" class="form-control" placeholder="Ingrese el descuento en colones aplicable al análisis" name="descuentoDelAnalisis1" value="{{old('descuentoDelAnalisis1')}}"/></br>
                                    <div class="input-group-append">
                                        <span class="input-group-text">.00</span>
                                    </div>
                                </div>
                                @error('descuentoDelAnalisis1')
                                    <div class="alert alert-danger">{{$message}}</div>
                                @enderror
                                <br></br>

                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger btn-lg" data-dismiss="modal">Cancelar Registro</button>
                            <button type="submit" class="btn btn-success btn-lg">Registrar Análisis</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <!--FIN MODAL AGREGAR-->


    <!-- MODAL EDITAR-->
        <div class="modal fade" id="editarPrueba" tabindex="-1" aria-labelledby="labelEditarPrueba" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title col-11 text-center" id="labelEditarPrueba">Formulario para Actualizar Datos de Análisis</h5>
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

                                <h4>Datos Generales</h4>
                                <label for="codigo3" class="col-12 text-center">Código/Identificador</label>
                                <input type="text" class="form-control" placeholder="Ingrese el código del análisis" name="codigoDelAnalisis3" id="codigoDelAnalisis3" /></br>
                                <br></br>

                                <label for="nombre3" class="col-12 text-center">Nombre</label>
                                <input type="text" class="form-control" placeholder="Ingrese el nombre del análisis" name="nombreDelAnalisis3" id="nombreDelAnalisis3"/></br>
                                <br></br>

                                <label for="maquina3" class="col-12 text-center">Número de máquina</label>
                                <input type="text" class="form-control" placeholder="Ingrese el número de máquina en la que se realiza el análisis" name="numeroDeMaquina3" id="numeroDeMaquina3"/></br>
                                <br></br>

                                <label for="descripcion3" class="col-12 text-center">Descripción</label>
                                <input type="text" class="form-control" placeholder="Ingrese una descripción del análisis" name="descripcionDelAnalisis3" id="descripcionDelAnalisis3"/></br>
                                <br></br>

                                <h4>Datos: Precios</h4>
                                <label for="costo3" class="col-12 text-center">Costo Regular</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">₡</span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Ingrese el precio normal/regular del análisis en colones" name="costoDelAnalisis3" id="costoDelAnalisis3"/></br>
                                    <div class="input-group-append">
                                        <span class="input-group-text">.00</span>
                                    </div>
                                </div>
                                <br></br>

                                <label for="descuento3" class="col-12 text-center">Descuento</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">₡</span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Ingrese el descuento en colones aplicable al análisis" name="descuentoDelAnalisis3" id="descuentoDelAnalisis3"/></br>
                                    <div class="input-group-append">
                                        <span class="input-group-text">.00</span>
                                    </div>
                                </div>
                                @error('descuentoDelAnalisis3')
                                    <div class="alert alert-danger">{{$message}}</div>
                                @enderror
                                <br></br>

                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger btn-lg" data-dismiss="modal">Cancelar Actualización</button>
                            <button type="submit" class="btn btn-success btn-lg">Actualizar Análisis</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <!--FIN MODAL EDITAR-->


    <!-- MODAL ELIMINAR-->
        <div class="modal fade" id="eliminarPrueba" tabindex="-1" aria-labelledby="labelEliminarPrueba" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title col-11 text-center" id="labelEliminarPrueba">Eliminar Registro Completo de la Prueba</h5>
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

                                <label for="codigo4" class="col-12 text-center">Código del análisis</label>
                                <input type="text" class="form-control" name="codigoDelAnalisis4" readonly="codigoDelAnalisis4" id="codigoDelAnalisis4"/></br>
                                <br> </br>
                                <label for="nombre4" class="col-12 text-center">Nombre del análisis</label>
                                <input type="text" class="form-control" name="nombreDelAnalisis4" readonly="nombreDelAnalisis4" id="nombreDelAnalisis4"/></br>
                                <br> </br>
                                <label for="costo4" class="col-12 text-center">Costo Regular</label>
                                <input type="text" class="form-control" name="costoDelAnalisis4" readonly="costoDelAnalisis4" id="costoDelAnalisis4"/></br>
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
