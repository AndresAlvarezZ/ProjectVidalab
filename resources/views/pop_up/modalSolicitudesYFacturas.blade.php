<link href="{{ asset('css/estiloDePopUp.css') }}?v=<?php echo(rand()); ?>" rel="stylesheet">

<!--TAMAÑOS
modal-dialog modal-xl
modal-dialog modal-lg
modal-dialog modal-sm
SCROLL
modal-dialog modal-dialog-scrollable
-->



<!--MODALS-->

    <!-- MODAL EDITAR SOLICITUDES EN ESPERA-->
        <div class="modal fade" id="editarEnEspera" tabindex="-1" aria-labelledby="labelEditarEnEspera" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title col-11 text-center" id="labelEditarEnEspera">Procesar Solicitud</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form id="editarEnEsperaForm">
                        <div class="modal-body">
                            {{ csrf_field() }}
                            {{method_field('PUT')}}
                            <div class="form-row">
                                <input type="hidden" name="id" id="idSolicitudEnEspera">
                                
                                <div class="alert alert-warning" role="alert">
                                    <center><b>¡Por favor, verifique que la solicitud a procesar sea la correcta!</b></center>
                                </div>

                                <label for="nombreDelCliente1" class="col-12 text-center">Nombre del cliente</label>
                                <input type="text" class="form-control" name="nombreDelCliente1" id="nombreDelCliente1" readonly/></br>
                                <br></br>

                                <label for="analisisSolicitados1" class="col-12 text-center">Análisis Solicitados</label>
                                <input type="text" class="form-control" name="analisisSolicitados1" id="analisisSolicitados1" readonly/></br>
                                <br></br>

                                <label for="costoDelServicio1" class="col-12 text-center">Costo total del servicio</label>
                                <input type="text" class="form-control" name="costoDelServicio1" id="costoDelServicio1" readonly/></br>
                                <br></br>

                                <div class="col">
                                    <label class="col-12 text-center">Cambiar estado</label>
                                    <br>
                                    <select class="form-control" type="text" name="estado">
                                        <option value="Confirmada">Confirmar solicitud</option>
                                        <option value="Cancelada">Cancelar solicitud</option>
                                    </select>
                                </div>
                                <br>

                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-success">¡Listo!</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <!--FIN MODAL EDITAR  SOLICITUDES EN ESPERA-->


    <!-- MODAL EDITAR  SOLICITUD CONFIRMADA-->
        <div class="modal fade" id="editarConfirmada" tabindex="-1" aria-labelledby="labelEditarConfirmada" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title col-11 text-center" id="labelEditarConfirmada">Procesar Solicitud</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form id="editarConfirmadaForm">
                        <div class="modal-body">
                            {{ csrf_field() }}
                            {{method_field('PUT')}}
                            <div class="form-row">
                                <input type="hidden" name="id" id="idSolicitudConfirmada">
                                
                                <div class="alert alert-warning" role="alert">
                                    <center><b>¡Por favor, verifique que la solicitud a procesar sea la correcta!</b></center>
                                </div>

                                <label for="nombreDelCliente2" class="col-12 text-center">Nombre del cliente</label>
                                <input type="text" class="form-control" name="nombreDelCliente2" id="nombreDelCliente2" readonly/></br>
                                <br></br>

                                <label for="analisisSolicitados2" class="col-12 text-center">Análisis Solicitados</label>
                                <input type="text" class="form-control" name="analisisSolicitados2" id="analisisSolicitados2" readonly/></br>
                                <br></br>

                                <label for="costoDelServicio2" class="col-12 text-center">Costo total del servicio</label>
                                <input type="text" class="form-control" name="costoDelServicio2" id="costoDelServicio2" readonly/></br>
                                <br></br>

                                <div class="col">
                                    <label class="col-12 text-center">Cambiar estado de solicitud:</label>
                                    <br>
                                    <select class="form-control" type="text" name="estado">
                                        <option value="Finalizada">Finalizar solicitud</option>
                                        <option value="Cancelada">Cancelar solicitud</option>
                                    </select>
                                </div>
                                <br>

                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-success">¡Listo!</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <!--FIN MODAL EDITAR SOLICITUD CONFIRMADA-->


    <!-- MODAL EDITAR SOLICITUDE CANCELADA-->
        <div class="modal fade" id="editarCancelada" tabindex="-1" aria-labelledby="labelEditarCancelada" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title col-11 text-center" id="labelEditarCancelada">Procesar Solicitud</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form id="editarCanceladaForm">
                        <div class="modal-body">
                            {{ csrf_field() }}
                            {{method_field('PUT')}}
                            <div class="form-row">
                                <input type="hidden" name="id" id="idSolicitudCancelada">
                                
                                <div class="alert alert-warning" role="alert">
                                    <center><b>¡Por favor, verifique que la solicitud a procesar sea la correcta!</b></center>
                                </div>

                                <label for="nombreDelCliente3" class="col-12 text-center">Nombre del cliente</label>
                                <input type="text" class="form-control" name="nombreDelCliente3" id="nombreDelCliente3" readonly/></br>
                                <br></br>

                                <label for="analisisSolicitados3" class="col-12 text-center">Análisis Solicitados</label>
                                <input type="text" class="form-control" name="analisisSolicitados3" id="analisisSolicitados3" readonly/></br>
                                <br></br>

                                <label for="costoDelServicio3" class="col-12 text-center">Costo total del servicio</label>
                                <input type="text" class="form-control" name="costoDelServicio3" id="costoDelServicio3" readonly/></br>
                                <br></br>

                                <div class="col">
                                    <label class="col-12 text-center">Cambiar estado de solicitud:</label>
                                    <br>
                                    <select class="form-control" type="text" name="estado">
                                        <option value="Confirmada">Confirmar solicitud</option>
                                    </select>
                                </div>
                                <br>

                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-success">¡Listo!</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <!--FIN MODAL EDITAR-->





<!--FIN DE MODALS-->