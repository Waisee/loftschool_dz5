<?php

require 'vendor/autoload.php';

use Intervention\Image\ImageManager;

$manager = new ImageManager();

$image = $manager->make('img/gorizont.jpg');
$image->rotate(45, '#ffffff');
$image->resize(200, null, function ($image){
    $image->aspectRatio();
});
$image->text('Horizon', 15, 15, function ($font){
    $font->size(24);
});
$image->save('img/new.jpg');
//$image->response();