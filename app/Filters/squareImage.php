<?php

namespace App\Filters;

use Intervention\Image\Image;
use Intervention\Image\Filters\FilterInterface;

class squareImage implements FilterInterface
{
    public function applyFilter(Image $image)
    {
        return $image->fit(480, 480)->encode('jpg', 80);
    }
}