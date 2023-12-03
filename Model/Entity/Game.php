<?php

namespace Model\Entity;

class Game extends BaseEntity
{
    private $title;
    private $min_players;
    private $max_players;

    /**
     * Get the value of title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the value of title
     *
     * @return  self
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of min_players
     */
    public function getMin_players()
    {
        return $this->min_players;
    }

    /**
     * Set the value of $min_players
     *
     * @return  self
     */
    public function setMin_players($min_players)
    {
        $this->min_players = $min_players;

        return $this;
    }
    
    /**
     * Get the value of max_players
     */
    public function getMax_players()
    {
        return $this->max_players;
    }

    /**
     * Set the value of $max_players
     *
     * @return  self
     */
    public function setMax_players($max_players)
    {
        $this->max_players = $max_players;

        return $this;
    }

    // public static function addGame($title, $numberMinPlayers, $numberMaxPlayers)
    // {
    //     $db = new Database();
    //     $connection = $db->dbConnect();
    //     $repository = new GameRepository($connection);
    //     $repository->addGame($title, $numberMinPlayers, $numberMaxPlayers);
    //     header("Location: http://localhost/projetMvc/form_game.php");
    //     exit(); 

    // }

    // public static function findAllGame()
    // {
    //     $db = new Database();
    //     $connection = $db->dbConnect();
    //     $repository = new GameRepository($connection);
    //     return $repository->findAllGame();
    // }  
    
    // public static function deleteGameById($id)
    // {
    //     $db = new Database();
    //     $connection = $db->dbConnect();
    //     $repository = new GameRepository($connection);
    //     $repository->deleteGameById($id);
    //     header("Location: http://localhost/projetMvc/list_game.php");
    //     exit();

    // }
    // public static function findGameById($id)
    // {
    //     $db = new Database();
    //     $connection = $db->dbConnect();
    //     $repository = new GameRepository($connection);
    //     $repository->findAllGame($id);
    //     header("Location: http://localhost/projetMvc/list_game.php");

    // }

}