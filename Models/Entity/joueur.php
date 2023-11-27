<?php

namespace Models\Entity;

use Models\Repository\JoueurRepository;
use Models\Database;


class Joueur
{
    public static function addJoueur($email, $name)
    {
        $db = new Database();
        $connection = $db->dbConnect();
        $repository = new JoueurRepository($connection);
        $repository->addJoueur($email, $name);
        header("Location: http://localhost/wf3_poo_final_Michel/list_joueur.php");
    }

    public static function findAllJoueurs()
    {
        $db = new Database();
        $connection = $db->dbConnect();
        $repository = new JoueurRepository($connection);
        return $repository->findAllJoueurs();
    }

    public static function deleteJoueurById($id)
    {
        
        $db = new Database();
        $connection = $db->dbConnect();
        $repository = new JoueurRepository($connection);
        $repository->deleteJoueurById($id);
        header("Location: http://localhost/wf3_poo_final_Michel/list_joueur.php");
    }

}


