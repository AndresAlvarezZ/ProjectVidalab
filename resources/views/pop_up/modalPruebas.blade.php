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

                            <div class="alert alert-info" role="alert">
                                <center><b>¡Por favor, antes de Registrar verifique que los datos sean los correctos y respetar los formatos solicitados por el sistema!</b></center>
                            </div>

                            <h4>Datos Generales</h4><br>
                            <label for="codigo1" class="col-12 text-center">Código/Identificador</label> <br>
                            <input required type="text" class="form-control" placeholder="Ingrese el código del análisis" name="codigoDelAnalisis1" value="{{old('codigoDelAnalisis1')}}" onkeypress="return soloNumerosLetrasYEspacios(event);" class="form-control @error('codigoDelAnalisis1') is-invalid @enderror" required autocomplete="codigoDelAnalisis1" autofocus/>
                            @error('codigoDelAnalisis1')
                                <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                            <br>

                            <label for="nombre1" class="col-12 text-center">Nombre</label>
                            <input required type="text" class="form-control" placeholder="Ingrese el nombre del análisis" name="nombreDelAnalisis1" value="{{old('nombreDelAnalisis1')}}" onkeypress="return soloNumerosLetrasYEspacios(event);" class="form-control @error('nombreDelAnalisis1') is-invalid @enderror" required autocomplete="nombreDelAnalisis1" autofocus/>
                            @error('nombreDelAnalisis1')
                                <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                            <br>
                            
                            <!--CATEGORÍA DE PRUEBA-->
                            <label for="categoria" class="col-12 text-center">Categoría de análisis</label>
                            <input required type="text" class="form-control" placeholder="Ingrese la categoría del análisis" name="categoria" value="{{old('categoria')}}" onkeypress="return soloNumeros(event);" class="form-control @error('categoria') is-invalid @enderror" required autocomplete="categoria" autofocus/>
                            @error('categoria')
                                <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                            <br>

                            <label for="descripcion1" class="col-12 text-center">Descripción</label>
                            <textarea required name="descripcionDelAnalisis1" class="form-control" cols="30" rows="5" placeholder="Ingrese una descripción del análisis" class="form-control @error('descripcionDelAnalisis1') is-invalid @enderror" required autocomplete="descripcionDelAnalisis1" autofocus>{{old('descripcionDelAnalisis1')}}</textarea>
                            @error('descripcionDelAnalisis1')
                                <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                            <br>

                            <h4>Datos: Precios</h4><br>
                            <label for="costo1" class="col-12 text-center">Costo Regular</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">₡</span>
                                </div>
                                <input required type="text" class="form-control" placeholder="Ingrese el precio normal/regular del análisis en colones" name="costoDelAnalisis1" value="{{old('costoDelAnalisis1')}}" onkeypress="return soloNumeros(event);" class="form-control @error('costoDelAnalisis1') is-invalid @enderror" required autocomplete="costoDelAnalisis1" autofocus/>
                                <div class="input-group-append">
                                    <span class="input-group-text">.00</span>
                                </div>
                            </div>
                            @error('costoDelAnalisis1')
                                <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                            <br>

                            <label for="costo1" class="col-12 text-center">Descuento</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">₡</span>
                                </div>
                                <input required type="text" class="form-control" placeholder="Ingrese el descuento en colones aplicable al análisis" name="descuentoDelAnalisis1" value="{{old('descuentoDelAnalisis1')}}" onkeypress="return soloNumeros(event);" class="form-control @error('descuentoDelAnalisis1') is-invalid @enderror" required autocomplete="descuentoDelAnalisis1" autofocus/>
                                <div class="input-group-append">
                                    <span class="input-group-text">.00</span>
                                </div>
                            </div>
                            @error('descuentoDelAnalisis1')
                                <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                            <br></br>
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
                            <input type="hidden" name="id" id="idEditar">

                            <div class="alert alert-warning" role="alert">
                                <center><b>¡Por favor, verifique que el regitro a actualizar sea el correcto!</b></center>
                            </div>

                            <h4>Datos Generales</h4><br>
                            <label for="codigo3" class="col-12 text-center">Código/Identificador</label>
                            <input type="text" class="form-control" placeholder="Ingrese el código del análisis" name="codigoDelAnalisis3" id="codigoDelAnalisis3" onkeypress="return soloNumerosLetrasYEspacios(event);" class="form-control @error('codigoDelAnalisis3') is-invalid @enderror" required autocomplete="codigoDelAnalisis3" autofocus/>
                            <br>

                            <label for="nombre3" class="col-12 text-center">Nombre</label>
                            <input type="text" class="form-control" placeholder="Ingrese el nombre del análisis" name="nombreDelAnalisis3" id="nombreDelAnalisis3" onkeypress="return soloNumerosLetrasYEspacios(event);" class="form-control @error('nombreDelAnalisis3') is-invalid @enderror" required autocomplete="nombreDelAnalisis3" autofocus/>
                            <br>

                            <label for="categoria3" class="col-12 text-center">categoría de análisis</label>
                            <input type="text" class="form-control" placeholder="Ingrese la categoría del análisis" name="categoria3" id="categoria3" onkeypress="return soloNumeros(event);" class="form-control @error('categoria3') is-invalid @enderror" required autocomplete="categoria3" autofocus/>
                            <br>

                            <label for="descripcion3" class="col-12 text-center">Descripción</label>
                            <input type="text" class="form-control" placeholder="Ingrese una descripción del análisis" name="descripcionDelAnalisis3" id="descripcionDelAnalisis3" class="form-control @error('descripcionDelAnalisis3') is-invalid @enderror" required autocomplete="descripcionDelAnalisis3" autofocus/>
                            <br>

                            <h4>Datos: Precios</h4><br>
                            <label for="costo3" class="col-12 text-center">Costo Regular</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">₡</span>
                                </div>
                                <input type="text" class="form-control" placeholder="Ingrese el precio normal/regular del análisis en colones" name="costoDelAnalisis3" id="costoDelAnalisis3" onkeypress="return soloNumeros(event);" class="form-control @error('costoDelAnalisis3') is-invalid @enderror" required autocomplete="costoDelAnalisis3" autofocus/>
                                <div class="input-group-append">
                                    <span class="input-group-text">.00</span>
                                </div>
                            </div>
                            <br>

                            <label for="descuento3" class="col-12 text-center">Descuento</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">₡</span>
                                </div>
                                <input type="text" class="form-control" placeholder="Ingrese el descuento en colones aplicable al análisis" name="descuentoDelAnalisis3" id="descuentoDelAnalisis3" onkeypress="return soloNumeros(event);" class="form-control @error('descuentoDelAnalisis3') is-invalid @enderror" required autocomplete="descuentoDelAnalisis3" autofocus/>
                                <div class="input-group-append">
                                    <span class="input-group-text">.00</span>
                                </div>
                            </div>
                            @error('descuentoDelAnalisis3')
                                <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                            <br>
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
                            <input type="hidden" name="id" id="idEliminar">

                            <div class="alert alert-danger" role="alert">
                                <center>¡Lea cuidadosamente la información!</center>
                            </div>

                            <label for="codigo4" class="col-12 text-center">Código del análisis</label>
                            <input type="text" class="form-control" name="codigoDelAnalisis4" readonly="codigoDelAnalisis4" id="codigoDelAnalisis4"/>
                            <br>
                            <label for="nombre4" class="col-12 text-center">Nombre del análisis</label>
                            <input type="text" class="form-control" name="nombreDelAnalisis4" readonly="nombreDelAnalisis4" id="nombreDelAnalisis4"/>
                            <br>
                            <label for="costo4" class="col-12 text-center">Costo Regular</label>
                            <input type="text" class="form-control" name="costoDelAnalisis4" readonly="costoDelAnalisis4" id="costoDelAnalisis4"/>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-secondary btn-lg">Confirmar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <!--FIN MODAL ELIMINAR-->
