<link href="{{ asset('css/estiloDePopUp.css') }}?v=<?php echo(rand()); ?>" rel="stylesheet">


<!--TAMAÑOS
modal-dialog modal-xl
modal-dialog modal-lg
modal-dialog modal-sm<link rel="stylesheet" type="text/css" href="css/modal.css">

SCROLL
modal-dialog modal-dialog-scrollable
-->



<!--MODALS-->

    <!-- MODAL EDITAR-->
        <div class="modal fade" id="editarCita" tabindex="-1" aria-labelledby="labelEditarCita" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title col-11 text-center" id="labelEditarCita">Formulario para Actualizar Datos de Cita</h5>
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
                                <input type="hidden" hidden name="" id='idCita'>
                                <div class="alert alert-warning" role="alert">
                                    <center><b>¡Por favor, verifique que el regitro a actualizar sea el correcto!</b></center>
                                </div>

                                <label for="nombre3" class="col-12 text-center">Nombre del solicitante</label>
                                <input type="text" class="form-control" name="nombreDelSolicitante3" id="nombreDelSolicitante3" readonly/> <br>
                                <br></br>

                                <label for="clientes3" class="col-12 text-center">Total de clientes</label>
                                <input type="text" class="form-control" placeholder="Ingrese el total de clientes que serán atendidos" name="numeroDeClientesPorAtender3" id="numeroDeClientesPorAtender3"/> <br>
                                <br></br>

                                <label for="fecha3" class="col-12 text-center">Fecha de cita</label>
                                <input type="date" class="form-control" name="fechaDeCita3" id="fechaDeCita3"/> <br>
                                <br></br>

                                <label for="hora3" class="col-12 text-center">Hora de cita</label>
                                <input required type="TIME" class="form-control" placeholder="Seleccione la hora de cita" name="horaDeCita3" id="horaDeCita3"/> <br>
                                <br></br>

                                <label for="analisis3" class="col-12 text-center">Análisis requeridos</label>
                                <input type="text" class="form-control" placeholder="Ingrese los de análisis requeridos" name="tiposDeAnalisisRequeridos3" id="tiposDeAnalisisRequeridos3"/> <br>
                                <br></br>

                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger btn-lg" data-dismiss="modal">Cancelar Actualización</button>
                            <button type="submit" class="btn btn-success btn-lg">Actualizar Cita</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <!--FIN MODAL EDITAR-->


    <!-- MODAL ELIMINAR-->
        <div class="modal fade" id="eliminarCita" tabindex="-1" aria-labelledby="labelEliminarCita" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title col-11 text-center" id="labelEliminarCita">Eliminar Registro Completo de la Cita</h5>
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

                                <label for="fecha4" class="col-12 text-center">Fecha de cita</label>
                                <input type="text" class="form-control" name="fechaDeCita4" readonly="fechaDeCita4" id="fechaDeCita4"/>
                                <br> </br>
                                <label for="hora4" class="col-12 text-center">Hora de cita</label>
                                <input type="text" class="form-control" name="horaDeCita4" readonly="horaDeCita4" id="horaDeCita4"/>
                            </div>


                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-secondary btn-lg">Confirmar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <!--FIN MODAL ELIMINAR-->
