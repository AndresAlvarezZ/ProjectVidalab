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


    <!-- MODAL IMPORTAR-->
        <div class="modal fade" id="importarRegistros" tabindex="-1" aria-labelledby="labelImportarRegistros" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title col-11 text-center col-11 text-center" id="labelImportarRegistros">Registro de Análisis de Excel</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form id="importarForm" action="/importar/registros/pruebas" method="post" enctype="multipart/form-data">
                        <div class="modal-body">
                            {{ csrf_field() }}

                            <div class="alert alert-warning text-left" role="alert">
                                <center><b>Pasos: </b><br>
                                    <b>1)</b> Descargue la plantilla de Excel<br>
                                    <b>2)</b> Agregue o copie los datos según los encabezados de cada columna de la Hoja de Excel.<br>
                                    <b>3)</b> Lo que no debe hacer: por favor, no use comas (,) o punto y coma (;) en los datos, no agregue más columnas u oculte columnas,
                                     no agregue más hojas a este libro de Excel, no deje campos vacíos y no duplique datos (principalmente códigos).<br>
                                    <b>4)</b> Antes de guardar el Excel: aplicar formato general a las columnas (esto para evitar decimales), asegurese que ningún campo esté vacío o duplicado y <b>eliminar la primera fila (de encabezados de cada columna).</b> De lo contrario el sistema no podrá guardar los datos.<br>
                                    <b>5)</b> Para guardar el archivo, seleccione <b>"Guardar como"</b>, asigne el mismo nombre o el de su preferencia al archivo, debajo del nombre 
                                    en el campo <b>"Tipo"</b> seleccione <b>"CSV UTF-8(delimitado por comas)"</b> y guárdelo. 
                                    <b>5)</b> Listo! Puede "Cargar el archivo" y finakmente verificar en la tabla de registros sus datos agregados.</center>
                            </div>

                            <label for="archivo">Cargar Archivo</label>
                            <input class="form-control" type="file" name="archivo" id="archivo" accept=".csv">

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger btn-lg" data-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-success btn-lg">Importar Archivo</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <!--FIN MODAL IMPORTAR-->


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
                            <input type="text" class="form-control" placeholder="Ingrese el código del análisis" name="codigoDelAnalisis3" id="codigoDelAnalisis3" onkeypress="return soloNumerosLetrasYEspacios(event);" class="form-control @error('codigoDelAnalisis3') is-invalid @enderror" required autocomplete="codigoDelAnalisis3" value="{{old('codigoDelAnalisis3')}}" autofocus/>
                            <br>

                            <label for="nombre3" class="col-12 text-center">Nombre</label>
                            <input type="text" class="form-control" placeholder="Ingrese el nombre del análisis" name="nombreDelAnalisis3" id="nombreDelAnalisis3" onkeypress="return soloNumerosLetrasYEspacios(event);" class="form-control @error('nombreDelAnalisis3') is-invalid @enderror" required autocomplete="nombreDelAnalisis3" value="{{old('nombreDelAnalisis3')}}" autofocus/>
                            <br>

                            <label for="categoria3" class="col-12 text-center">categoría de análisis</label>
                            <input type="text" class="form-control" placeholder="Ingrese la categoría del análisis" name="categoria3" id="categoria3" onkeypress="return soloNumeros(event);" class="form-control @error('categoria3') is-invalid @enderror" required autocomplete="categoria3" value="{{old('categoria3')}}" autofocus/>
                            <br>

                            <label for="descripcion3" class="col-12 text-center">Descripción</label>
                            <input type="text" class="form-control" placeholder="Ingrese una descripción del análisis" name="descripcionDelAnalisis3" id="descripcionDelAnalisis3" class="form-control @error('descripcionDelAnalisis3') is-invalid @enderror" required autocomplete="descripcionDelAnalisis3" value="{{old('descripcionDelAnalisis3')}}" autofocus/>
                            <br>

                            <h4>Datos: Precios</h4><br>
                            <label for="costo3" class="col-12 text-center">Costo Regular</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">₡</span>
                                </div>
                                <input type="text" class="form-control" placeholder="Ingrese el precio normal/regular del análisis en colones" name="costoDelAnalisis3" id="costoDelAnalisis3" onkeypress="return soloNumeros(event);" class="form-control @error('costoDelAnalisis3') is-invalid @enderror" required autocomplete="costoDelAnalisis3" value="{{old('costoDelAnalisis3')}}" autofocus/>
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
                                <input type="text" class="form-control" placeholder="Ingrese el descuento en colones aplicable al análisis" name="descuentoDelAnalisis3" id="descuentoDelAnalisis3" onkeypress="return soloNumeros(event);" class="form-control @error('descuentoDelAnalisis3') is-invalid @enderror" required autocomplete="descuentoDelAnalisis3" value="{{old('descuentoDelAnalisis3')}}" autofocus/>
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
