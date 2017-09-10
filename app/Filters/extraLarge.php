<?php

namespace App\Filters;

use Intervention\Image\Image;
use Intervention\Image\Filters\FilterInterface;

class extraLarge implements FilterInterface
{
    public function applyFilter(Image $image)
    {
        return $image->resize(1480, null, function ($constraint) {
            $constraint->aspectRatio();
        })->encode('jpg', 50);
    }
}