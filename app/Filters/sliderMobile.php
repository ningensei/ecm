<?php

namespace App\Filters;

use Intervention\Image\Image;
use Intervention\Image\Filters\FilterInterface;

class sliderMobile implements FilterInterface
{
    public function applyFilter(Image $image)
    {
        return $image->resize(540, null, function ($constraint) {
            $constraint->aspectRatio();
        })->encode('jpg', 50);
    }
}