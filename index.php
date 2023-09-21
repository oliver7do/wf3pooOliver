<?php
include_once "./views/inc/header.php";
include_once "./views/inc/nav.php";
require_once "./models/joueurModel.php";
require_once "./models/jeuModel.php";
require_once "./models/matchModel.php";
$playerList = Player::findAllPlayer();
$gameList = Game::findAllGame();
$contestList = Contest::findAllContest();
?>

<div class="container mb-5">
    <h2 class="m-5">Liste des joueurs</h2>
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
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

<div class="container mb-5">
    <h2 class="m-5">Liste des jeux</h2>
    <table class="table">
        <thead>
            <tr>
                <th>Id Movie</th>
                <th>Title</th>
                <th>Number main actors</th>
                <th>number_total_actors</th>
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

<div class="container mb-5">
    <h2 class="m-5">Liste des matchs</h2>
    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Game</th>
                <th>Date</th>
                <th>Winner</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($contestList as $contest) { ?>
                <tr>
                    <td><?= $contest['id']; ?></td>
                    <td><?= $contest['game_id']; ?></td>
                    <td><?= $contest['start_date']; ?></td>
                    <td><?= $contest['winner_id']; ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>



<?php
include_once "./views/inc/footer.php";
?>