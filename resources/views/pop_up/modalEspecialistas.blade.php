<link href="{{ asset('css/estiloDePopUp.css') }}?v=<?php echo(rand()); ?>" rel="stylesheet">

<!--TAMAÑOS
modal-dialog modal-xl
modal-dialog modal-lg
modal-dialog modal-sm
SCROLL
modal-dialog modal-dialog-scrollable
-->
<!-- MODALS-->
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
                    <form accept-charset="UTF-8" enctype="multipart/form-data" action="/subirImagenEspecialista" method="post">
                    @csrf
                    @method ('PUT')
                        <div class="modal-body">
                            <div class="alert alert-info" role="alert">
                                <center><b>¡Su cambio será visible cuando presione el botón subir!</b></center>
                            </div>
                            
                            <input type="hidden" name="id" id="idAgregarImagen">
                            
                            <br></br>
                            <input required type="file" accept="image/*" class="form-control"  name="imagenDelEspecialista"/> <br>
                            @error('imagenDelEspecialista')
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
        <div class="modal fade" id="agregarEspecialista" tabindex="-1" aria-labelledby="labelAgregarEspecialista" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title col-11 text-center col-11 text-center" id="labelAgregarEspecialista">FORMULARIO PARA REGISTRAR UN(A) ESPECIALISTA</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <form id="agregarForm">
                        <div class="modal-body">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col">
                                    <label for="nombreDelEspecialista1" class="col-12 text-center">Primer nombre</label>
                                    <input required type="text" class="form-control" placeholder="Ingrese el primer nombre del especialista" name="nombreDelEspecialista1" id="nombreDelEspecialista1" onkeypress="return soloLetras(event);" class="form-control @error('nombreDelEspecialista1') is-invalid @enderror" required autocomplete="nombreDelEspecialista1" autofocus/><br>
                                    @error('nombreDelEspecialista1')
                                        <div class="alert alert-danger">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="col">
                                    <label for="segundoNombreDelEspecialista1" class="col-12 text-center">Segundo nombre</label>
                                    <input type="text" class="form-control" placeholder="Ingrese el segundo nombre del especialista" name="segundoNombreDelEspecialista1" id="segundoNombreDelEspecialista1" onkeypress="return soloLetras(event);" class="form-control @error('segundoNombreDelEspecialista1') is-invalid @enderror" autocomplete="segundoNombreDelEspecialista1" autofocus/><br>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <label for="primerApellidoDelEspecialista1" class="col-12 text-center">Primer apellido</label>
                                    <input required type="text" class="form-control" placeholder="Ingrese el primer apellido del especialista" name="primerApellidoDelEspecialista1" id="primerApellidoDelEspecialista1" onkeypress="return soloLetras(event);" class="form-control @error('primerApellidoDelEspecialista1') is-invalid @enderror" required autocomplete="primerApellidoDelEspecialista1" autofocus/><br>
                                    @error('primerApellidoDelEspecialista1')
                                        <div class="alert alert-danger">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="col">
                                    <label for="segundoApellidoDelEspecialista1" class="col-12 text-center">Segundo apellido</label>
                                    <input required type="text" class="form-control" placeholder="Ingrese el segundo apellido del especialista" name="segundoApellidoDelEspecialista1" id="segundoApellidoDelEspecialista1" onkeypress="return soloLetras(event);" class="form-control @error('segundoApellidoDelEspecialista1') is-invalid @enderror" required autocomplete="segundoApellidoDelEspecialista1" autofocus/><br>
                                    @error('segundoApellidoDelEspecialista1')
                                        <div class="alert alert-danger">{{$message}}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <label for="correoDelEspecialista1" class="col-12 text-center">Correo Electrónico</label>
                                    <input required type="email" class="form-control" placeholder="Ingrese un correo electrónictrónico para contacto con los clientes" name="correoDelEspecialista1" id="correoDelEspecialista1" onkeyup="this.value = this.value.toLowerCase();" class="form-control @error('correoDelEspecialista1') is-invalid @enderror" required autocomplete="correoDelEspecialista1" autofocus/><br>
                                    @error('correoDelEspecialista1')
                                        <div class="alert alert-danger">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="col">
                                    <label for="sedeDelEspecialista1" class="col-12 text-center">Sede</label>
                                    <input required type="text" class="form-control" placeholder="Ingrese la sede VIDAlab en la que desempeña el especialista" name="sedeDelEspecialista1" id="sedeDelEspecialista1" onkeypress="return soloNumerosLetrasYEspacios(event);" class="form-control @error('sedeDelEspecialista1') is-invalid @enderror" required autocomplete="sedeDelEspecialista1" autofocus/><br>
                                    @error('sedeDelEspecialista1')
                                        <div class="alert alert-danger">{{$message}}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <label for="especialidadesDelEspecialista1" class="col-12 text-center">Especialidades o Experiencia</label>
                                    <textarea required  name="especialidadesDelEspecialista1" class="form-control" placeholder="Ingrese especialidades o experiencia del especialista" id="especialidadesDelEspecialista1" rows="6"></textarea>
                                    @error('especialidadesDelEspecialista1')
                                    <div class="alert alert-danger">{{$message}}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-success">Guardar Cambios</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <!--FIN MODAL AGREGAR-->


    <!-- MODAL EDITAR-->
        <div class="modal fade" id="editarEspecialista" tabindex="-1" aria-labelledby="labelEditarEspecialista" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered  modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title col-11 text-center" id="labelEditarEspecialista">Formulario para Actualizar Datos de Especialista</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form id="editarForm">
                        <div class="modal-body">
                            {{ csrf_field() }}
                            {{method_field('PUT')}}
                            <input type="hidden" name="id" id="idEditar">
                            <div class="row">
                                <div class="col">
                                    <label for="correoDelEspecialista3" class="col-12 text-center">Correo Electrónico</label>
                                    <input required type="email" class="form-control" placeholder="Ingrese un correo electrónictrónico para contacto con los clientes" onkeyup="this.value = this.value.toLowerCase();" name="correoDelEspecialista3" id="correoDelEspecialista3" class="form-control @error('correoDelEspecialista3') is-invalid @enderror" required autocomplete="correoDelEspecialista3" autofocus/> <br>
                                    @error('correoDelEspecialista3')
                                        <div class="alert alert-danger">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="col">
                                    <label for="sedeDelEspecialista3" class="col-12 text-center">Sede</label>
                                    <input required type="text" class="form-control" placeholder="Ingrese la sede VIDAlab en la que desempeña el especialista" name="sedeDelEspecialista3" id="sedeDelEspecialista3" onkeypress="return soloNumerosLetrasYEspacios(event);" class="form-control @error('sedeDelEspecialista3') is-invalid @enderror" required autocomplete="sedeDelEspecialista3" autofocus/> <br>
                                    @error('sedeDelEspecialista3')
                                        <div class="alert alert-danger">{{$message}}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <label for="especialidadesDelEspecialista3" class="col-12 text-center">Especialidades o Experiencia</label>
                                    <textarea  name="especialidadesDelEspecialista3" class="form-control" placeholder="Ingrese especialidades o experiencia del especialista" id="especialidadesDelEspecialista3" rows="6"></textarea>
                                    @error('especialidadesDelEspecialista3')
                                    <div class="alert alert-danger">{{$message}}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-success">Guardar Cambios</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <!--FIN MODAL EDITAR-->


    <!-- MODAL ELIMINAR-->
        <div class="modal fade" id="eliminarEspecialista" tabindex="-1" aria-labelledby="labelEliminarEspecialista" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered  modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title col-11 text-center" id="labelEliminarEspecialista">Eliminar Registro Completo de la Empresa</h5>
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

                            <label for="nombreCompletoDelEspecialista4" class="col-12 text-center">Nombre completo</label>
                            <input required type="text" class="form-control" name="nombreCompletoDelEspecialista4" id="nombreCompletoDelEspecialista4" readonly/> 
                            
                            <br>

                            <label for="sedeDelEspecialista4" class="col-12 text-center">Sede</label>
                            <input required type="text" class="form-control" name="sedeDelEspecialista4" id="sedeDelEspecialista4" readonly/> <br>
                        </div>
                        <div class="modal-footer text-center">
                            <button type="submit" class="btn btn-secondary btn-lg">Confirmar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <!--FIN MODAL ELIMINAR-->
