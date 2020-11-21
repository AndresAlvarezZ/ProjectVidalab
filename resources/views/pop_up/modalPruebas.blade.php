<link rel="stylesheet" type="text/css" href="css/estiloDePopUp.css">


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
                        <h5 class="modal-title col-11 text-center col-11 text-center" id="labelAgregarPrueba">Nuevo Registro</h5>
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

                                <label for="codigo1">Código</label>
                                <input type="text" class="form-control" placeholder="Escriba el código del análisis" name="codigoDelAnalisis1" value="{{old('codigoDelAnalisis1')}}" />
                                @error('codigoDelAnalisis1')
                                    <div class="alert alert-danger">{{$message}}</div>
                                @enderror
                                <br></br>

                                <label for="nombre1">Nombre</label>
                                <input type="text" class="form-control" placeholder="Escriba el nombre del análisis" name="nombreDelAnalisis1" value="{{old('nombreDelAnalisis1')}}"/>
                                @error('nombreDelAnalisis1')
                                    <div class="alert alert-danger">{{$message}}</div>
                                @enderror
                                <br></br>

                                <label for="maquina1">Número de máquina</label>
                                <input type="text" class="form-control" placeholder="Escriba el número de máquina" name="numeroDeMaquina1" value="{{old('numeroDeMaquina1')}}"/>
                                @error('numeroDeMaquina1')
                                    <div class="alert alert-danger">{{$message}}</div>
                                @enderror
                                <br></br>

                                <label for="descripcion1">Descripción</label>
                                <textarea name="descripcionDelAnalisis1" class="form-control" cols="30" rows="5" placeholder="Escriba la descripción del análisis">{{old('descripcionDelAnalisis1')}}</textarea>
                                @error('descripcionDelAnalisis1')
                                    <div class="alert alert-danger">{{$message}}</div>
                                @enderror
                                <br></br>

                                <label for="costo1">Costo</label>
                                <input type="text" class="form-control" placeholder="Escriba el costo del análisis" name="costoDelAnalisis1" value="{{old('costoDelAnalisis1')}}"/>
                                @error('costoDelAnalisis1')
                                    <div class="alert alert-danger">{{$message}}</div>
                                @enderror
                                <br></br>
                                <label for="costo1">Descuento</label>
                                <input type="text" class="form-control" placeholder="Escriba el descuento del paquete" name="descuentoDelAnalisis1" value="{{old('descuentoDelAnalisis1')}}"/> <br>
                                @error('descuentoDelAnalisis1')
                                    <div class="alert alert-danger">{{$message}}</div>
                                @enderror
                                </br></br>

                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-success">Registrar Prueba</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <!--FIN MODAL AGREGAR-->


    <!-- MODAL EDITAR-->
        <div class="modal fade" id="editarPrueba" tabindex="-1" aria-labelledby="labelEditarPrueba" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title col-11 text-center" id="labelEditarPrueba">Editar Registro</h5>
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

                                    <label for="codigo3">Código</label>
                                    <input type="text" class="form-control" placeholder="Escriba el código del análisis" name="codigoDelAnalisis3" id="codigoDelAnalisis3" />
                                    <br></br>

                                    <label for="nombre3">Nombre</label>
                                    <input type="text" class="form-control" placeholder="Escriba el nombre del análisis" name="nombreDelAnalisis3" id="nombreDelAnalisis3"/>
                                    <br></br>

                                    <label for="maquina3">Número de máquina</label>
                                    <input type="text" class="form-control" placeholder="Escriba el número de máquina" name="numeroDeMaquina3" id="numeroDeMaquina3"/>
                                    <br></br>

                                    <label for="descripcion3">Descripción</label>
                                    <input type="text" class="form-control" placeholder="Escriba la descripción del análisis" name="descripcionDelAnalisis3" id="descripcionDelAnalisis3"/>
                                    <br></br>
                                    <br></br>
                                    <label for="costo3">Descuento</label>
                                    <input type="text" class="form-control" placeholder="Escriba el descuento del análisis" name="descuentoDelAnalisis3" id="descuentoDelAnalisis3"/> <br>
                                    @error('descuentoDelAnalisis3')
                                        <div class="alert alert-danger">{{$message}}</div>
                                    @enderror
                                    </br></br>
                                    <label for="costo3">Costo</label>
                                    <input type="text" class="form-control" placeholder="Escriba el costo del análisis" name="costoDelAnalisis3" id="costoDelAnalisis3"/>
                                    <br></br>

                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                <button type="submit" class="btn btn-success">Actualizar registro</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    <!--FIN MODAL EDITAR-->


    <!-- MODAL ELIMINAR-->
        <div class="modal fade" id="eliminarPrueba" tabindex="-1" aria-labelledby="labelEliminarPrueba" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title col-11 text-center" id="labelEliminarPrueba">Eliminar Registro</h5>
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
                                        <center>¡Lea cuidadosamente la información! <b>¿Realmente desea eliminar este registro?</b></center>
                                    </div>

                                    <label for="codigo4"><b>Código</b></label>
                                    <input type="text" class="form-control" name="codigoDelAnalisis4" readonly="codigoDelAnalisis4" id="codigoDelAnalisis4"/>
                                    <br> </br>
                                    <label for="nombre4"><b>Nombre</b></label>
                                    <input type="text" class="form-control" name="nombreDelAnalisis4" readonly="nombreDelAnalisis4" id="nombreDelAnalisis4"/>
                                    <br> </br>
                                    <label for="costo4"><b>Costo</b></label>
                                    <input type="text" class="form-control" name="costoDelAnalisis4" readonly="costoDelAnalisis4" id="costoDelAnalisis4"/>
                                    <p>
                                        ¿Está seguro que desea eliminar este registro?
                                    </p>
                                </div>


                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                <button type="submit" class="btn btn-secondary">Eliminar registro</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    <!--FIN MODAL ELIMINAR-->
