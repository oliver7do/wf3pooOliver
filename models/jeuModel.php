<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/wf3poooliver/models/database.php";

class Game
{
    public static function addGame($title, $minplayers, $maxplayers)
    {
        $db = Database::dbConnect();
        // preparer la requete
        $request = $db->prepare("INSERT INTO game (title, min_players, max_players) VALUES (?, ?, ?)");
        // executer la requete
        try {
            $request->execute(array($title, $minplayers, $maxplayers));
            header("http://localhost/wf3poooliver/traitement/list_jeux.php");
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }

    public static function findAllGame()
    {

        // on appel la fonction dbConnect qui est dans la class Database
        $db = Database::dbConnect();

        // preparation de la requête
        $request = $db->prepare("SELECT * FROM game");

        // exécuter la requête
        $gameList = null;
        try {
            $request->execute();

            // récupère le résultat dans un tableau
            $gameList = $request->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        return $gameList;
    }
}
