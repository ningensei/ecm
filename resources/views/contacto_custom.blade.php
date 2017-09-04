@extends('layout')

@section('content')
<section class="contact-center">
	<?=$breadcrumbs;?>
	
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 text-center">
                <h1>Contáctanos</h1>
                <p class="lead">
                    {!! $configuracion->texto_contacto !!}
                </p>
            </div>
        </div>
        
        <div class="row">
        <script type="text/javascript">var submitted=false;</script>
        <iframe name="hidden_iframe" id="hidden_iframe" style="display:none;"     
    onload='if(submitted) {window.location="{{URL::to('/')}}";}'></iframe>
          
            <form id="formContact" method="post" target="hidden_iframe" action="https://docs.google.com/forms/d/e/1FAIpQLSf9Q0T2VEKWni2Zg1Wo7qwshmg2bhs0JX1kaZnwgsxQhxNQ7Q/formResponse" onsubmit="submitted=true;" class="form-contact">
                <div class="col-md-4 col-md-offset-2">
                    <div class="clearfix">
                        <div>
                            <input required class="validate-required" type="text" placeholder="Nombre y apellido *" name="entry.1020658685">

                            <input required class="validate-required" type="text" name="entry.1129959952" placeholder="Celular *">

                            <input required class="validate-required" type="text" name="entry.919519487" placeholder="Localidad">
                            
                            <div class="select-wrapper">
                                <select name="entry.1123327660">
                                    <option selected disabled>Horarios disponibles</option>
                                    <option value="9 hs. a 13 hs.">9 hs. a 13 hs.</option>
                                    <option value="14 hs. a 16 hs.">14 hs. a 16 hs.</option>
                                    <option value="16 hs. a 21 hs.">16 hs. a 21 hs.</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="clearfix">
                        <div>
                            <input required class="validate-required" type="text" placeholder="Email *" name="entry.452812767">
                            
                            <input type="text" name="entry.5881413" placeholder="Teléfono">

                            <div class="select-wrapper">
                                <select name="entry.1344639690">
                                    <option selected disabled>Interesado en curso</option>
                                    <option value="Piano">Piano</option>
                                    <option value="Canto">Canto</option>
                                    <option value="Batería">Batería</option>
                                    <option value="Guitarra">Guitarra</option>
                                    <option value="Bajo">Bajo</option>
                                    <option value="Armónica">Armónica</option>
                                    <option value="Violín">Violín</option>
                                    <option value="Cello">Cello</option>
                                    <option value="Contrabajo">Contrabajo</option>
                                    <option value="Percusión">Percusión</option>
                                    <option value="Saxo">Saxo</option>
                                    <option value="Ukelele">Ukelele</option>
                                    <option value="Acordeón">Acordeón</option>
                                    <option value="Ensamble de Jazz">Ensamble de Jazz</option>
                                    <option value="Ensamble de Rock">Ensamble de Rock</option>
                                    <option value="Lenguaje musical">Lenguaje musical</option>
                                    <option value="Producción musical">Producción musical</option>
                                </select>
                            </div>

                            <div class="select-wrapper">
                                <select name="entry.707208057">
                                    <option selected disabled>Cómo nos conoció?</option>
                                    <option value="Google">Google</option>
                                    <option value="Facebook">Facebook</option>
                                    <option value="Recomandación">Recomandación</option>
                                    <option value="Vía Pública">Vía Pública</option>
                                    <option value="Revista planetario">Revista planetario</option>
                                    <option value="Mail">Mail</option>
                                    <option value="Youtube">Youtube</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-8 col-md-offset-2">
                    <div class="clearfix">
                        <div>
                            <textarea class="form-message" name="entry.232831983" placeholder="Comentario"></textarea>

                            <div>
                                <label>
                                    Deseo recibir por correo electrónico novedades del sitio web
                                </label>
                                <br>
                                <label><input type="radio" value="si" name="entry.1320594732">Sí</label>
                                <br>    
                                <label><input type="radio" value="no" name="entry.1320594732">No</label>
                            </div>

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