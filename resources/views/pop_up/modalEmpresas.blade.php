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
                            <div class="form-row">

                                <input type="hidden" name="idCitaDeEmpresa" id="idCitaDeEmpresa"><br>

                                <div class="alert alert-info" role="alert">
                                    <center><b>¡Por favor, antes de Registrar verifique que los datos sean los correctos y respetar los formatos solicitados por el sistema!</b></center>
                                </div> 

                                <h4>Datos del solicitante</h4>
                                <label for="nombre1" class="col-12 text-center">Nombre</label>
                                <input required type="text" class="form-control" placeholder="Ingrese el nombre del solicitante de la cita" name="nombreDelSolicitante1" value="{{old('nombreDelSolicitante1')}}" /> <br>
                                @error('nombreDelSolicitante1')
                                    <div class="alert alert-danger">{{$message}}</div>
                                @enderror
                                <br></br>

                                <label required for="primerApellido1" class="col-12 text-center">Primer apellido</label>
                                <input type="text" class="form-control" placeholder="Ingrese el primer apellido del solicitante" name="primerApellidoDelSolicitante1" value="{{old('primerApellidoDelSolicitante1')}}"/> <br>
                                @error('primerApellidoDelSolicitante1')
                                    <div class="alert alert-danger">{{$message}}</div>
                                @enderror
                                <br></br>

                                <label for="segundoApellido1" class="col-12 text-center">Segundo apellido</label>
                                <input required type="text" class="form-control" placeholder="Ingrese el segundo apellido del solicitante" name="segundoApellidoDelSolicitante1" value="{{old('segundoApellidoDelSolicitante1')}}"/> <br>
                                @error('segundoApellidoDelSolicitante1')
                                    <div class="alert alert-danger">{{$message}}</div>
                                @enderror
                                <br></br>

                                <h4>Datos de la Cita</h4>
                                <label for="clientes1" class="col-12 text-center">Total de clientes</label>
                                <input required type="text" class="form-control" placeholder="Ingrese el total de clientes que serán atendidos" name="numeroDeClientesPorAtender1" value="{{old('numeroDeClientesPorAtender1')}}"/> <br>
                                @error('numeroDeClientesPorAtender1')
                                    <div class="alert alert-danger">{{$message}}</div>
                                @enderror
                                <br></br>

                                <label for="fecha1" class="col-12 text-center">Fecha de cita</label>
                                <input required type="date" class="form-control" placeholder="Seleccione la fecha de cita" name="fechaDeCita1" value="{{old('fechaDeCita1')}}"/> <br>
                                @error('fechaDeCita1')
                                    <div class="alert alert-danger">{{$message}}</div>
                                @enderror
                                <br></br>

                                <label for="hora1" class="col-12 text-center">Hora de cita</label>
                                <input required type="TIME" class="form-control" placeholder="Seleccione la hora de cita" name="horaDeCita1" value="{{old('horaDeCita1')}}"/> <br>
                                @error('horaDeCita1')
                                    <div class="alert alert-danger">{{$message}}</div>
                                @enderror
                                <br></br>

                                <label for="analisis1" class="col-12 text-center">Análisis requeridos</label>
                                <textarea required name="tiposDeAnalisisRequeridos1" class="form-control" cols="30" rows="5" placeholder="Ingrese los de análisis requeridos">{{old('tiposDeAnalisisRequeridos1')}}</textarea> <br>
                                @error('tiposDeAnalisisRequeridos1')
                                    <div class="alert alert-danger">{{$message}}</div>
                                @enderror
                                <br></br>


                            </div>
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
                            <div class="form-row">

                                <div class="alert alert-info" role="alert">
                                    <center><b>¡Por favor, antes de Registrar verifique que los datos sean los correctos y respetar los formatos solicitados por el sistema!</b></center>
                                </div>

                                <h4>Datos Generales</h4>
                                <label for="exampleFormControlSelect1" class="col-12 text-center">Nombre</label>
                                <input type="text" class="form-control" placeholder="Ingrese el nombre completo de la empresa" name="nombreDeLaEmpresa1" value="{{old('nombreDeLaEmpresa1')}}" /> <br>
                                @error('nombreDeLaEmpresa1')
                                    <div class="alert alert-danger">{{$message}}</div>
                                @enderror
                                </br></br>

                                <label for="exampleFormControlSelect1" class="col-12 text-center">Número telefónico</label>
                                <input type="text" class="form-control" placeholder="Ingrese un número telefónico para contactar a la empresa" name="numeroDeTelefonoDeLaEmpresa1" value="{{old('numeroDeTelefonoDeLaEmpresa1')}}"/> <br>
                                @error('numeroDeTelefonoDeLaEmpresa1')
                                    <div class="alert alert-danger">{{$message}}</div>
                                @enderror
                                </br></br>

                                <label for="exampleFormControlSelect1" class="col-12 text-center">Correo electrónico</label>
                                <input type="email" class="form-control" placeholder="Ingrese un correo electrónico para contactar a la empresa"  onkeyup="this.value = this.value.toLowerCase();" name="correoElectronicoDeLaEmpresa1" value="{{old('correoElectronicoDeLaEmpresa1')}}"/> <br>
                                @error('correoElectronicoDeLaEmpresa1')
                                    <div class="alert alert-danger">{{$message}}</div>
                                @enderror
                                </br></br>

                                <label for="exampleFormControlSelect1" class="col-12 text-center">Ubicación (dirección exacta)</label>
                                <textarea name="direccionDeLaEmpresa1" class="form-control" cols="30" rows="4" placeholder="Ingrese la dirección de la empresa con el formato: Provincia, cantón, distrito, dirección exacta">{{old('direccionDeLaEmpresa1')}}</textarea> <br>
                                @error('direccionDeLaEmpresa1')
                                    <div class="alert alert-danger">{{$message}}</div>
                                @enderror
                                </br></br>

                            </div>
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
                            <div class="form-row">
                                <input type="hidden" name="id" id="idEditar">
                                
                                <div class="alert alert-warning" role="alert">
                                    <center><b>¡Por favor, verifique que el regitro a actualizar sea el correcto!</b></center>
                                </div>

                                <label for="exampleFormControlSelect1" class="col-12 text-center">Nombre</label>
                                <input type="text" class="form-control" placeholder="Ingrese el nombre completo de la empresa" name="nombreDeLaEmpresa3" id="nombreDeLaEmpresa3" />
                                </br></br>

                                <label for="exampleFormControlSelect1" class="col-12 text-center">Número telefónico</label>
                                <input type="text" class="form-control" placeholder="Ingrese un número telefónico para contactar" name="numeroDeTelefonoDeLaEmpresa3" id="numeroDeTelefonoDeLaEmpresa3"/>
                                </br></br>

                                <label for="exampleFormControlSelect1" class="col-12 text-center">Correo electrónico</label>
                                <input type="email" class="form-control" placeholder="Ingrese un correo electrónico para contactar" onkeyup="this.value = this.value.toLowerCase();" name="correoElectronicoDeLaEmpresa3" id="correoElectronicoDeLaEmpresa3"/>
                                </br></br>

                                <label for="exampleFormControlSelect1" class="col-12 text-center">Ubicación (dirección exacta)</label>
                                <input type="text" class="form-control" placeholder="Ingrese la dirección de la empresa con el formato: Provincia, cantón, distrito, dirección exacta" name="direccionDeLaEmpresa3" id="direccionDeLaEmpresa3"/>
                                </br></br>

                            </div>
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
                            <div class="form-row">
                                <input type="hidden" name="id" id="idEliminar">

                                <div class="alert alert-danger" role="alert">
                                    <center>¡Lea cuidadosamente la información!</center>
                                </div>

                                <label for="nombre" class="col-12 text-center">Código de la empresa</label>
                                <input type="text" class="form-control" name="idDeLaEmpresa4" readonly="idDeLaEmpresa4" id="idDeLaEmpresa4"/>
                                <br> </br>
                                <label for="apellido" class="col-12 text-center">Nombre de la empresa</label>
                                <input type="text" class="form-control" name="nombreDeLaEmpresa4" readonly="nombreDeLaEmpresa4" id="nombreDeLaEmpresa4"/>
                            </div>
                            
                        </div>
                        <div class="modal-footer text-center">
                            <button type="submit" class="btn btn-secondary btn-lg">Confirmar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <!--FIN MODAL ELIMINAR-->
