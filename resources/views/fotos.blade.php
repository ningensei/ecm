@extends('layout')

@section('content')
<section>
    <?=$breadcrumbs;?>
    <div class="container">
        
        <div class="row">
            <div class="image-gallery lightbox-gallery-mrv">
            
                <div class="col-sm-8 veo">
                    <div class="image-holder" data-scroll-reveal="enter bottom and move 30px">
                        <a href="{{ asset('images/fotos/1.jpg') }}" data-lightbox="true" data-title="Glamour Model">
                            <div class="background-image-holder">
                                <img class="background-image lightbox-image" alt="Glamour Model" src="{{ asset('images/fotos/1.jpg') }}">
                            </div>
                        </a>
                    </div>
                </div>
                
                <div class="col-sm-4 veo">
                    <div class="image-holder" data-scroll-reveal="enter bottom and move 30px">
                        <a href="{{ asset('images/fotos/2.jpg') }}" data-lightbox="true" data-title="Another Lightbox Image">
                            <div class="background-image-holder">
                                <img class="background-image lightbox-image" alt="Another Lightbox Image" src="{{ asset('images/fotos/2.jpg') }}">
                            </div>
                        </a>
                    </div>
                </div>
                
                <div class="col-sm-4 veo">
                    <div class="image-holder" data-scroll-reveal="enter bottom and move 30px">
                        <a href="{{ asset('images/fotos/3.jpg') }}" data-lightbox="true" data-title="Architect">
                            <div class="background-image-holder">
                                <img class="background-image lightbox-image" alt="Architect" src="{{ asset('images/fotos/3.jpg') }}">
                            </div>
                        </a>
                    </div>
                </div>
                
                <div class="col-sm-4 veo">
                    <div class="image-holder" data-scroll-reveal="enter bottom and move 30px">
                        <a href="{{ asset('images/fotos/4.jpg') }}" data-lightbox="true" data-title="Dusk Rider">
                            <div class="background-image-holder">
                                <img class="background-image lightbox-image" alt="Dusk Rider" src="{{ asset('images/fotos/4.jpg') }}">
                            </div>
                        </a>
                    </div>
                </div>
                
                <div class="col-sm-4 veo" data-scroll-reveal="enter bottom and move 30px">
                    <div class="image-holder">
                        <a href="{{ asset('images/fotos/5.jpg') }}" data-lightbox="true" data-title="Designer">
                            <div class="background-image-holder">
                                <img class="background-image lightbox-image" alt="Designer" src="{{ asset('images/fotos/5.jpg') }}">
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            
        </div>
    
        
    </div>
</section>
@stop