<link href="{{ asset('css/estiloDePopUp.css') }}" rel="stylesheet">

<!--TAMAÑOS
modal-dialog modal-xl
modal-dialog modal-lg
modal-dialog modal-sm
SCROLL
modal-dialog modal-dialog-scrollable
-->



<!--MODALS-->
    <!-- MODAL AGREGAR-->
        <div class="modal fade" id="agregarAdministrador" tabindex="-1" aria-labelledby="labelAgregarAdministrador" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title col-11 text-center col-11 text-center" id="labelAgregarAdministrador">Nuevo Registro</h5>
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

                                <input type="text" class="form-control" value="* Datos Generales" readonly>

                                <div class="form-group">
                                <label for="rol1">Rol</label>
                                </div>
                                <input type="text" class="form-control" name="rol" value="Administrador"readonly>
                                <br></br>

                                <label for="estado1">Estado</label>
                                <input type="text" class="form-control" name="estadoDelUsuarioAdministrador" readonly="estadoDelUsuarioAdministrador" value="Activo"/>
                                <br></br>

                                <label for="estado1">Motivo de estado</label>
                                <input type="text" class="form-control" name="motivoDeEstadoDelUsuarioAdministrador" readonly="motivoDeEstadoDelUsuarioAdministrador" value="Ejerciendo"/>
                                <br></br>

                                <input type="text" class="form-control" value="* Datos Personales" readonly>
                                <br></br>

                                <label for="nombre1">Nombre</label>
                                <input id="nombreDelUsuarioAdministrador" type="text" class="form-control @error('nombreDelUsuarioAdministrador') is-invalid @enderror" name="nombreDelUsuarioAdministrador" value="{{ old('nombreDelUsuarioAdministrador') }}" required autocomplete="nombreDelUsuarioAdministrador" autofocus>
                                <br></br>

                                <label for="primerapellido1">Primer Apellido</label>
                                <input id="primerApellidoAdministrador" type="text" class="form-control @error('primerApellidoAdministrador') is-invalid @enderror" name="primerApellidoAdministrador" value="{{ old('primerApellidoAdministrador') }}" required autocomplete="primerApellidoAdministrador" autofocus>
                                @error('primerApellidoAdministrador')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <br></br>

                                <label for="segundoapellido1">Segundo Apellido</label>
                                <input id="segundoApellidoAdministrador" type="text" class="form-control @error('segundoApellidoAdministrador') is-invalid @enderror" name="segundoApellidoAdministrador" value="{{ old('segundoApellidoAdministrador') }}" required autocomplete="segundoApellidoAdministrador" autofocus>
                                @error('segundoApellidoAdministrador')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <br></br>

                                <label for="cedula1">Número de identificación</label>
                                <input id="dniDelUsuarioAdministrador" type="number" class="form-control @error('dniDelUsuarioAdministrador') is-invalid @enderror" name="dniDelUsuarioAdministrador" value="{{ old('dniDelUsuarioAdministrador') }}" required autocomplete="dniDelUsuarioAdministrador" autofocus>
                                @error('dniDelUsuarioAdministrador')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <br></br>

                                <label for="telefono1">Número telefónico</label>
                                <input id="telefonoDelUsuarioAdministrador" type="number" class="form-control @error('telefonoDelUsuarioAdministrador') is-invalid @enderror" name="telefonoDelUsuarioAdministrador" value="{{ old('telefonoDelUsuarioAdministrador') }}" required autocomplete="telefonoDelUsuarioAdministrador" autofocus>
                                @error('telefonoDelUsuarioAdministrador')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <br></br>

                                <input type="text" class="form-control" value="* Datos de Acceso Personal al Sistema" readonly>
                                <br></br>

                                <label for="correo1">Correo electrónico</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <br></br>

                                <label for="contrasena1">Contraseña</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <br></br>

                                <label for="confirmarcontrasena1">Confirmar Contraseña</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">


                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-success">Registrar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <!--FIN MODAL AGREGAR-->


    <!-- MODAL EDITAR-->
        <div class="modal fade" id="editarAdministrador" tabindex="-1" aria-labelledby="labelEditarAdministrador" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title col-11 text-center" id="labelEditarAdministrador">Editar Registro</h5>
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

                                <label for="nombre3">Nombre</label>
                                <input type="text" class="form-control" name="nombreCompleto3" readonly="nombreCompleto3" id="nombreCompleto3" />
                                </br></br>

                                <label for="telefono3">Número telefónico</label>
                                <input type="text" class="form-control" placeholder="Escriba un número telefónico para contactar" name="telefonoDelUsuarioAdministrador3" id="telefonoDelUsuarioAdministrador3"/>
                                </br></br>

                                <label for="correo3">Correo electrónico</label>
                                <input type="email" class="form-control" placeholder="Escriba un correo electrónico para contactar" name="email3" id="email3"/>
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


    <!-- MODAL EDITAR ESTADO ACTIVO-->
    <div class="modal fade" id="editarEstado" tabindex="-1" aria-labelledby="labelEditarEstado" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title col-11 text-center" id="labelEditarEstado">Editar Registro</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form id="editarEstadoForm">
                        <div class="modal-body">
                            {{ csrf_field() }}
                            {{method_field('PUT')}}
                            <div class="form-row">
                                <input type="hidden" name="id" id="idEditarEstado">

                                <div class="alert alert-warning" role="alert">
                                    <center><b>¡Por favor, verifique que el Administrador al cual le "Denegará el acceso" sea el correcto!</b></center>
                                </div>

                                <label for="nombre4">Nombre</label>
                                <input type="text" class="form-control" name="nombreCompleto4" readonly="nombreCompleto4" id="nombreCompleto4"/> <br>
                                </br></br>

                                <label for="cedula4">Cédula</label>
                                <input type="text" class="form-control" name="numeroDeCedula4" readonly="numeroDeCedula4" id="numeroDeCedula4"/> <br>
                                </br></br>

                                <label for="estado4">Estado a asignar</label>
                                <input type="text" class="form-control" name="nuevoEstadoDelUsuarioAdministrador4" readonly="nuevoEstadoDelUsuarioAdministrador4" value="Inactivar"/> <br>
                                </br></br>

                                <label for="motivo4">Motivo del nuevo estado</label>
                                <input type="text" class="form-control" placeholder="Escriba el motivo de cambio de estado" name="motivoDeEstadoDelUsuarioAdministrador4"  />
                                @error('motivoDeEstadoDelUsuarioAdministrador4')
                                    <div class="alert alert-danger">{{$message}}</div>
                                @enderror
                                </br></br>

                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-success">Actualizar Estado</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <!--FIN MODAL EDITAR ESTADO ACTIVO-->




        <!-- MODAL EDITAR ESTADO INACTIVO-->
        <div class="modal fade" id="editarEstadoActivar" tabindex="-1" aria-labelledby="labelEditarEstadoActivar" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title col-11 text-center" id="labelEditarEstadoActivar">Editar Registro</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form id="editarEstadoActivarForm">
                        <div class="modal-body">
                            {{ csrf_field() }}
                            {{method_field('PUT')}}
                            <div class="form-row">
                                <input type="hidden" name="id" id="idEditarEstadoActivar">

                                <div class="alert alert-warning" role="alert">
                                    <center><b>¡Por favor, verifique que el Administrador al cual le "Concederá el acceso" sea el correcto!</b></center>
                                </div>

                                <label for="nombre4">Nombre</label>
                                <input type="text" class="form-control" name="nombreCompleto5" readonly="nombreCompleto5" id="nombreCompleto5"/> <br>
                                </br></br>

                                <label for="cedula4">Cédula</label>
                                <input type="text" class="form-control" name="numeroDeCedula5" readonly="numeroDeCedula5" id="numeroDeCedula5"/> <br>
                                </br></br>

                                <label for="estado4">Estado a asignar</label>
                                <input type="text" class="form-control" name="nuevoEstadoDelUsuarioAdministrador5" readonly="nuevoEstadoDelUsuarioAdministrador5" value="Activar"/> <br>
                                </br></br>

                                <label for="motivo4">Motivo del nuevo estado</label>
                                <input type="text" class="form-control" placeholder="Escriba el motivo de cambio de estado" name="motivoDeEstadoDelUsuarioAdministrador5"/>
                                </br></br>

                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-success">Actualizar Estado</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <!--FIN MODAL EDITAR ESTADO INACTIVO-->
