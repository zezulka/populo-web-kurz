<?php
// odkaz na složku, odkud čteme obrázky
$dir = 'banner/';

function image_gallery($img_paths, $dir) {
    $html_content = '';
    foreach ($img_paths as $img) {
        $html_content .= '<li><img src="' . $dir . $img . '" /></li>' . "\n";
    };
    return $html_content;
}

function load_image_paths($dir) {
    $imgs = scandir($dir) or die("Could not load images from path $dir");
    $imgs = array_filter($imgs, function($image) use($dir) { return !is_dir($dir . $image); });
    shuffle($imgs);
    return $imgs;
}

echo image_gallery(load_image_paths($dir), $dir);
?>
