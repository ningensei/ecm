
<div class="nav-container">
    <nav class="top-bar">
        <div class="container">
        
            <div class="row utility-menu">
                <div class="col-sm-12">
                    <div class="utility-inner clearfix">
                        <span class="alt-font"><i class="icon icon_pin"></i> {{$configuracion->direccion}}</span>
                        <span class="alt-font"><i class="icon icon_mail"></i> {{$configuracion->email}}</span>
                    
                        <div class="pull-right">
                            <ul class="social-icons text-right">
                                <!-- <li>
                                    <a href="javascript:void(0)">
                                        <i class="icon social_twitter"></i>
                                    </a>
                                </li> -->
                            
                                <li>
                                    <a href="https://www.facebook.com/ECM.musica">
                                        <i class="icon social_facebook"></i>
                                    </a>
                                </li>
                                
                                <li>
                                    <a href="https://www.instagram.com/explore/locations/289877604480424">
                                        <i class="icon social_instagram"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div><!--end of row-->
        
        
            <div class="row nav-menu">
                <div class="col-sm-3 col-md-2 columns">
                    <a href="{{ URL::to('/') }}">
                        <img class="logo logo-light" alt="Logo" src="{{ URL::asset('images/ecm.png') }}">
                        <img class="logo logo-dark" alt="Logo" src="{{ URL::asset('images/ecm_dark.png') }}">
                    </a>
                </div>
            
                <div class="col-sm-9 col-md-10 columns">
                    <ul class="menu">

                        <li class="has-dropdown"><a href="javascript:void(0)">LA ESCUELA</a>
                            <ul class="subnav">
                                <li><a href="{{ URL::to('propuesta') }}">Propuesta</a></li>
                                <li><a href="{{ URL::to('profesores') }}">Profesores</a></li>
                                
                            </ul>
                        </li>

                        <li class="has-dropdown"><a href="javascript:void(0)">CURSOS</a>
                            <ul class="subnav">
                                @foreach($cursos as $curso)
                                    <li><a href="{{ URL::to('cursos/ver/'.$curso->id).'-'.makeSlugs($curso->titulo) }}">{{$curso->titulo}}</a></li>
                                @endforeach
                                
                            </ul>
                        </li>

                        <li class="has-dropdown"><a href="javascript:void(0)">CLASES</a>
                            <div class="subnav subnav-fullwidth">

                                @foreach ($clases->chunk(5) as $chunk)
                                    <div class="col-md-3">
                                        <ul class="subnav">
                                        @foreach ($chunk as $clase)
                                            <li><a href="{{ URL::to('clases/ver/'.$clase->id).'-'.makeSlugs($clase->titulo) }}">{{$clase->titulo}}</a></li>
                                        @endforeach
                                        </ul>
                                    </div>
                                @endforeach
                                
                            </div>
                        </li>

                        <li><a href="{{ URL::to('servicios') }}">SERVICIOS</a></li>

                        <li class="has-dropdown"><a href="javascript:void(0)">GALERÍA</a>
                            <ul class="subnav">
                                <li><a href="{{ URL::to('fotos') }}">FOTOS</a></li>
                                <li><a href="{{ URL::to('videos') }}">VIDEOS</a></li>
                            </ul>
                        </li>

                        <li><a href="{{ URL::to('contacto') }}">CONTACTO</a></li>
                        
                    </ul>
                </div>
            </div><!--end of row-->
            
            <div class="mobile-toggle">
                <i class="icon icon_menu"></i>
            </div>
            
        </div><!--end of container-->
    </nav>
</div>
