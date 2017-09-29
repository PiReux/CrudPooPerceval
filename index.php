<?php
require 'Database.php';

use wild\Database;

$db = new Database('checkpoint-1-26/09/2017');

$datas = $db->query('SELECT * FROM citation ');
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Cestpasfaux.com</title>
    <link rel="icon" type="image/png"
          href="https://wildcodeschool.fr/wp-content/uploads/2017/01/logo_orange_pastille.png">
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/stylesheet.css">
</head>
<body>

<?php include 'navbar.php'; ?>

<div class="container">

    <div class="kaamelott-banner jumbotron kaamelott-underline">
        <h1>C'EST PAS FAUX !</h1>
        <p>Les meilleurs citations de la serie-TV Kaamelott</p>
    </div>

    <section class="row citationList">
        <?php foreach ($datas as $data): ?>
            <div class="col-xs-4 uniqueCitation">
                <div class="contenu">
                    <img class="img-responsive" src="<?php echo $data->image; ?>">
                    <p class="text-justify"><?php echo htmlentities($data->content); ?></p>
                    <p class="text-right"><?php echo htmlentities($data->author); ?>
                        , <?php echo htmlentities($data->chapter); ?></p>
                    <p class="text-right">

                        <a href="" class="btn btn-kaamelott" role="button">Voir Plus</a>
                        <a href="" class="btn btn-kaamelott" role="button">Supprimer</a>
                    </p>

                </div>
            </div>
        <?php endforeach; ?>

    </section>
</div>
<footer>
    <ul>
        <li>
            <i class="fa fa-facebook" aria-hidden="true"></i>
        </li>
        <li>
            <i class="fa fa-twitter" aria-hidden="true"></i>
        </li>
        <li>
            <i class="fa fa-github" aria-hidden="true"></i>
        </li>
    </ul>
</footer>

<script
        src="https://code.jquery.com/jquery-3.2.1.min.js"
        integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
        crossorigin="anonymous">
</script>
<script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>

</body>
</html>
