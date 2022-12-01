<!-- chci načíst obrázky ze složky banner - PHP
     potom je chci načíst do neseřazeného seznamu (element <ul> = unordered list) - PHP + HTML
        seznam vypadá např. takto:
        <ul>
            <li>banány</li>
            <li>mléko</li>
            <li>jablka</li>
            ...
        </ul>
     všechny obrázky chci postupně zobrazovat po třech v galerii - CSS
-->

<!-- i když máme kód oddělený v souboru, je třeba i tak používat deklaraci <?php ?> -->
<?php
// odkaz na složku, odkud čteme obrázky
$dir = 'banner/';

function image_gallery($img_paths, $dir) {
    $html_content = '';
    foreach ($img_paths as $img) {
        // operátor .= přidává obsah na konec řetězce, v našem případě připojíme další obrázek ze seznamu
        // \n = znak nového řádku - není třeba, lze vynechat
        // ukázka jednoho řetězce: <li><img src="banner/sample.jpg" /></li>\n
        $html_content .= '<li><img src="' . $dir . $img . '" /></li>' . "\n";
    };
    // vracíme řetězec, který je naplněný položkami listu (=<li>), v nichž jsou jednotlivé obrázky reklam
    return $html_content;
}

// podpůrná funkce, která načte jednotlivé názvy obrázků
function load_image_paths($dir) {
    $imgs = scandir($dir) or die("Could not load images from path $dir");
    $imgs = array_filter($imgs, function($image) use($dir) { return !is_dir($dir . $image); });
    shuffle($imgs);
    return $imgs;
}

echo image_gallery(load_image_paths($dir), $dir);
?>
