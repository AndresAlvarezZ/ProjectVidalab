<link href="{{ asset('css/estiloDePopUp.css') }}?v=<?php echo(rand()); ?>" rel="stylesheet">

<!--TAMAÑOS
modal-dialog modal-xl
modal-dialog modal-lg
modal-dialog modal-sm
SCROLL
modal-dialog modal-dialog-scrollable
-->

    <!-- MODAL AGREGAR CITA-->
        <div class="modal fade" id="agregarCita" tabindex="-1" aria-labelledby="labelAgregarCita" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title col-11 text-center col-11 text-center" id="labelAgregarCita">Formulario de Registro de Cita</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form id="agregarCitaForm">
                        <div class="modal-body">
                            {{ csrf_field() }}
                            <input type="hidden" name="idCitaDeEmpresa" id="idCitaDeEmpresa"><br>

                            <div class="alert alert-info" role="alert">
                                <center><b>¡Por favor, antes de Registrar verifique que los datos sean los correctos y respetar los formatos solicitados por el sistema!</b></center>
                            </div> 

                            <h4>Datos del solicitante</h4><br>
                            <label for="nombre1" class="col-12 text-center">Nombre</label>
                            <input required type="text" class="form-control" placeholder="Ingrese el nombre del solicitante de la cita" name="nombreDelSolicitante1" value="{{old('nombreDelSolicitante1')}}" onkeypress="return soloLetras(event);" class="form-control @error('nombreDelSolicitante1') is-invalid @enderror" required autocomplete="nombreDelSolicitante1" autofocus/>
                            @error('nombreDelSolicitante1')
                                <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                            <br>

                            <label required for="primerApellido1" class="col-12 text-center">Primer apellido</label>
                            <input type="text" class="form-control" placeholder="Ingrese el primer apellido del solicitante" name="primerApellidoDelSolicitante1" value="{{old('primerApellidoDelSolicitante1')}}" onkeypress="return soloLetras(event);" class="form-control @error('primerApellidoDelSolicitante1') is-invalid @enderror" required autocomplete="primerApellidoDelSolicitante1" autofocus/>
                            @error('primerApellidoDelSolicitante1')
                                <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                            <br>

                            <label for="segundoApellido1" class="col-12 text-center">Segundo apellido</label>
                            <input required type="text" class="form-control" placeholder="Ingrese el segundo apellido del solicitante" name="segundoApellidoDelSolicitante1" value="{{old('segundoApellidoDelSolicitante1')}}" onkeypress="return soloLetras(event);" class="form-control @error('segundoApellidoDelSolicitante1') is-invalid @enderror" required autocomplete="segundoApellidoDelSolicitante1" autofocus/>
                            @error('segundoApellidoDelSolicitante1')
                                <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                            <br>

                            <h4>Datos de la Cita</h4><br>
                            <label for="clientes1" class="col-12 text-center">Total de clientes</label>
                            <input required type="text" class="form-control" placeholder="Ingrese el total de clientes que serán atendidos" name="numeroDeClientesPorAtender1" value="{{old('numeroDeClientesPorAtender1')}}" onkeypress="return soloNumeros(event);" class="form-control @error('numeroDeClientesPorAtender1') is-invalid @enderror" required autocomplete="numeroDeClientesPorAtender1" autofocus/>
                            @error('numeroDeClientesPorAtender1')
                                <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                            <br>

                            <label for="fecha1" class="col-12 text-center">Fecha de cita</label>
                            <input required type="date" class="form-control" placeholder="Seleccione la fecha de cita" name="fechaDeCita1" value="{{old('fechaDeCita1')}}" onkeypress="return soloNumeros(event);" class="form-control @error('fechaDeCita1') is-invalid @enderror" required autocomplete="fechaDeCita1" autofocus/>
                            @error('fechaDeCita1')
                                <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                            <br>

                            <label for="hora1" class="col-12 text-center">Hora de cita</label>
                            <input required type="TIME" class="form-control" placeholder="Seleccione la hora de cita" name="horaDeCita1" value="{{old('horaDeCita1')}}" onkeypress="return soloNumeros(event);" class="form-control @error('horaDeCita1') is-invalid @enderror" required autocomplete="horaDeCita1" autofocus/>
                            @error('horaDeCita1')
                                <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                            <br>

                            <label for="analisis1" class="col-12 text-center">Análisis requeridos</label>
                            <textarea required name="tiposDeAnalisisRequeridos1" class="form-control" cols="30" rows="5" placeholder="Ingrese los de análisis requeridos" class="form-control @error('tiposDeAnalisisRequeridos1') is-invalid @enderror" required autocomplete="tiposDeAnalisisRequeridos1" autofocus>{{old('tiposDeAnalisisRequeridos1')}}</textarea>
                            @error('tiposDeAnalisisRequeridos1')
                                <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                            <br>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger btn-lg" data-dismiss="modal">Cancelar Registro</button>
                            <button type="submit" class="btn btn-success btn-lg">Registrar Cita</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <!--FIN MODAL AGREGAR CITA-->




<!--MODALS-->
    <!-- MODAL AGREGAR-->
        <div class="modal fade" id="agregarEmpresa" tabindex="-1" aria-labelledby="labelAgregarEmpresa" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title col-11 text-center" id="labelAgregarEmpresa">Formulario de Registro de Empresa</h5>
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
                            <label for="exampleFormControlSelect1" class="col-12 text-center">Nombre</label>
                            <input type="text" class="form-control" placeholder="Ingrese el nombre completo de la empresa" name="nombreDeLaEmpresa1" value="{{old('nombreDeLaEmpresa1')}}" onkeypress="return soloNumerosLetrasYEspacios(event);" class="form-control @error('nombreDeLaEmpresa1') is-invalid @enderror" required autocomplete="nombreDeLaEmpresa1" autofocus/>
                            @error('nombreDeLaEmpresa1')
                                <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                            </br>

                            <label for="exampleFormControlSelect1" class="col-12 text-center">Número telefónico</label>
                            <input type="text" class="form-control" placeholder="Ingrese un número telefónico para contactar a la empresa" name="numeroDeTelefonoDeLaEmpresa1" value="{{old('numeroDeTelefonoDeLaEmpresa1')}}" onkeypress="return soloNumeros(event);" class="form-control @error('numeroDeTelefonoDeLaEmpresa1') is-invalid @enderror" required autocomplete="numeroDeTelefonoDeLaEmpresa1" autofocus/>
                            @error('numeroDeTelefonoDeLaEmpresa1')
                                <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                            <br>

                            <label for="exampleFormControlSelect1" class="col-12 text-center">Correo electrónico</label>
                            <input type="email" class="form-control" placeholder="Ingrese un correo electrónico para contactar a la empresa"  onkeyup="this.value = this.value.toLowerCase();" name="correoElectronicoDeLaEmpresa1" value="{{old('correoElectronicoDeLaEmpresa1')}}" class="form-control @error('correoElectronicoDeLaEmpresa1') is-invalid @enderror" required autocomplete="correoElectronicoDeLaEmpresa1" autofocus/>
                            @error('correoElectronicoDeLaEmpresa1')
                                <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                            <br>

                            <label for="exampleFormControlSelect1" class="col-12 text-center">Ubicación (dirección exacta)</label>
                            <textarea name="direccionDeLaEmpresa1" class="form-control" cols="30" rows="4" placeholder="Ingrese la dirección de la empresa con el formato: Provincia, cantón, distrito, dirección exacta" class="form-control @error('direccionDeLaEmpresa1') is-invalid @enderror" required autocomplete="direccionDeLaEmpresa1" autofocus>{{old('direccionDeLaEmpresa1')}}</textarea>
                            @error('direccionDeLaEmpresa1')
                                <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                            <br>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger btn-lg" data-dismiss="modal">Cancelar Registro</button>
                            <button type="submit" class="btn btn-success btn-lg">Registrar Empresa</button>
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
                    <form id="importarForm" action="/importar/registros/empresas" method="post" enctype="multipart/form-data">
                        <div class="modal-body">
                            {{ csrf_field() }}

                            <div class="alert alert-warning" role="alert">
                            <center><b>Pasos: </b><br>
                                    <b>1)</b> Descargue la plantilla de Excel<br>
                                    <b>2)</b> Agregue o copie los datos según los encabezados de cada columna de la Hoja de Excel.<br>
                                    <b>3)</b> Lo que no debe hacer: por favor, no use comas (,) o punto y coma (;) en los datos, no agregue más columnas u oculte columnas,
                                     no agregue más hojas a este libro de Excel, no deje campos vacíos y no duplique fila de datos.<br>
                                    <b>4)</b> Antes de guardar el Excel: aplicar formato general a las columnas, asegurese que ningún campo esté vacío o duplicado y <b>eliminar la primera fila (de encabezados de cada columna).</b> De lo contrario el sistema no podrá guardar los datos.<br>
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
        <div class="modal fade" id="editarEmpresa" tabindex="-1" aria-labelledby="labelEditarEmpresa" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered  modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title col-11 text-center" id="labelEditarEmpresa">Formulario para Actualizar Datos de Empresa</h5>
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

                            <label for="exampleFormControlSelect1" class="col-12 text-center">Nombre</label>
                            <input type="text" class="form-control" placeholder="Ingrese el nombre completo de la empresa" name="nombreDeLaEmpresa3" id="nombreDeLaEmpresa3" onkeypress="return soloNumerosLetrasYEspacios(event);" class="form-control @error('nombreDeLaEmpresa3') is-invalid @enderror" required autocomplete="nombreDeLaEmpresa3" value="{{old('nombreDeLaEmpresa3')}}" autofocus/>
                            <br>

                            <label for="exampleFormControlSelect1" class="col-12 text-center">Número telefónico</label>
                            <input type="text" class="form-control" placeholder="Ingrese un número telefónico para contactar" name="numeroDeTelefonoDeLaEmpresa3" id="numeroDeTelefonoDeLaEmpresa3" onkeypress="return soloNumeros(event);" class="form-control @error('numeroDeTelefonoDeLaEmpresa3') is-invalid @enderror" required autocomplete="numeroDeTelefonoDeLaEmpresa3" value="{{old('numeroDeTelefonoDeLaEmpresa3')}}" autofocus/>
                            <br>

                            <label for="exampleFormControlSelect1" class="col-12 text-center">Correo electrónico</label>
                            <input type="email" class="form-control" placeholder="Ingrese un correo electrónico para contactar" onkeyup="this.value = this.value.toLowerCase();" name="correoElectronicoDeLaEmpresa3" id="correoElectronicoDeLaEmpresa3" class="form-control @error('correoElectronicoDeLaEmpresa3') is-invalid @enderror" required autocomplete="correoElectronicoDeLaEmpresa3" value="{{old('correoElectronicoDeLaEmpresa3')}}" autofocus/>
                            <br>

                            <label for="exampleFormControlSelect1" class="col-12 text-center">Ubicación (dirección exacta)</label>
                            <input type="text" class="form-control" placeholder="Ingrese la dirección de la empresa con el formato: Provincia, cantón, distrito, dirección exacta" name="direccionDeLaEmpresa3" id="direccionDeLaEmpresa3" class="form-control @error('direccionDeLaEmpresa3') is-invalid @enderror" required autocomplete="direccionDeLaEmpresa3" value="{{old('direccionDeLaEmpresa3')}}" autofocus/>
                            <br>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger btn-lg" data-dismiss="modal">Cancelar Actualización</button>
                            <button type="submit" class="btn btn-success btn-lg">Actualizar Empresa</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <!--FIN MODAL EDITAR-->


    <!-- MODAL ELIMINAR-->
        <div class="modal fade" id="eliminarEmpresa" tabindex="-1" aria-labelledby="labelEliminarEmpresa" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered  modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title col-11 text-center" id="labelEliminarEmpresa">Eliminar Registro Completo de la Empresa</h5>
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
                                <center>¡Lea cuidadosamente la información! Si la empresa tiene citas registradas no le permitirá eliminarla del registro</center>
                            </div>

                            <label for="nombre" class="col-12 text-center">Código de la empresa</label>
                            <input type="text" class="form-control" name="idDeLaEmpresa4" readonly="idDeLaEmpresa4" id="idDeLaEmpresa4"/>
                            <br>
                            <label for="apellido" class="col-12 text-center">Nombre de la empresa</label>
                            <input type="text" class="form-control" name="nombreDeLaEmpresa4" readonly="nombreDeLaEmpresa4" id="nombreDeLaEmpresa4"/>
                            
                        </div>
                        <div class="modal-footer text-center">
                            <button type="submit" class="btn btn-secondary btn-lg">Confirmar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <!--FIN MODAL ELIMINAR-->
