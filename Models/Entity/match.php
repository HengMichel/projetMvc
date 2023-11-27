<?php

namespace Models\Entity;

use Models\Database;
use Models\Repository\MatchRepository;

class Contest
{
    public static function addMatch($game_id,$start_date,$winner_id)
    {
        $db = new Database();
        $connection = $db->dbConnect();
        $repository = new MatchRepository($connection);
        $repository->addMatch($game_id,$start_date,$winner_id);
        header("Location: http://localhost/wf3_poo_final_Michel/list_match.php");
    }

    public static function findAllMatchs()
    {
        $db = new Database();
        $connection = $db->dbConnect();
        $repository = new MatchRepository($connection);
        return $repository->findAllMatchs();
    }

    public static function findAllMatchsSortedByStartDateDesc()
    {
        $db = new Database();
        $connection = $db->dbConnect();
        $repository = new MatchRepository($connection);
        return $repository->findAllMatchsSortedByStartDateDesc();
    }

    public static function findAllTables()
    {
        $db = new Database();
        $connection = $db->dbConnect();
        $repository = new MatchRepository($connection);
        return $repository->findAllTables();

    }  
    
    public static function deleteMatchById($id)
    {
        $db = new Database();
        $connection = $db->dbConnect();
        $repository = new MatchRepository($connection);
        $repository->deleteMatchById($id);
        header("Location: http://localhost/wf3_poo_final_Michel/list_match.php");
    }

    public static function findMatchById($id)
    {
        $db = new Database();
        $connection = $db->dbConnect();
        $repository = new MatchRepository($connection);
        return $repository->findMatchById($id);
    }  

}