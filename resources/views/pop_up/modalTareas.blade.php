<link href="{{ asset('css/estiloDePopUp.css') }}?v=<?php echo(rand()); ?>" rel="stylesheet">


    <!-- MODAL ELIMINAR-->
        <div class="modal fade" id="eliminarTarea" tabindex="-1" aria-labelledby="labelEliminarTarea" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered  modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title col-11 text-center" id="labelEliminarTarea">Eliminar Tarea</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form id="eliminarTareaForm">
                        <div class="modal-body">
                            {{ csrf_field() }}
                            {{method_field('DELETE')}}
                            <input type="hidden" name="id" id="idEliminar">

                            <div class="alert alert-danger" role="alert">
                                <center>¡Lea cuidadosamente la información!</center>
                            </div>

                            <label for="tarea2" class="col-12 text-center">Nombre de la empresa</label>
                            <input type="text" class="form-control" name="tarea2" readonly="tarea2" id="tarea2"/>
                            
                        </div>
                        <div class="modal-footer text-center">
                            <button type="submit" class="btn btn-secondary btn-lg">Confirmar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <!--FIN MODAL ELIMINAR-->