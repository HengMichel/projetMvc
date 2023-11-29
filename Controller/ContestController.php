<?php

namespace Controller;

use Models\Entity\Contest;
use Controller\BaseController;

class ContestController extends BaseController{

    public function list(){

        $this->render("list_contest.php");
    }
    
    public function addPlayerBy($game_id,$start_date,$winner_id)
    {
        Contest::addContest($game_id,$start_date,$winner_id);

        $this->render("add_contest.php");
    }

    public function findAllContests(){

        $this->render("list_contest.php");
    }

    public function findAllContestsSortedByStartDateDesc(){

        $this->render("list_contest.php");
    }

    public function findAllTables(){

        $this->render("list_contest.php");
    }

    public function deleteContestById($id){

        $contest = Contest::deleteContestById($id);
        
        $this->render("list_contest.php");
    }

    public function findContestById($id){

        $contest = Contest::findContestById($id);

        $this->render("list_contest.php");
    }
}