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
        
        <div class="row" style="position: relative;">
        
             <iframe id="JotFormIFrame-72457618097669" onload="window.parent.scrollTo(0,0)" allowtransparency="true" src="https://form.jotformz.com/72457618097669" frameborder="0" style="width: 1px; min-width: 100%; height:539px; border:none;" scrolling="no"> </iframe> <script type="text/javascript"> var ifr = document.getElementById("JotFormIFrame-72457618097669"); if(window.location.href && window.location.href.indexOf("?") > -1) { var get = window.location.href.substr(window.location.href.indexOf("?") + 1); if(ifr && get.length > 0) { var src = ifr.src; src = src.indexOf("?") > -1 ? src + "&" + get : src + "?" + get; ifr.src = src; } } window.handleIFrameMessage = function(e) { var args = e.data.split(":"); if (args.length > 2) { iframe = document.getElementById("JotFormIFrame-" + args[2]); } else { iframe = document.getElementById("JotFormIFrame"); } if (!iframe) return; switch (args[0]) { case "scrollIntoView": iframe.scrollIntoView(); break; case "setHeight": iframe.style.height = args[1] + "px"; break; case "collapseErrorPage": if (iframe.clientHeight > window.innerHeight) { iframe.style.height = window.innerHeight + "px"; } break; case "reloadPage": window.location.reload(); break; } var isJotForm = (e.origin.indexOf("jotform") > -1) ? true : false; if(isJotForm && "contentWindow" in iframe && "postMessage" in iframe.contentWindow) { var urls = {"docurl":encodeURIComponent(document.URL),"referrer":encodeURIComponent(document.referrer)}; iframe.contentWindow.postMessage(JSON.stringify({"type":"urls","value":urls}), "*"); } }; if (window.addEventListener) { window.addEventListener("message", handleIFrameMessage, false); } else if (window.attachEvent) { window.attachEvent("onmessage", handleIFrameMessage);} </script>

             <!-- <div class="coverform" style="
                position: absolute;
                bottom: 0;
                width: 100%;
                height: 64px;
                background: #f4f4f4;
            "></div> -->

        </div><!-- ./row -->

    </div>
</section>
@stop