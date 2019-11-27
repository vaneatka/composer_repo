<?php
echo '<a href="import.php"> Add images</a>';
require_once 'vendor/autoload.php';
use Intervention\Image\ImageManagerStatic as Image;
use ColorThief\ColorThief;
$imageDir= __DIR__.'/composer/images/';
foreach (scandir($imageDir) as $item) {
    if (explode('.',$item)[1]){
        $dominant = ColorThief::getColor("{$imageDir}file-8.png");
        $height = Image::make($imageDir.$item)->getHeight();
        $width = Image::make($imageDir.$item)->getWidth();
        echo "
         <hr>
         $item \n
         $height \n
         $width \n
         The dominant colour is R:$dominant[0], G:$dominant[1], B:$dominant[2] \n" ;
    }
}

