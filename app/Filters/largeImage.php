<?php

namespace App\Filters;

use Intervention\Image\Image;
use Intervention\Image\Filters\FilterInterface;

class largeImage implements FilterInterface
{
    public function applyFilter(Image $image)
    {
        return $image->resize(1000, null, function ($constraint) {
            $constraint->aspectRatio();
        })->encode('jpg', 80);
    }
}