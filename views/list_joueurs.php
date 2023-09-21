<?php
include_once "./inc/header.php";
include_once "./inc/nav.php";
require_once "../models/joueurModel.php";
$playerList = Player::findAllPlayer();
?>

<div class="container">
    <h1 class="m-5">Liste des joueurs</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Email</th>
                <th>Nickname</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($playerList as $player) { ?>
                <tr>
                    <td><?= $player['email']; ?></td>
                    <td><?= $player['nickname']; ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>


<?php
include_once "./inc/footer.php";
?>