<?php
include_once "./inc/header.php";
include_once "./inc/nav.php";
require_once "../models/jeuModel.php";
?>

<div class="container">
    <h1 class="m-5">Ajouter un jeu</h1>
    <form action="./traitement/action.php" method="post">

        <div class="form-group  mb-3">
            <label class="m-2">Titre du jeu :</label>
            <input type="text" class="form-control text-uppercase" name="title" value="<?= !empty($game) ? $game["title"] : "" ?>">
        </div>

        <div class="form-group  mb-3">
            <label class="m-2">Joueurs minimum :</label>
            <input type="number" class="form-control text-uppercase" name="min_players" value="<?= !empty($game) ? $game["min_players"] : "" ?>">
        </div>

        <div class="form-group  mb-3">
            <label class="m-2">Joueurs maximum :</label>
            <input type="number" class="form-control text-uppercase" name="max_players" value="<?= !empty($game) ? $game["max_players"] : "" ?>">
        </div>
        <button type="submit" id="bouton" class="btn btn-primary mt-5 mb-5" name="add_game">Ajouter Jeu</button>
    </form>
</div>
<?php
include_once "./inc/footer.php";
?>