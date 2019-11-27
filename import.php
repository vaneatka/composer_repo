<?php
require_once 'vendor/autoload.php';
use Intervention\Image\ImageManagerStatic as Image;
$faker = Faker\Factory::create();
$imageDir= __DIR__.'/composer/images/';
    for ($i = 0; $i< 10; $i++) {
        $url = $faker->imageUrl();
        try {
            $image = Image::make($url)->save("{$imageDir}file-$i.png");
        } catch (Exception $e) {
            $image = Image::make($url)->save("{$imageDir}file-$i.png");
        }
        header('location: index.php');
    }