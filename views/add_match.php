<?php
include_once "./inc/header.php";
include_once "./inc/nav.php";

require_once "../models/jeuModel.php";
$gamelist = Game::findAllGame();
?>

<div class="container">
    <h1 class="m-5">Ajouter un match</h1>
    <form action="./traitement/action.php" method="post">

        <select name="" id="">
            <?php foreach ($gamelist as $game) { ?>
                <option value=""><?= $game['title'] ?></option>
            <?php } ?>
        </select>

        <div class="form-group  mb-3">
            <label class="m-2">Date de diffusion:</label>
            <input type="date" class="form-control text-uppercase" name="start_date">
        </div>

        <button type="submit" id="bouton" class="btn btn-primary mt-5 mb-5" name="add_match" value="add_match">Ajouter un match</button>
    </form>
</div>

<?php
include_once "./inc/footer.php";
?>