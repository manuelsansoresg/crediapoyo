<?php

/*function getImages($album_id){
    return \App\Album::find($album_id)->images;
}*/

function thumbnail($nombreimg,  $thumb,  $xmax, $ymax){

    $ext = explode(".", $nombreimg);
    $ext = $ext[count($ext) - 1];
    if ($ext == "jpg" || $ext == "jpeg")
        $imagen = imagecreatefromjpeg($nombreimg);
    elseif ($ext == "png")
        $imagen = imagecreatefrompng($nombreimg);
    elseif ($ext == "gif")
        $imagen = imagecreatefromgif($nombreimg);


    $x = imagesx($imagen);
    $y = imagesy($imagen);

    if ($x <= $xmax && $y <= $ymax) {
        return $imagen;
    }

    if ($x >= $y) {
        $nuevax = $xmax;
        $nuevay = $nuevax * $y / $x;
    } else {
        $nuevay = $ymax;
        $nuevax = $x / $y * $nuevay;
    }

    $img2 = imagecreatetruecolor($nuevax, $nuevay);
    imagecopyresized($img2, $imagen, 0, 0, 0, 0, floor($nuevax), floor($nuevay), $x, $y);
    imagejpeg($img2, $thumb);

}
