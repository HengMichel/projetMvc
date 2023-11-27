<?php
include_once "./inc/header.php";
include_once "./inc/nav.php";
require_once "../models/matchModel.php";
if (isset($_GET['id_match'])) {
    // identifiant de l'emprunt
    $id = $_GET['id_match'];
    // appel de la methode returnBook
    $match = Contest::findMatchById($id);
}

?>

<div class="container">
    <h1 class="m-5 link-warning">Ajouter un match</h1>
    <form action="./traitement/action.php" method="post">

        <div class="form-group  mb-3">
            <label class="m-2 link-warning">Game Id :</label>
            <input type="text" class="form-control text-uppercase" name="game_id" value="<?= !empty($match) ? $match["game_id"] : "" ?>">
        </div>

        <div class="form-group  mb-3">
            <label class="m-2 link-warning">Date de démarrage:</label>
            <input type="date" class="form-control text-uppercase"  name="start_date" value="<?= !empty($match) ? $match["start_date"] : "" ?>">
        </div>

        <div class="form-group  mb-3">
            <label class="m-2 link-warning">Winner id :</label>
            <input type="number" class="form-control text-uppercase" name="winner_id" value="<?= !empty($match) ? $match["winner_id"] : "" ?>">
        </div>

        <button type="submit" id="bouton" class="btn btn-black mt-5 mb-5 link-warning" name=<?= !empty($match) ? "update_match" : "add_match" ?>> <?= !empty($jeu) ? "Update" : "Add" ?> match</button>
    </form>
</div>

<?php
include_once "./inc/footer.php";
?>