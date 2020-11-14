<link rel="stylesheet" type="text/css" href="css/estiloDePopUp.css">


<!--TAMAÑOS
modal-dialog modal-xl
modal-dialog modal-lg
modal-dialog modal-sm
SCROLL
modal-dialog modal-dialog-scrollable
-->



<!--MODALS-->
    <!-- MODAL AGREGAR EMPRESA-->
        <div class="modal fade" id="agregarEmpresa" tabindex="-1" aria-labelledby="labelAgregarEmpresa" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title col-11 text-center col-11 text-center" id="labelAgregarEmpresa">Nuevo Registro</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form id="agregarForm">
                        <div class="modal-body">
                            {{ csrf_field() }}
                            <div class="form-row">

                                <label for="exampleFormControlSelect1">Nombre</label>
                                <input type="text" class="form-control" placeholder="Escriba el nombre de la empresa" name="nombreDeLaEmpresa1" value="{{old('nombreDeLaEmpresa1')}}" /> <br>
                                @error('nombreDeLaEmpresa1')
                                    <div class="alert alert-danger">{{$message}}</div>
                                @enderror
                                </br></br>

                                <label for="exampleFormControlSelect1">Número telefónico</label>
                                <input type="text" class="form-control" placeholder="Escriba un número telefónico para contactar" name="numeroDeTelefonoDeLaEmpresa1" value="{{old('numeroDeTelefonoDeLaEmpresa1')}}"/> <br>
                                @error('numeroDeTelefonoDeLaEmpresa1')
                                    <div class="alert alert-danger">{{$message}}</div>
                                @enderror
                                </br></br>

                                <label for="exampleFormControlSelect1">Correo electrónico</label>
                                <input type="email" class="form-control" placeholder="Escriba un correo electrónico para contactar" name="correoElectronicoDeLaEmpresa1" value="{{old('correoElectronicoDeLaEmpresa1')}}"/> <br>
                                @error('correoElectronicoDeLaEmpresa1')
                                    <div class="alert alert-danger">{{$message}}</div>
                                @enderror
                                </br></br>

                                <label for="exampleFormControlSelect1">Ubicación (dirección exacta)</label>
                                <textarea name="direccionDeLaEmpresa1" class="form-control" cols="30" rows="5" placeholder="Escriba la dirección exacta de la empresa">{{old('direccionDeLaEmpresa1')}}</textarea> <br>
                                @error('direccionDeLaEmpresa1')
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
    <!--FIN MODAL AGREGAR EMPRESA-->


    <!-- MODAL EDITAR-->
        <div class="modal fade" id="editarEmpresa" tabindex="-1" aria-labelledby="labelEditarEmpresa" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title col-11 text-center" id="labelEditarEmpresa">Editar Registro</h5>
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
                                
                                <label for="exampleFormControlSelect1">Nombre</label>
                                <input type="text" class="form-control" placeholder="Escriba el nombre de la empresa" name="nombreDeLaEmpresa3" id="nombreDeLaEmpresa3" />
                                </br></br>

                                <label for="exampleFormControlSelect1">Número telefónico</label>
                                <input type="text" class="form-control" placeholder="Escriba un número telefónico para contactar" name="numeroDeTelefonoDeLaEmpresa3" id="numeroDeTelefonoDeLaEmpresa3"/>
                                </br></br>

                                <label for="exampleFormControlSelect1">Correo electrónico</label>
                                <input type="email" class="form-control" placeholder="Escriba un correo electrónico para contactar" name="correoElectronicoDeLaEmpresa3" id="correoElectronicoDeLaEmpresa3"/>
                                </br></br>

                                <label for="exampleFormControlSelect1">Ubicación (dirección exacta)</label>
                                <input type="text" class="form-control" placeholder="Escriba la dirección exacta de la empresa" name="direccionDeLaEmpresa3" id="direccionDeLaEmpresa3"/>
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
        <div class="modal fade" id="eliminarEmpresa" tabindex="-1" aria-labelledby="labelEliminarEmpresa" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title col-11 text-center" id="labelEliminarEmpresa">Eliminar Registro</h5>
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
                                <label for="nombre"><b>Código</b></label>
                                <input type="text" class="form-control" name="idDeLaEmpresa4" readonly="idDeLaEmpresa4" id="idDeLaEmpresa4"/>
                                <br> </br>
                                <label for="apellido"><b>Nombre</b></label>
                                <input type="text" class="form-control" name="nombreDeLaEmpresa4" readonly="nombreDeLaEmpresa4" id="nombreDeLaEmpresa4"/>
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
