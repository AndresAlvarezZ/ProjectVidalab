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
    <div class="modal fade" id="agregarPaquete" tabindex="-1" aria-labelledby="labelAgregarPaquete" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title col-11 text-center col-11 text-center" id="labelAgregarPaquete">Nuevo Registro</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form id="agregarForm">
                        <div class="modal-body">
                            {{ csrf_field() }}
                            <div class="form-row">

                                <label for="codigo1">Código</label>
                                <input type="text" class="form-control" placeholder="Escriba el código del paquete" name="codigoDelPaquete1" value="{{old('codigoDelPaquete1')}}" /> <br>
                                @error('codigoDelPaquete1')
                                    <div class="alert alert-danger">{{$message}}</div>
                                @enderror
                                </br></br>

                                <label for="nombre1">Nombre</label>
                                <input type="text" class="form-control" placeholder="Escriba el nombre del paquete" name="nombreDelPaquete1" value="{{old('nombreDelPaquete1')}}"/> <br>
                                @error('nombreDelPaquete1')
                                    <div class="alert alert-danger">{{$message}}</div>
                                @enderror
                                </br></br>

                                <label for="costo1">Costo</label>
                                <input type="text" class="form-control" placeholder="Escriba el costo del paquete" name="costoDelPaquete1" value="{{old('costoDelPaquete1')}}"/> <br>
                                @error('costoDelPaquete1')
                                    <div class="alert alert-danger">{{$message}}</div>
                                @enderror
                                </br></br>

                                <label for="descripción1">Descripción</label>
                                <textarea name="descripcionDelPaquete1" class="form-control" cols="30" rows="5" placeholder="Escriba la descripción del paquete">{{old('descripcionDelPaquete1')}}</textarea> <br>
                                @error('descripcionDelPaquete1')
                                    <div class="alert alert-danger">{{$message}}</div>
                                @enderror
                                </br></br>

                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-success">Registrar Empresa</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <!--FIN MODAL AGREGAR-->


    <!-- MODAL EDITAR-->
        <div class="modal fade" id="editarPaquete" tabindex="-1" aria-labelledby="labelEditarPaquete" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title col-11 text-center" id="labelEditarPaquete">Editar Registro</h5>
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
                                    
                                    <label for="codigo3">Código</label>
                                    <input type="text" class="form-control" placeholder="Escriba el código del paquete" name="codigoDelPaquete3" id="codigoDelPaquete3" /> <br>
                                    </br></br>

                                    <label for="nombre3">Nombre</label>
                                    <input type="text" class="form-control" placeholder="Escriba el nombre del paquete" name="nombreDelPaquete3" id="nombreDelPaquete3"/> <br>
                                    </br></br>

                                    <label for="costo3">Costo</label>
                                    <input type="text" class="form-control" placeholder="Escriba el costo del paquete" name="costoDelPaquete3" id="costoDelPaquete3"/> <br>
                                    </br></br>

                                    <label for="descripción3">Descripción</label>
                                    <input type="text" class="form-control" placeholder="Escriba la descripción del paquete" name="descripcionDelPaquete3" id="descripcionDelPaquete3"/>
                                    </br></br>

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
        <div class="modal fade" id="eliminarPaquete" tabindex="-1" aria-labelledby="labelEliminarPaquete" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title col-11 text-center" id="labelEliminarPaquete">Eliminar Registro</h5>
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
                                    <label for="codigo4"><b>Código</b></label>
                                    <input type="text" class="form-control" name="codigoDelPaquete4" readonly="codigoDelPaquete4" id="codigoDelPaquete4"/>
                                    <br> </br>
                                    <label for="nombre4"><b>Nombre</b></label>
                                    <input type="text" class="form-control" name="nombreDelPaquete4" readonly="nombreDelPaquete4" id="nombreDelPaquete4"/>
                                    <br> </br>
                                    <label for="costo4"><b>Costo</b></label>
                                    <input type="text" class="form-control" name="costoDelPaquete4" readonly="costoDelPaquete4" id="costoDelPaquete4"/>
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
