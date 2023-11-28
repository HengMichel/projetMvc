<?php

use Models\Entity\Contest;

if (isset($_GET['id_contest'])) {
    // identifiant de l'emprunt
    $id = $_GET['id_contest'];
    // appel de la methode returnBook
    $contest = Contest::findContestById($id);
}

?>

<div class="container">
    <h1 class="m-5 link-warning">Ajouter un match</h1>
    <form action="contest" method="post">

        <div class="form-group  mb-3">
            <label class="m-2 link-warning">Game Id :</label>
            <input type="text" class="form-control text-uppercase" name="game_id" value="<?= !empty($contest) ? $contest["game_id"] : "" ?>">
        </div>

        <div class="form-group  mb-3">
            <label class="m-2 link-warning">Date de démarrage:</label>
            <input type="date" class="form-control text-uppercase"  name="start_date" value="<?= !empty($contest) ? $contest["start_date"] : "" ?>">
        </div>

        <div class="form-group  mb-3">
            <label class="m-2 link-warning">Winner id :</label>
            <input type="number" class="form-control text-uppercase" name="winner_id" value="<?= !empty($contest) ? $contest["winner_id"] : "" ?>">
        </div>

        <button type="submit" id="bouton" class="btn btn-black mt-5 mb-5 link-warning" name=<?= !empty($contest) ? "update_contest" : "add_contest" ?>> <?= !empty($contest) ? "Update" : "Add" ?> contest</button>
    </form>
</div>

<?php
include_once "./inc/footer.php";
?>