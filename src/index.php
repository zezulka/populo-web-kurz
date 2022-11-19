<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="simple.css">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lobster">
    <title>TEXPRA, s.r.o.</title>
</head>
<body>
    <pageContent>
        <div class="content-container">
            <div class="content-wrap">
                <div class="banner-wrap">
                    <ul class="banner">
                        <?php require("banner.php") ?>
                    </ul>
                </div>
                <nav class="navbar">
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
                <iframe src="about.html" width="800px" height="600px" id="content" name="content" frameBorder="0"></iframe>
            </div>
            <?php require("copyright.php") ?>
        </div>
    </pageContent>    
</body>
</html>
