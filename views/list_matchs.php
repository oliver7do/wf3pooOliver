<?php
include_once "./inc/header.php";
include_once "./inc/nav.php";
require_once "../models/matchModel.php";
$contestList = Contest::findAllContest();
?>

<div class="container">
    <h1 class="m-5">Liste des Matchs</h1>
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
include_once "./inc/footer.php";
?>