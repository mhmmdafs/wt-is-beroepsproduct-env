<?php
session_start();
require_once 'components/header.php';
require_once 'components/header.php';
require_once 'components/footer.php';
require_once 'components/vluchtenuitdatabase';
require_once 'components/vluchten.php';

$vlucht = verkrijgVlucht($_GET['vluchtnr']);

require_once 'components/incheckstatus.php';
$userIngecheckt = isGebruikerIngecheckt($_GET['vluchtnr'], $_SESSION['user']['email']);
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
        <div class="flexbox-container">
            <h2>Detail pagina</h2>
        </div>


    </main>

    <php detailvluchten

        <?php maakFooter();?>
</body>
</html>