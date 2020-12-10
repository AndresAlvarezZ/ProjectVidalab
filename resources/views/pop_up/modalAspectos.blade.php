<link href="{{ asset('css/estiloDePopUp.css') }}?v=<?php echo(rand()); ?>" rel="stylesheet">

<!--TAMAÑOS
modal-dialog modal-xl
modal-dialog modal-lg
modal-dialog modal-sm
SCROLL
modal-dialog modal-dialog-scrollable
-->

    <!-- MODAL AGREGAR-->
        <div class="modal fade" id="agregarAspecto" tabindex="-1" aria-labelledby="labelAgregaragregarAspecto" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title col-11 text-center col-11 text-center" id="labelAgregaragregarAspecto">FORMULARIO PARA REGISTRAR INFORMACIÓN DE VIDAlab</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <form id="agregarForm">
                        <div class="modal-body">
                            {{ csrf_field() }}
                            
                            <div class="alert alert-warning" role="alert">
                                    <center><b>Los campos que presentan un asterísco <b>(*)</b> estrictamente necesarios, de lo contrario el sistema le impedirá realizar el registro</b></center>
                                </div>
                                <br></br>
                            <div class="row">
                                <div class="col">
                                    <label for="ubicacion1" class="col-12 text-center">Ubicación de Sedes VIDAlab *</label>
                                    <textarea  required name="ubicacion1" class="form-control" placeholder="Ingrese la ubicación de sedes VIDAlab" id="ubicacion1" rows="3"></textarea></br>
                                    @error('ubicacion1')
                                    <div class="alert alert-danger">{{$message}}</div>
                                    @enderror
                                </div>
                            </div>
                            
                            
                            <h4>Contactos</h4>
                            <div class="row">
                                <div class="col">
                                    <label for="telefono1" class="col-12 text-center">Número telefónico *</label>
                                    <input required type="text" class="form-control" placeholder="Ingrese el número telefónico de VIDAlab" name="telefono1" id="telefono1"/> </br>
                                    @error('telefono1')
                                        <div class="alert alert-danger">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="col">
                                    <label for="correoElectronico1" class="col-12 text-center">Correo electrónico *</label>
                                    <input required type="text" class="form-control" placeholder="Ingrese el correo electrónico de VIDAlab" name="correoElectronico1" id="correoElectronico1"/> </br>
                                    @error('correoElectronico1')
                                        <div class="alert alert-danger">{{$message}}</div>
                                    @enderror
                                </div>
                            </div>

                            <h4>Redes Sociales</h4>
                            <div class="row">
                                <div class="col">
                                    <label for="facebook1" class="col-12 text-center">Cuenta de Facebook *</label>
                                    <input required type="text" class="form-control" placeholder="Ingrese la cuenta de Facebook de VIDAlab" name="facebook1" id="facebook1"/> </br>
                                    @error('facebook1')
                                        <div class="alert alert-danger">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="col">
                                    <label for="instagram1" class="col-12 text-center">Cuenta de Instagram *</label>
                                    <input required type="text" class="form-control" placeholder="Ingrese la cuenta Instagram de VIDAlab" name="instagram1" id="instagram1"/> </br>
                                    @error('instagram1')
                                        <div class="alert alert-danger">{{$message}}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label for="whatsapp1" class="col-12 text-center">WhatsApp *</label>
                                    <input required type="text" class="form-control" placeholder="Ingrese el número de WhatsApp de VIDAlab" name="whatsapp1" id="whatsapp1"/> </br>
                                    @error('whatsapp1')
                                        <div class="alert alert-danger">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="col">
                                   </br>
                                </div>
                            </div>

                            <h4>Horarios de Atención</h4>
                            <div class="row">
                                <div class="col">
                                    <label for="horarioRegular1" class="col-12 text-center">Horario regular *</label>
                                    <textarea required name="horarioRegular1" class="form-control" placeholder="Ingrese el horario de atención regular de VIDAlab" id="horarioRegular1" rows="3"></textarea></br>
                                    @error('horarioRegular1')
                                        <div class="alert alert-danger">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="col">
                                    <label for="horarioEspecial1" class="col-12 text-center">Horario Especial</label>
                                    <textarea name="horarioEspecial1" class="form-control" placeholder="Ingrese el horario de atención especial de VIDAlab si es necesario" id="horarioEspecial1" rows="3">N/A</textarea></br>
                                </div>
                            </div>

                            <h4>Descripciones</h4></br>
                            <div class="row">
                                <div class="col">
                                    <label for="lema1" class="col-12 text-center">Lema o frase común de VIDAlab *</label>
                                    <input required type="text" class="form-control" placeholder="Ingrese el lema o frase icónica de VIDAlab" name="lema1" id="lema1"/> </br>
                                    @error('lema1')
                                        <div class="alert alert-danger">{{$message}}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label for="historia1" class="col-12 text-center">Historia de VIDAlab *</label>
                                    <textarea  required name="historia1" class="form-control" placeholder="Ingrese la historia de VIDAlab" id="historia1" rows="4"></textarea></br>
                                    @error('historia1')
                                        <div class="alert alert-danger">{{$message}}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <label for="mision1" class="col-12 text-center">Misión</label>
                                    <textarea name="mision1" class="form-control" placeholder="Ingrese la misión de VIDAlab" id="mision1" rows="3">N/A</textarea></br>
                                </div>
                                <div class="col">
                                    <label for="vision1" class="col-12 text-center">Visión</label>
                                    <textarea name="vision1" class="form-control" placeholder="Ingrese la visión de VIDAlab" id="vision1" rows="3">N/A</textarea></br>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col">
                                    <label for="valores1" class="col-12 text-center">Valores</label>
                                    <textarea  name="valores1" class="form-control" placeholder="Ingrese los valores que caracterizan a VIDAlab" id="valores1" rows="3">N/A</textarea></br>
                                </div>
                                <div class="col">
                                    <label for="compromiso1" class="col-12 text-center">Compromiso</label>
                                    <textarea name="compromiso1" class="form-control" placeholder="Ingrese el compromiso de VIDAlab" id="compromiso1" rows="3">N/A</textarea></br>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-success">Guardar Información</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <!--FIN MODA-->



@foreach($aspectos as $aspecto)
    <!-- MODAL ubicacion-->
        <div class="modal fade" id="ubicacion2" tabindex="-1" aria-labelledby="ubicacion2" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title col-11 text-center" id="ubicacion22">Actualizar ubicación</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form id="ubicacionForm">
                        <div class="modal-body">
                            {{ csrf_field() }}
                            {{method_field('PUT')}}
                            <div class="form-row">
                                
                                <textarea  required name="ubicacion2" class="form-control" placeholder="Ingrese la ubicación de sedes VIDAlab" id="ubicacion2" rows="5">{{$aspecto->ubicacion}}</textarea></br>
                                @error('ubicacion2')
                                <div class="alert alert-danger">{{$message}}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger btn-lg" data-dismiss="modal">Cancelar Actualización</button>
                            <button type="submit" class="btn btn-success btn-lg">Actualizar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <!--FIN MODAL ubicacion-->

    <!-- MODAL telefono-->
        <div class="modal fade" id="telefono2" tabindex="-1" aria-labelledby="telefono2" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title col-11 text-center" id="telefono22">Actualizar teléfono</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form id="telefonoForm">
                        <div class="modal-body">
                            {{ csrf_field() }}
                            {{method_field('PUT')}}
                            <div class="form-row">
                                
                                <input required type="text" class="form-control" placeholder="Ingrese el número telefónico de VIDAlab" name="telefono2" id="telefono2" value="{{$aspecto->telefono}}"/> </br>
                                @error('telefono2')
                                    <div class="alert alert-danger">{{$message}}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger btn-lg" data-dismiss="modal">Cancelar Actualización</button>
                            <button type="submit" class="btn btn-success btn-lg">Actualizar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <!--FIN MODAL telefono-->

    <!-- MODAL correo-->
        <div class="modal fade" id="correo2" tabindex="-1" aria-labelledby="correo2" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title col-11 text-center" id="correo2">Actualizar correo electrónico</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form id="correoForm">
                        <div class="modal-body">
                            {{ csrf_field() }}
                            {{method_field('PUT')}}
                            <div class="form-row">
                                <input type="hidden" name="id" ivalue="correo2">
                                
                                <input required type="text" class="form-control" placeholder="Ingrese el correo electrónico de VIDAlab" name="correoElectronico2" id="correoElectronico2" value="{{$aspecto->correoElectronico}}"/> </br>
                                @error('correoElectronico2')
                                    <div class="alert alert-danger">{{$message}}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger btn-lg" data-dismiss="modal">Cancelar Actualización</button>
                            <button type="submit" class="btn btn-success btn-lg">Actualizar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <!--FIN MODAL correo-->

    <!-- MODAL facebook-->
        <div class="modal fade" id="facebook2" tabindex="-1" aria-labelledby="facebook2" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title col-11 text-center" id="facebook2">Actualizar cuenta de facebook</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form id="facebookForm">
                        <div class="modal-body">
                            {{ csrf_field() }}
                            {{method_field('PUT')}}
                            <div class="form-row">
                                <input type="hidden" name="id" value="facebook2">
                                
                                <input required type="text" class="form-control" placeholder="Ingrese la cuenta de Facebook de VIDAlab" name="facebook2" id="facebook2" value="{{$aspecto->facebook}}"/> </br>
                                @error('facebook2')
                                    <div class="alert alert-danger">{{$message}}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger btn-lg" data-dismiss="modal">Cancelar Actualización</button>
                            <button type="submit" class="btn btn-success btn-lg">Actualizar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <!--FIN MODAL facebook-->

    <!-- MODAL instagram-->
        <div class="modal fade" id="instagram2" tabindex="-1" aria-labelledby="instagram2" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title col-11 text-center" id="instagram2">Actualizar cuenta de instagram</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form id="instagramForm">
                        <div class="modal-body">
                            {{ csrf_field() }}
                            {{method_field('PUT')}}
                            <div class="form-row">
                                <input type="hidden" name="id" value="instagram2">
                                
                                <input required type="text" class="form-control" placeholder="Ingrese la cuenta Instagram de VIDAlab" name="instagram2" id="instagram2" value="{{$aspecto->instagram}}"/> </br>
                                @error('instagram2')
                                    <div class="alert alert-danger">{{$message}}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger btn-lg" data-dismiss="modal">Cancelar Actualización</button>
                            <button type="submit" class="btn btn-success btn-lg">Actualizar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <!--FIN MODAL instagram-->

    <!-- MODAL whatsapp-->
        <div class="modal fade" id="whatsapp2" tabindex="-1" aria-labelledby="whatsapp2" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title col-11 text-center" id="whatsapp2">Actualizar número whatsapp</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form id="whatsappForm">
                        <div class="modal-body">
                            {{ csrf_field() }}
                            {{method_field('PUT')}}
                            <div class="form-row">
                                <input type="hidden" name="id" value="whatsapp2">
                                
                                <input required type="text" class="form-control" placeholder="Ingrese el número de WhatsApp de VIDAlab" name="whatsapp2" id="whatsapp2" value="{{$aspecto->whatsapp}}"/> </br>
                                @error('whatsapp2')
                                    <div class="alert alert-danger">{{$message}}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger btn-lg" data-dismiss="modal">Cancelar Actualización</button>
                            <button type="submit" class="btn btn-success btn-lg">Actualizar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <!--FIN MODAL whatsapp-->

    <!-- MODAL horarioRegular-->
        <div class="modal fade" id="horarioRegular2" tabindex="-1" aria-labelledby="horarioRegular2" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title col-11 text-center" id="horarioRegular2">Actualizar horario Regular</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form id="horarioRegularForm">
                        <div class="modal-body">
                            {{ csrf_field() }}
                            {{method_field('PUT')}}
                            <div class="form-row">
                                
                                <textarea required name="horarioRegular2" class="form-control" placeholder="Ingrese el horario de atención regular de VIDAlab" id="horarioRegular2" rows="3">{{$aspecto->horarioRegular}}</textarea></br>
                                @error('horarioRegular2')
                                    <div class="alert alert-danger">{{$message}}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger btn-lg" data-dismiss="modal">Cancelar Actualización</button>
                            <button type="submit" class="btn btn-success btn-lg">Actualizar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <!--FIN MODAL horarioRegular-->

    <!-- MODAL horarioEspecial-->
        <div class="modal fade" id="horarioEspecial2" tabindex="-1" aria-labelledby="horarioEspecial2" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title col-11 text-center" id="horarioEspecial2">Actualizar Horario Especial</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form id="horarioEspecialForm">
                        <div class="modal-body">
                            {{ csrf_field() }}
                            {{method_field('PUT')}}
                            <div class="form-row">
                                
                                <textarea name="horarioEspecial2" class="form-control" placeholder="Ingrese el horario de atención especial de VIDAlab si es necesario" id="horarioEspecial2" rows="3">{{$aspecto->horarioEspecial}}</textarea></br>

                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger btn-lg" data-dismiss="modal">Cancelar Actualización</button>
                            <button type="submit" class="btn btn-success btn-lg">Actualizar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <!--FIN MODAL horarioEspecial-->

    <!-- MODAL lema-->
        <div class="modal fade" id="lema2" tabindex="-1" aria-labelledby="lema2" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title col-11 text-center" id="lema2">Actualizar Lema</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form id="lemaForm">
                        <div class="modal-body">
                            {{ csrf_field() }}
                            {{method_field('PUT')}}
                            <div class="form-row">
                                <input type="hidden" name="id" value="lema2">
                                
                                <input required type="text" class="form-control" placeholder="Ingrese el lema o frase icónica de VIDAlab" name="lema2" id="lema2" value="{{$aspecto->lema}}"/> </br>
                                @error('lema2')
                                    <div class="alert alert-danger">{{$message}}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger btn-lg" data-dismiss="modal">Cancelar Actualización</button>
                            <button type="submit" class="btn btn-success btn-lg">Actualizar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <!--FIN MODAL lema-->

    <!-- MODAL historia-->
        <div class="modal fade" id="historia2" tabindex="-1" aria-labelledby="historia2" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title col-11 text-center" id="historia2">Actualizar Historia</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form id="historiaForm">
                        <div class="modal-body">
                            {{ csrf_field() }}
                            {{method_field('PUT')}}
                            <div class="form-row">
                                <input type="hidden" name="id" value="historia2">
                                
                                <textarea  required name="historia2" class="form-control" placeholder="Ingrese la historia de VIDAlab" id="historia2" rows="4">{{$aspecto->historia}}</textarea></br>
                                @error('historia2')
                                    <div class="alert alert-danger">{{$message}}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger btn-lg" data-dismiss="modal">Cancelar Actualización</button>
                            <button type="submit" class="btn btn-success btn-lg">Actualizar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <!--FIN MODAL historia-->

    <!-- MODAL valores-->
        <div class="modal fade" id="valores2" tabindex="-1" aria-labelledby="valores2" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title col-11 text-center" value="valores2">Actualizar Valores</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form id="valoresForm">
                        <div class="modal-body">
                            {{ csrf_field() }}
                            {{method_field('PUT')}}
                            <div class="form-row">
                                <input type="hidden" name="id" id="idValores2">
                                
                                <textarea  name="valores2" class="form-control" placeholder="Ingrese los valores que caracterizan a VIDAlab" id="valores2" rows="3">{{$aspecto->valores}}</textarea></br>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger btn-lg" data-dismiss="modal">Cancelar Actualización</button>
                            <button type="submit" class="btn btn-success btn-lg">Actualizar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <!--FIN MODAL valores-->

    <!-- MODAL compromiso-->
        <div class="modal fade" id="compromiso2" tabindex="-1" aria-labelledby="compromiso2" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title col-11 text-center" value="compromiso2">Actualizar compromiso</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form id="compromisoForm">
                        <div class="modal-body">
                            {{ csrf_field() }}
                            {{method_field('PUT')}}
                            <div class="form-row">
                                <input type="hidden" name="id" id="idCompromiso2">
                                
                                <textarea name="compromiso2" class="form-control" placeholder="Ingrese el compromiso de VIDAlab" id="compromiso2" rows="3">{{$aspecto->compromiso}}</textarea></br>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger btn-lg" data-dismiss="modal">Cancelar Actualización</button>
                            <button type="submit" class="btn btn-success btn-lg">Actualizar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <!--FIN MODAL compromiso-->

    <!-- MODAL mision-->
        <div class="modal fade" id="mision2" tabindex="-1" aria-labelledby="mision2" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title col-11 text-center" id="mision2">Actualizar misión</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form id="misionForm">
                        <div class="modal-body">
                            {{ csrf_field() }}
                            {{method_field('PUT')}}
                            <div class="form-row">
                                <input type="hidden" name="id" value="mision2">
                                
                                <textarea name="mision2" class="form-control" placeholder="Ingrese la misión de VIDAlab" id="mision2" rows="3">{{$aspecto->misión}}</textarea></br>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger btn-lg" data-dismiss="modal">Cancelar Actualización</button>
                            <button type="submit" class="btn btn-success btn-lg">Actualizar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <!--FIN MODAL mision-->

    <!-- MODAL vision-->
        <div class="modal fade" id="vision2" tabindex="-1" aria-labelledby="vision2" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title col-11 text-center" id="vision2">Actualizar visión</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form id="visionForm">
                        <div class="modal-body">
                            {{ csrf_field() }}
                            {{method_field('PUT')}}
                            <div class="form-row">
                                <input type="hidden" name="id" value="vision2">
                                
                                <textarea name="vision2" class="form-control" placeholder="Ingrese la visión de VIDAlab" id="vision2" rows="3">{{$aspecto->vision}}</textarea></br>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger btn-lg" data-dismiss="modal">Cancelar Actualización</button>
                            <button type="submit" class="btn btn-success btn-lg">Actualizar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <!--FIN MODAL vision-->
@endforeach