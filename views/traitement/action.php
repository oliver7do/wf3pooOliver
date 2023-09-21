<?php
require_once "../../models/joueurModel.php";
require_once "../../models/jeuModel.php";
require_once "../../models/matchModel.php";



if(isset($_POST['add_player'])){
    $email = htmlspecialchars($_POST['email']);
    $nickname = htmlspecialchars($_POST['nickname']);

    Player::addPlayer($email, $nickname);
}

// pour l'ajout d'un jeu
if (isset($_POST['add_game'])) {
    $title = htmlspecialchars($_POST['title']);
    $minplayers = htmlspecialchars($_POST['min_players']);
    $maxplayers = htmlspecialchars($_POST['max_players']);

    Game::addGame($title, $minplayers, $maxplayers);
}

// pour l'ajout d'match
if (isset($_POST['add_match'])) {
    $startdate = htmlspecialchars($_POST['start_date']);

    Contest::addMatch($startdate);
}
