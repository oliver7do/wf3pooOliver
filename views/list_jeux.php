<?php
include_once "./inc/header.php";
include_once "./inc/nav.php";
require_once "../models/jeuModel.php";
$gameList = Game::findAllGame();
?>

<div class="container">
    <h1 class="m-5">Liste des jeux</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Min players</th>
                <th>Max players</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($gameList as $game) { ?>
                <tr>
                    <td><?= $game['id']; ?></td>
                    <td><?= $game['title']; ?></td>
                    <td><?= $game['min_players']; ?></td>
                    <td><?= $game['max_players']; ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>


<?php
include_once "./inc/footer.php";
?>