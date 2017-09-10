@extends('layout')

@section('content')
<section>
    <?=$breadcrumbs;?>
    <div class="container">
        
        <div class="row">
            <div class="image-gallery lightbox-gallery-mrv">
                
                @foreach($fotos as $foto)
                    @if(Storage::disk('public')->exists($foto->imagen))
                    <div class="{{$foto->ratio == '2-1'? 'col-sm-8':'col-sm-4'}} veo">
                        <div class="image-holder" data-scroll-reveal="enter bottom and move 30px">
                            <a href="{{ asset('storage/'.$foto->imagen) }}" data-lightbox="true" data-title="{{$foto->titulo}}">
                                <div class="background-image-holder">
                                    @if($foto->ratio == '2-1')
                                    <img class="background-image lightbox-image" alt="{{$foto->titulo}}" src="{{ url('imagecache/rectangularimage/'.basename($foto->imagen)) }}">
                                    @else
                                    <img class="background-image lightbox-image" alt="{{$foto->titulo}}" src="{{ url('imagecache/squareimage/'.basename($foto->imagen)) }}">
                                    @endif
                                </div>
                            </a>
                        </div>
                    </div>
                    @endif
                @endforeach
            </div>
        </div>
        <div class="text-center">{{ $fotos->links() }}</div>
        
    
        
    </div>
</section>
@stop