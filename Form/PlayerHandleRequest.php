<?php

namespace Form;

use Service\Session;
use Models\Entity\Player;
use Models\Repository\PlayerRepository;

class PlayerHandleRequest extends BaseHandleRequest
{
    private $playerRepository;

    public function __construct()
    {
        $this->playerRepository  = new PlayerRepository;
    }

    public function handleForm(Player $player)
    {
        if (isset($_POST['submit'])) {

            extract($_POST);
            $errors = [];

            // Vérification de la validité du formulaire
            if (empty( $email)) {
                $errors[] = "L'email ne peut pas être vide";
            }
            if (strlen( $email) < 2) {
                $errors[] = "L'email doit avoir au moins 2 caractères";
            }
            if (strlen( $email) > 20) {
                $errors[] = "L'email ne peut avoir plus de 20 caractères";
            }

            if (!strpos( $email, " ") === false) {
                $errors[] = "Les espaces ne sont pas autorisés pour l'email";
            }

            // Est-ce que le pseudo existe déjà dans la bdd ?

            // $requete = $this->playerRepository->findByPseudo($pseudo);
            $requete = $this->playerRepository->findByAttributes($player, ["email" =>  $email]);
            if ($requete) {
                $errors[] = "L'email  existe déjà, veuillez en choisir un nouveau";
            }

            if (!empty($nickname)) {
                if (strlen($nickname) < 1) {
                    $errors[] = "Le nickname doit avoir au moins 2 caractères";
                }
                if (strlen($nickname) > 4) {
                    $errors[] = "Le nickname ne peut avoir plus de 4 caractères";
                }
            }
            
            if (empty($errors)) {
              
                $player->setEmail($title);
                $player->setNickname($nickname);
                return true;
            }

            $this->setEerrorsForm($errors);
        }
    }

    // public function handleUpdate($id)
    // {
    //     if (isset($_GET['idUser'])) {

    //         $idUser = htmlspecialchars($_GET['idUser']);
        
    //         User::UserById($idUser);
    //     }
    // }
    public function handleSecurity()
    {
       
        
    }
}