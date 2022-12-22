<html>
    <head>
        <meta charset="utf-8"/>
    </head>
    <body>
        <?php
            require("images.php");
            // pokud chceme definovat vlastní funkce, je třeba vždy načíst soubor, kde jsou definované!
            image_gallery(load_image_paths("birds/"), "birds/"); 
         ?>
    </body>
</html>