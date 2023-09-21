<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/wf3poooliver/models/database.php";


class Contest
{
    public static function addMatch($start_date)
    {
        $db = Database::dbConnect();
        // preparer la requete 
        $request = $db->prepare("INSERT INTO contest (start_date) VALUES (?)");
        // executer la requete
        try {
            $request->execute(array($start_date));
            header("http://localhost/wf3poooliver/traitement/list_matchs.php");
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }
    public static function findAllContest()
    {

        // on appel la fonction dbConnect qui est dans la class Database
        $db = Database::dbConnect();

        // preparation de la requête
        $request = $db->prepare("SELECT * FROM `contest`");

        // exécuter la requête
        $contestList = null;
        try {
            $request->execute();

            // récupère le résultat dans un tableau
            $contestlist = $request->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        return $contestlist;
    }
}

