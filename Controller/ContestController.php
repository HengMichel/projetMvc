<?php

namespace Controller;

use Model\Entity\Contest;
use Controller\BaseController;
use Form\ContestHandleRequest;
use Model\Repository\ContestRepository;

class ContestController extends BaseController
{
    private $contestRepository;
    private $form;
    private $contest;

    public function __construct()
    {
        $this->contestRepository = new ContestRepository;
        $this->form = new ContestHandleRequest;
        $this->contest = new Contest;
    }

    public function list(){

        $contests = $this->contestRepository->findAll($this->contest);

        $this->render("contest/list_contest.php", [
            "contests" => $contests
        ]);
    }

    public function newContest(){

        $contest = $this->contest;
        $this->form->handleForm($contest);

        if ($this->form->isSubmitted() && $this->form->isValid()) {
            $this->contestRepository->addcontest($contest);
            return redirection(addLink("home"));
        }

        $errors = $this->form->getEerrorsForm();

        return $this->render("contest/form_contest.php",  [
            "contest" => $contest,
            "errors" => $errors
        ]);
    }
    
    // public function addPlayerBy($game_id,$start_date,$winner_id)
    // {
    //     Contest::addContest($game_id,$start_date,$winner_id);

    //     $this->render("add_contest.php");
    // }

    public function findAllContests(){

        $this->render("list_contest.php");
    }

    public function findAllContestsSortedByStartDateDesc(){

        $this->render("list_contest.php");
    }

    public function findAllTables(){

        $this->render("list_contest.php");
    }

    // public function deleteContestById($id){

    //     $contest = Contest::deleteContestById($id);
        
    //     $this->render("list_contest.php");
    // }

    // public function findContestById($id){

    //     $contest = Contest::findContestById($id);

    //     $this->render("list_contest.php");
    // }
}