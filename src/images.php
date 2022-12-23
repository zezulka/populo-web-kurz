<?php
/* pomocné funkce pro načítání obrázků, pokud je chceš použít, nezapomeň na require */
function image_gallery($img_paths) {
    $html_content = '';
    foreach ($img_paths as $img) {
        $html_content .= '<li><img src="' . $img . '" /></li>';
    };
    return $html_content;
}

// podpůrná funkce, která načte jednotlivé názvy obrázků
function load_image_paths($dir) {
    $imgs = scandir($dir) or die("Could not load images from path $dir");
    $imgs = array_filter($imgs, function($image) use($dir) { return !is_dir($dir . "/" . $image); });
    shuffle($imgs);
    // append path to regular file names returned from scandir
    return preg_filter('/^/', $dir . "/", $imgs);
}
?>
