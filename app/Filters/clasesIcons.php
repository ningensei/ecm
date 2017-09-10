<?php

namespace App\Filters;

use Intervention\Image\Image;
use Intervention\Image\Filters\FilterInterface;

class clasesIcons implements FilterInterface
{
    public function applyFilter(Image $image)
    {
        return $image->resize(120, null, function ($constraint) {
            $constraint->aspectRatio();
        })->encode('png', 100);
    }
}