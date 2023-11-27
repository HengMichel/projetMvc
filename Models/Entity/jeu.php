<?php

namespace Models\Entity;

use Models\Repository\JeuRepository;
use Models\Database;

class Jeu 
{
    public static function addJeu($title, $numberMinPlayers, $numberMaxPlayers)
    {
        $db = new Database();
        $connection = $db->dbConnect();
        $repository = new JeuRepository($connection);
        $repository->addJeu($title, $numberMinPlayers, $numberMaxPlayers);
        header("Location: http://localhost/wf3_poo_final_Michel/list_jeu.php");
    }

    public static function findAllJeu()
    {
        $db = new Database();
        $connection = $db->dbConnect();
        $repository = new JeuRepository($connection);
        return $repository->findAllJeu();
    }  
    
    public static function deleteJeuById($id)
    {
        $db = new Database();
        $connection = $db->dbConnect();
        $repository = new JeuRepository($connection);
        $repository->deleteJeuById($id);
        header("Location: http://localhost/wf3_poo_final_Michel/list_jeu.php");
    }

}