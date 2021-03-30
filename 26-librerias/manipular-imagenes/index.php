<?php

use PHPThumb\GD;

require '../vendor/autoload.php';

$fotoOriginal = 'wallpaper.jpg';
$guardarEn = 'fotoMod.jpg';

$thumb = new GD($fotoOriginal);

// Redimensionar
$thumb->resize(250, 250);

// Cortar
$thumb->crop(50, 50, 120, 120);

$thumb->show();
$thumb->save($guardarEn);