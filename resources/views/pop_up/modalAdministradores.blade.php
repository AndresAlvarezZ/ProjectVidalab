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
        <div class="modal fade" id="agregarAdministrador" tabindex="-1" aria-labelledby="labelAgregarAdministrador" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title col-11 text-center col-11 text-center" id="labelAgregarAdministrador">Formulario de Registro de Administrador(a)</h5>
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
                                <div class="row">
                                    <div class="col">
                                        <label for="rol1" class="col-12 text-center">Rol</label>
                                        <input type="text" class="form-control" name="rol" value="Administrador"readonly>
                                    </div>
                                    <div class="col">
                                        <label for="estado1" class="col-12 text-center">Estado</label>
                                        <input type="text" class="form-control" name="estadoDelUsuarioAdministrador" readonly="estadoDelUsuarioAdministrador" value="Activo"/>
                                    </div>
                                    <div class="col">
                                        <label for="estado1" class="col-12 text-center">Motivo de estado</label>
                                        <input type="text" class="form-control" name="motivoDeEstadoDelUsuarioAdministrador" readonly="motivoDeEstadoDelUsuarioAdministrador" value="Ejerciendo"/></br>
                                    </div>
                                    <br></br>
                                </div>
                            
                                <h4>Datos Personales</h4>
                                <label for="nombre1" class="col-12 text-center">Nombre</label>
                                <input required id="nombreDelUsuarioAdministrador" type="text" placeholder="Ingrese el primer nombre del administrador(a)" class="form-control @error('nombreDelUsuarioAdministrador') is-invalid @enderror" name="nombreDelUsuarioAdministrador" value="{{ old('nombreDelUsuarioAdministrador') }}" required autocomplete="nombreDelUsuarioAdministrador" autofocus></br>
                                <br></br>

                                <label for="primerapellido1" class="col-12 text-center">Primer Apellido</label>
                                <input required id="primerApellidoAdministrador" type="text" placeholder="Ingrese el primer apellido del administrador(a)" class="form-control @error('primerApellidoAdministrador') is-invalid @enderror" name="primerApellidoAdministrador" value="{{ old('primerApellidoAdministrador') }}" required autocomplete="primerApellidoAdministrador" autofocus></br>
                                @error('primerApellidoAdministrador')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <br></br>

                                <label for="segundoapellido1" class="col-12 text-center">Segundo Apellido</label>
                                <input required id="segundoApellidoAdministrador" type="text" placeholder="Ingrese el segundo apellido del administrador(a)" class="form-control @error('segundoApellidoAdministrador') is-invalid @enderror" name="segundoApellidoAdministrador" value="{{ old('segundoApellidoAdministrador') }}" required autocomplete="segundoApellidoAdministrador" autofocus></br>
                                <br></br>

                                <label for="cedula1" class="col-12 text-center">Identificación/Cédula</label>
                                <input required id="dniDelUsuarioAdministrador"   placeholder="Ingrese el número de cédula/identificación del administrador(a). Formato: 123456789" class="form-control @error('dniDelUsuarioAdministrador') is-invalid @enderror" name="dniDelUsuarioAdministrador" value="{{ old('dniDelUsuarioAdministrador') }}" required autocomplete="dniDelUsuarioAdministrador" autofocus></br>
                                @error('dniDelUsuarioAdministrador')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <br></br>

                                <label for="telefono1" class="col-12 text-center">Número telefónico</label>
                                <input required id="telefonoDelUsuarioAdministrador" type="number" placeholder="Ingrese un número telefónico para contactar al administrador(a). Formato: 12345678" class="form-control @error('telefonoDelUsuarioAdministrador') is-invalid @enderror" name="telefonoDelUsuarioAdministrador" value="{{ old('telefonoDelUsuarioAdministrador') }}" required autocomplete="telefonoDelUsuarioAdministrador" autofocus></br>
                                @error('telefonoDelUsuarioAdministrador')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <br></br>

                                <h4>Datos Acceso</h4>
                                <label for="correo1" class="col-12 text-center">Correo electrónico</label>
                                <input required id="email" type="email"  placeholder="Ingrese un correo electrónico para contactar al administrador(a)" class="form-control @error('email') is-invalid @enderror" name="email" onkeyup="this.value = this.value.toLowerCase();" value="{{ old('email') }}" required autocomplete="email" autofocus></br>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <br></br>

                                <label for="contrasena1" class="col-12 text-center">Contraseña</label>
                                <input required id="password" type="password" placeholder="Ingrese una contraseña para que el administrador(a) acceda al sistema" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password"></br>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <br></br>

                                <label for="confirmarcontrasena1" class="col-12 text-center">Confirmar Contraseña</label>
                                <input required id="password-confirm" type="password" placeholder="Reescriba la contraseña para confirmar que sea correcta" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                <br></br>

                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger btn-lg" data-dismiss="modal">Cancelar Registro</button>
                            <button type="submit" class="btn btn-success btn-lg">Registrar Administrador</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <!--FIN MODAL AGREGAR-->


    <!-- MODAL EDITAR-->
        <div class="modal fade" id="editarAdministrador" tabindex="-1" aria-labelledby="labelEditarAdministrador" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title col-11 text-center" id="labelEditarAdministrador">Formulario para Actualizar Datos de Administrador(a)</h5>
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

                                <div class="alert alert-warning alert-lg" role="alert">
                                    <center><b>¡Por favor, verifique que el regitro a actualizar sea el correcto!</b></center>
                                </div>

                                <label for="nombre3" class="col-12 text-center">Nombre del administrador(a)</label>
                                <input type="text" class="form-control" name="nombreCompleto3" readonly="nombreCompleto3" id="nombreCompleto3" /></br>
                                </br></br>

                                <label for="telefono3" class="col-12 text-center">Número telefónico</label>
                                <input type="text" class="form-control" placeholder="Ingrese un número telefónico para contactar al administrador(a). Formato: 12345678" name="telefonoDelUsuarioAdministrador3" id="telefonoDelUsuarioAdministrador3"/></br>
                                </br></br>

                                <label for="correo3" class="col-12 text-center">Correo electrónico</label>
                                <input type="email" class="form-control" onkeyup="this.value = this.value.toLowerCase();" placeholder="Ingrese un correo electrónico para contactar al administrador(a)" name="email3" id="email3"/></br>
                                </br></br>

                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger btn-lg" data-dismiss="modal">Cancelar Actualización</button>
                            <button type="submit" class="btn btn-success btn-lg">Actualizar Administrador</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <!--FIN MODAL EDITAR-->


    <!-- MODAL EDITAR ESTADO ACTIVO-->
        <div class="modal fade" id="editarEstado" tabindex="-1" aria-labelledby="labelEditarEstado" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title col-11 text-center" id="labelEditarEstado">Formulario para Actualizar Acceso del Administrador(a)</h5>
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

                                <label for="nombre4" class="col-12 text-center">Nombre del administrador(a)</label>
                                <input type="text" class="form-control" name="nombreCompleto4" readonly="nombreCompleto4" id="nombreCompleto4"/> <br>
                                </br></br>

                                <label for="cedula4" class="col-12 text-center">Identificación/Cédula</label>
                                <input type="text" class="form-control" name="numeroDeCedula4" readonly="numeroDeCedula4" id="numeroDeCedula4"/> <br>
                                </br></br>

                                <label for="estado4" class="col-12 text-center">Estado a asignar</label>
                                <input type="text" class="form-control" name="nuevoEstadoDelUsuarioAdministrador4" readonly="nuevoEstadoDelUsuarioAdministrador4" value="Inactivar"/> <br>
                                </br></br>

                                <label for="motivo4" class="col-12 text-center">Motivo del nuevo estado</label>
                                <input required type="text" class="form-control" placeholder="Ingrese el motivo por el cual denegará el acceso al sistema a este administrador(a)" name="motivoDeEstadoDelUsuarioAdministrador4"  /></br>
                                @error('motivoDeEstadoDelUsuarioAdministrador4')
                                    <div class="alert alert-danger">{{$message}}</div>
                                @enderror
                                </br></br>

                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger btn-lg" data-dismiss="modal">Cancelar Actualización</button>
                            <button type="submit" class="btn btn-success btn-lg">Actualizar Acceso</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <!--FIN MODAL EDITAR ESTADO ACTIVO-->




    <!-- MODAL EDITAR ESTADO INACTIVO-->
        <div class="modal fade" id="editarEstadoActivar" tabindex="-1" aria-labelledby="labelEditarEstadoActivar" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title col-11 text-center" id="labelEditarEstadoActivar">Formulario para Actualizar Acceso del Administrador(a)</h5>
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

                                <label for="nombre4" class="col-12 text-center" class="col-12 text-center">Nombre del administrador(a)</label>
                                <input type="text" class="form-control" name="nombreCompleto5" readonly="nombreCompleto5" id="nombreCompleto5"/> </br>
                                </br></br>

                                <label for="cedula4" class="col-12 text-center" class="col-12 text-center">Identificación/Cédula</label>
                                <input type="text" class="form-control" name="numeroDeCedula5" readonly="numeroDeCedula5" id="numeroDeCedula5"/> </br>
                                </br></br>

                                <label for="estado4" class="col-12 text-center">Estado a asignar</label>
                                <input type="text" class="form-control" name="nuevoEstadoDelUsuarioAdministrador5" readonly="nuevoEstadoDelUsuarioAdministrador5" value="Activar"/> </br>
                                </br></br>

                                <label for="motivo4" class="col-12 text-center">Motivo del nuevo estado</label>
                                <input required type="text" class="form-control" placeholder="Ingrese el motivo por el cual concederá el acceso al sistema a este administrador(a)" name="motivoDeEstadoDelUsuarioAdministrador5"/></br>
                                </br></br>

                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger btn-lg" data-dismiss="modal">Cancelar Actualización</button>
                            <button type="submit" class="btn btn-success btn-lg">Actualizar Acceso</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <!--FIN MODAL EDITAR ESTADO INACTIVO-->