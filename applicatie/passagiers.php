<?php
session_start();
require_once 'components/header.php';
require_once 'components/footer.php';
?>

<!DOCTYPE html>
<html lang="nl">

<head>
    <!-- Link/resource pagina's -->
    <link rel="stylesheet" href="css/design.css">
    <link rel="stylesheet" href="css/normalize.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Geldre Airport</title>
</head>


<body>
    <?php
    maakHeader();
    ?>
    <main>
        <div id="hero-image-home">
            <div class="hero-text">
                <h1>geldre airport</h1>
            </div>
        </div>
    </main>

    <div>
        <a class="button" href="vluchten.php">BOEK NU JOU VLUCHT</a>
    </div>

    <ul>
        <li>Onze populairste bestemmingen</li>
        <li><a href="detail.php"><img src="images/curacao.jpg" alt=""><span>Curaçao</span></a></li>
        <li><a href="detail.php"><img src="images/kaapverdie.jpg" alt=""><span>Kaapverdië</span></a></li>
        <li><a href="detail.php"><img src="images/egypte.jpg" alt=""><span>Egypte</span></a></li>
        <li><a href="detail.php"><img src="images/griekenland.jpg" alt=""><span>Griekenland</span></a></li>
        <li><a href="detail.php"><img src="images/bonaire.jpg" alt=""><span>Bonaire</span></a></li>
    </ul>

    <?php maakFooter();?>
</body>

</html>