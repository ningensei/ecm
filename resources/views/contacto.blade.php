@extends('layout')

@section('content')
<section class="contact-center">
	<?=$breadcrumbs;?>
	
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 text-center">
                <h1>Contáctanos</h1>
                <p class="lead">
                    Para reservar tu cupo acercate a la ECM antes del comienzo del curso. Nuestro horario de atención es de lunes a viernes de 16 a 20 hs o sábados de 10 a 15hs. Coordinar entrevista por mail o vía telefónica.
                </p>
            </div>
        </div>
        
        <div class="row">
            <form class="form-contact">
                <div class="col-md-4 col-md-offset-2">
                    <div class="clearfix">
                        <div>
                            <input class="form-name validate-required" type="text" placeholder="Nombre y apellido *" name="nombre">
                            <input class="form-email validate-required validate-email" type="text" name="celular" placeholder="Celular *">
                            <input class="form-email validate-required validate-email" type="text" name="localidad" placeholder="Localidad">
                            <div class="select-wrapper">
                                <select>
                                    <option>Horarios disponibles</option>
                                    <option>9 hs. a 13 hs.</option>
                                    <option>14 hs. a 16 hs.</option>
                                    <option>16 hs. a 21 hs.</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="clearfix">
                        <div>
                            <input class="form-name validate-required" type="text" placeholder="Email *" name="email">
                            <input class="form-email validate-required validate-email" type="text" name="telefono" placeholder="Teléfono">
                            <div class="select-wrapper">
                                <select>
                                    <option>Interesado en curso</option>
                                    <option>Piano</option>
                                    <option>Canto</option>
                                    <option>Batería</option>
                                </select>
                            </div>
                            <div class="select-wrapper">
                                <select>
                                    <option>Cómo nos conoció?</option>
                                    <option>Google</option>
                                    <option>Facebook</option>
                                    <option>Recomandación</option>
                                    <option>Vía Pública</option>
                                    <option>Revista planetario</option>
                                    <option>Mail</option>
                                    <option>Youtube</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-8 col-md-offset-2">
                    <div class="clearfix">
                        <div>
                            <textarea class="form-message validate-required" name="comentario" placeholder="Comentario"></textarea>
                            <input type="checkbox" name="novedades" id="novedades">
                                
                            <label for="novedades">
                                Deseo recibir por correo electrónico novedades del sitio web
                            </label>

                            <br>
                            <div class="text-center submit-wrapper">
                                <input type="submit" class="send-form" value="Enviar">
                            </div>

                        </div>
                    </div>
                </div>
            </form>

        </div><!-- ./row -->

    </div>
</section>
@stop