<?php
require_once $_SERVER["DOCUMENT_ROOT"] ."/wf3poooliver/models/database.php";


class Player{
    public static function addPlayer($email, $nickname){
        $db = Database::dbConnect();
        // preparer la requete 
        $request = $db->prepare("INSERT INTO player (email, nickname) VALUES (?, ?)");
        // executer la requete
        try {
            $request->execute(array($email, $nickname));
            header("http://localhost/wf3poooliver/traitement/list_joueurs.php");
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }
    public static function findAllPlayer()
    {

        // on appel la fonction dbConnect qui est dans la class Database
        $db = Database::dbConnect();

        // preparation de la requête
        $request = $db->prepare("SELECT * FROM `player`");

        // exécuter la requête
        $playerList = null;
        try {
            $request->execute();

            // récupère le résultat dans un tableau
            $playerList = $request->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        return $playerList;
    }
}