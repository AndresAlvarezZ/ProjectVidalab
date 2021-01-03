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
                            <div class="alert alert-info" role="alert">
                                <center><b>¡Por favor, antes de Registrar verifique que los datos sean los correctos y respetar los formatos solicitados por el sistema!</b></center>
                            </div>

                            <h4>Datos Generales</h4><br>
                            <label for="codigo1" class="col-12 text-center">Código/Identificador</label>
                            <input requeired type="text" class="form-control" placeholder="Ingrese el código del paquete" name="codigoDelPaquete1" value="{{old('codigoDelPaquete1')}}" onkeypress="return soloNumerosLetrasYEspacios(event);" class="form-control @error('codigoDelPaquete1') is-invalid @enderror" required autocomplete="codigoDelPaquete1" autofocus/>
                            @error('codigoDelPaquete1')
                                <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                            <br>

                            <label for="nombre1" class="col-12 text-center">Nombre</label>
                            <input requeired type="text" class="form-control" placeholder="Ingrese el nombre del paquete" name="nombreDelPaquete1" value="{{old('nombreDelPaquete1')}}" onkeypress="return soloNumerosLetrasYEspacios(event);" class="form-control @error('nombreDelPaquete1') is-invalid @enderror" required autocomplete="nombreDelPaquete1" autofocus/>
                            @error('nombreDelPaquete1')
                                <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                            <br>

                            <label for="descripción1" class="col-12 text-center">Descripción</label>
                            <textarea requeired name="descripcionDelPaquete1" class="form-control" cols="30" rows="5" placeholder="Ingrese una descripción del paquete" class="form-control @error('descripcionDelPaquete1') is-invalid @enderror" required autocomplete="descripcionDelPaquete1" autofocus>{{old('descripcionDelPaquete1')}}</textarea>
                            @error('descripcionDelPaquete1')
                                <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                            <br>

                            <h4>Datos: Precios</h4><br>
                            <label for="costo1" class="col-12 text-center">Costo</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">₡</span>
                                </div>
                                <input requeired type="text" class="form-control" placeholder="Ingrese el precio normal/regular del paquete en colones" name="costoDelPaquete1" value="{{old('costoDelPaquete1')}}" onkeypress="return soloNumeros(event);" class="form-control @error('costoDelPaquete1') is-invalid @enderror" required autocomplete="costoDelPaquete1" autofocus/>
                                <div class="input-group-append">
                                    <span class="input-group-text">.00</span>
                                </div>
                            </div>
                            @error('costoDelPaquete1')
                                <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                            <br>

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
                    <form id="importarForm" action="/importar/registros/paquetes" method="post" enctype="multipart/form-data">
                        <div class="modal-body">
                            {{ csrf_field() }}

                            <div class="alert alert-warning" role="alert">
                                <center><b>Pasos: </b><br>
                                    <b>1)</b> Descargue la plantilla de Excel<br>
                                    <b>2)</b> Agregue o copie los datos según los encabezados de cada columna de la Hoja de Excel.<br>
                                    <b>3)</b> Lo que no debe hacer: por favor, no use comas (,) o punto y coma (;) en los datos, no agregue más columnas u oculte columnas,
                                     no agregue más hojas a este libro de Excel, no deje campos vacíos y no duplique fila de datos (principalmente códigos).<br>
                                    <b>4)</b> Antes de guardar el Excel: aplicar formato general a las columnas (esto para evitar decimales), asegurese que ningún campo esté vacío o duplicado y <b>eliminar la primera fila (de encabezados de cada columna).</b> De lo contrario el sistema no podrá guardar los datos.<br>
                                    <b>5)</b> Para guardar el archivo, seleccione <b>"Guardar como"</b>, asigne el mismo nombre o el de su preferencia al archivo, debajo del nombre 
                                    en el campo <b>"Tipo"</b> seleccione <b>"CSV UTF-8(delimitado por comas)"</b> y guárdelo. 
                                    <b>6)</b> Listo! Puede "Cargar el archivo" y finalmente verificar en la tabla de registros sus datos agregados.
                                </center>
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
                                <input type="hidden" name="id" id="idEditar">

                                <div class="alert alert-warning" role="alert">
                                    <center><b>¡Por favor, verifique que el regitro a actualizar sea el correcto!</b></center>
                                </div>

                                <label for="codigo3" class="col-12 text-center">Código/Identificador</label>
                                <input type="text" class="form-control" placeholder="Ingrese el código del paquete" name="codigoDelPaquete3" id="codigoDelPaquete3" onkeypress="return soloNumerosLetrasYEspacios(event);" class="form-control @error('codigoDelPaquete3') is-invalid @enderror" required autocomplete="codigoDelPaquete3" value="{{old('codigoDelPaquete3')}}" autofocus/>
                                <br>

                                <label for="nombre3" class="col-12 text-center">Nombre</label>
                                <input type="text" class="form-control" placeholder="Ingrese el nombre del paquete" name="nombreDelPaquete3" id="nombreDelPaquete3" onkeypress="return soloNumerosLetrasYEspacios(event);" class="form-control @error('nombreDelPaquete3') is-invalid @enderror" required autocomplete="nombreDelPaquete3" value="{{old('nombreDelPaquete3')}}" autofocus/>
                                <br>

                                <label for="descripción3" class="col-12 text-center">Descripción</label>
                                <input type="text" class="form-control" placeholder="Ingrese una descripción del paquete" name="descripcionDelPaquete3" id="descripcionDelPaquete3" class="form-control @error('codigoDelPaquete1') is-invalid @enderror" required autocomplete="codigoDelPaquete1" value="{{old('codigoDelPaquete1')}}" autofocus/>
                                <br>

                                <label for="costo3" class="col-12 text-center">Costo Regular</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">₡</span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Ingrese el costo regular/normal en colones del paquete" name="costoDelPaquete3" id="costoDelPaquete3" value="{{old('costoDelPaquete3')}}" onkeypress="return soloNumeros(event);" class="form-control @error('costoDelPaquete3') is-invalid @enderror" required autocomplete="costoDelPaquete3" value="{{old('costoDelPaquete3')}}" autofocus/>
                                    <div class="input-group-append">
                                        <span class="input-group-text">.00</span>
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
                                <input type="hidden" name="id" id="idEliminar">

                                <div class="alert alert-danger" role="alert">
                                    <center>¡Lea cuidadosamente la información!</center>
                                </div>

                                <label for="codigo4" class="col-12 text-center">Código del paquete</label>
                                <input type="text" class="form-control" name="codigoDelPaquete4" readonly="codigoDelPaquete4" id="codigoDelPaquete4"/>
                                <br>
                                <label for="nombre4" class="col-12 text-center">Nombre del paquete</label>
                                <input type="text" class="form-control" name="nombreDelPaquete4" readonly="nombreDelPaquete4" id="nombreDelPaquete4"/>
                                <br>
                                <label for="costo4" class="col-12 text-center">Costo del paquete</label>
                                <input type="text" class="form-control" name="costoDelPaquete4" readonly="costoDelPaquete4" id="costoDelPaquete4"/>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-secondary btn-lg">Confirmar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    <!--FIN MODAL ELIMINAR-->
