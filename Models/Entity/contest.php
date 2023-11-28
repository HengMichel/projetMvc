<?php

namespace Models\Entity;

use Models\Database;
use Models\Repository\ContestRepository;

class Contest
{
    private $game_id;
    private $start_date;
    private $winner_id;

    /**
     * Get the value of game_id
     */
    public function getGame_id()
    {
        return $this->game_id;
    }

    /**
     * Set the value of game_id
     *
     * @return  self
     */
    public function setGame_id($game_id)
    {
        $this->game_id = $game_id;

        return $this;
    }

    /**
     * Get the value of start_date
     */
    public function getStart_date()
    {
        return $this->start_date;
    }

    /**
     * Set the value of start_date
     *
     * @return  self
     */
    public function setStart_date($start_date)
    {
        $this->start_date = $start_date;

        return $this;
    }

    /**
     * Get the value of winner_id
     */
    public function getWinner_id()
    {
        return $this->winner_id;
    }

    /**
     * Set the value of winner_id
     *
     * @return  self
     */
    public function setWinner_id($winner_id)
    {
        $this->winner_id = $winner_id;

        return $this;
    }


    public static function addContest($game_id,$start_date,$winner_id)
    {
        $db = new Database();
        $connection = $db->dbConnect();
        $repository = new ContestRepository($connection);
        $repository->addContest($game_id,$start_date,$winner_id);
        header("Location: http://localhost/projetMvc/list_match.php");
        exit();
    }

    public static function findAllContests()
    {
        $db = new Database();
        $connection = $db->dbConnect();
        $repository = new ContestRepository($connection);
        return $repository->findAllContests();
    }

    public static function findAllContestsSortedByStartDateDesc()
    {
        $db = new Database();
        $connection = $db->dbConnect();
        $repository = new ContestRepository($connection);
        return $repository->findAllContestsSortedByStartDateDesc();
    }

    public static function findAllTables()
    {
        $db = new Database();
        $connection = $db->dbConnect();
        $repository = new ContestRepository($connection);
        return $repository->findAllTables();

    }  
    
    public static function deleteContestById($id)
    {
        $db = new Database();
        $connection = $db->dbConnect();
        $repository = new ContestRepository($connection);
        $repository->deleteContestById($id);
        header("Location: http://localhost/projetMvc/list_contest.php");
        exit();
    }

    public static function findContestById($id)
    {
        $db = new Database();
        $connection = $db->dbConnect();
        $repository = new ContestRepository($connection);
        return $repository->findContestById($id);
    }  

}