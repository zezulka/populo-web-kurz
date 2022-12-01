<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- tímto elementem načítáme kaskádové styly, které používáme v projektu -->
    <link rel="stylesheet" href="simple.css">
    <!-- tímto elementem načítáme externí písmo -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lobster">
    <title>TEXPRA, s.r.o.</title>
    <style>
        /* i takto lze vkládat kaskádové styly */
    </style>
</head>
<body>
    <pageContent>
        <div class="root-container">
            <div class="content-wrap">
                <div class="banner-wrap">
                    <ul class="banner">
                        <!-- ještě existuje možnost importovat soubory přes include -->
                        <?php require("banner.php"); ?>
                    </ul>
                </div>
                <nav class="navbar">
                    <!-- toto je hypertextový odkaz, kterým se přesměruji na google (v nové záložce prohlížeče, výchozí chování je, že se přesměřováváme přímo na stránce) -->
                    <a href="http://google.com" target="_blank">Google</a>
                    <!-- zde se nepřesměrováváme na jiný dokument, ale "říkáme" iframu, aby načetl "welcome.html" -->
                    <a href="welcome.html" target="content">Domů</a>
                    <div class="dropdown">
                        <button class="dropbtn">Obchod</button>
                        <div class="dropdown-content">
                            <a href="goods.html" target="content">Zboží/služby</a>
                            <a href="rules.html" target="content">Nákupní podmínky</a>
                        </div>
                    </div>
                    <a href="#">Kontakt</a>
                </nav>
                <!--
                    <img /> = toto je zkrácený zápis HTML elementu, který nemá žádný vnitřní text (jako například <a>Jméno odkazu</a> )
                    atributem 'alt' nastavujeme popis obrázku v případě, že ho nelze načíst
                -->
                <img src="ad/black_friday_ad.png" width="250px" height="600px" alt="Reklamní baner."></img>
                <!-- frame má rozměry 800x600 px, jeho identifikátor je "content" a výchozí stránka, která se má zobrazit, je soubor "about.html" -->
                <iframe src="about.html" width="800px" height="600px" id="content" name="content" frameBorder="0"></iframe>
            </div>
            <!-- TODO ukaž rozdíl mezi paddingem a marginem -->
            <!-- souřadnice: top right bottom left -->
            <!--<p class="demo" style="border: 1px solid red; padding: 30px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat voluptates, minus delectus, mollitia non recusandae aspernatur quibusdam culpa quia omnis, repellat vero eum tenetur iste itaque! Eligendi perferendis repudiandae soluta?</p>-->
            <?php require("copyright.php"); ?>

            <!-- pokud se uvnitř řetězce nachází ty samé znaky, jako kterými začíná, tak je znaky třeba tzv. escapovat
                <?php echo "<img src=\"banner/sample.jpg\">"; ?>
                varianta, kdy nemáme stejné uvozovky na začátku jako uvnitř -> není třeba escapovat
                <?php echo '<img src="banner/sample.jpg">'; ?>
            -->
        </div>
    </pageContent>    
</body>
</html>
