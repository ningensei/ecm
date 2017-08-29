<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Videos;

class VideosController extends FrontController
{
    public function index()
    {
        $this->data['current'] = 'videos';
        $videos = Videos::paginate(2);
        
        foreach ($videos as $video) {
            $video->url = youtubeEmbedUrl($video->url);
        }

        $this->data['videos'] = $videos;

        $this->data['breadcrumbs'] = breadcrumbs(array(
            'Home' => url('/'),
            'Videos' => false
        ));

    	return view('videos', $this->data);
    }
}
