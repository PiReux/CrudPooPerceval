<?php
?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>add</title>
    <link rel="icon" type="image/png"
          href="https://wildcodeschool.fr/wp-content/uploads/2017/01/logo_orange_pastille.png">
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/stylesheet.css">
</head>
<body>
<?php include 'navbar.php'; ?>
<div class="container">
    <form method="post" role="form">
        <legend>Rajouter une citation</legend>
        <div class="form-group">
            <label for="author">Auteur de la citation</label>
            <input type="text" class="form-control" id="author" name="author" placeholder="ex: Perceval">
        </div>
        <div class="form-group">
            <label for="citation">Citation</label>
            <input type="text" class="form-control" id="citation" name="citation" placeholder="ex: C'est pas faux">
        </div>
        <div class="form-group">
            <label for="chapter">Chapitre de la citation</label>
            <input type="text" class="form-control" id="chapter" name="chapter" placeholder="ex: Chapitre VI">
        </div>
        <div class="form-group">
            <label for="date">Date</label>
            <input type="text" class="form-control" id="date" name="date" placeholder="ex: Perceval"
                   value="<?php echo date('Y-m-d'); ?>">
        </div>
        <div class="form-group">
            <label for="screenShot">Ajoute l'url de l'image de la citation!</label>
            <input type="text" class="form-control" id="screenShot" name="screenShot"
                   placeholder="ex: http://kaaverne-de-perceval.fr/Perceval.jpg">
        </div>
        <button type="submit" class="btn btn-success">Soumettre la citation</button>
    </form>
</div>
</body>
</html>
