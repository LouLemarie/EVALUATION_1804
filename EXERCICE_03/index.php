<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ajout d'une voiture</title>
</head>
<body>

<form method="post" id="addCar">
    <input id="brand" type="text" name="brand" value="" required placeholder="Marque">
    <input id="model" type="text" name="model" value="" required placeholder="Modele">
    <input id="year" type="number" name="year" value=""  min="1910" max="2018" required placeholder="Année">
    <input id="color" type="text" name="color" value="" required placeholder="Couleur">
    <button type="submit">Ajouter une voiture</button>
</form>
<div class="msg"></div>

<script src="http://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
<script src="assets/js/script.js"></script>
</body>
</html>

