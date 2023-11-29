<?php

namespace Models\Entity;

use Models\Repository\PlayerRepository;
use Models\Database;


class Player
{

    private $email;
    private $nickname;

    /**
     * Get the value of email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of nickname
     */
    public function getNickname()
    {
        return $this->nickname;
    }

    /**
     * Set the value of nickname
     *
     * @return  self
     */
    public function setNickname($nickname)
    {
        $this->nickname = $nickname;

        return $this;
    }


    public static function addPlayer($email, $name)
    {
        $db = new Database();
        $connection = $db->dbConnect();
        $repository = new PlayerRepository($connection);
        $repository->addPlayer($email, $name);
        header("Location: http://localhost/projetMvc/add_player.php");
        exit();
    }

    public static function findAllPlayers()
    {
        $db = new Database();
        $connection = $db->dbConnect();
        $repository = new PlayerRepository($connection);
        return $repository->findAllPlayers();
    }

    public static function deletePlayerById($id)
    {
        
        $db = new Database();
        $connection = $db->dbConnect();
        $repository = new PlayerRepository($connection);
        $repository->deletePlayerById($id);
        header("Location: http://localhost/projetMvc/list_player.php");
        exit(); 

    }

}


