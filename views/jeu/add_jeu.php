<?php
include_once "./inc/header.php";
include_once "./inc/nav.php";
require_once "../models/jeuModel.php";

if (isset($_GET['id_jeu'])) {
    // identifiant de l'emprunt
    $id = $_GET['id_jeu'];
    // appel de la methode returnBook
    $jeu = Jeu::findJeuById($id);
}

?>

<div class="container">
    <h1 class="m-5 link-warning">Ajouter un jeu</h1>
    <form action="./traitement/action.php" method="post">

        <div class="form-group  mb-3">
            <label class="m-2 link-warning ">Titre du jeu :</label>
            <input type="text" class="form-control text-uppercase border-warning border-3" name="title" value="<?= !empty($jeu) ? $jeu["title"] : "" ?>">
            <?php
          
            ?>
        </div>

        <div class="form-group  mb-3">
            <label class="m-2 link-warning">Min player :</label>
            <input type="number" class="form-control text-uppercase border-warning border-3" name="min_players" value="<?= !empty($jeu) ? $jeu["min_players"] : "" ?>">
        </div>

        <div class="form-group  mb-3">
            <label class="m-2 link-warning">Max player :</label>
            <input type="number" class="form-control text-uppercase border-warning border-3" name="max_players" value="<?= !empty($jeu) ? $jeu["max_players"] : "" ?>">
        </div>

        <button type="submit" id="bouton" class="btn btn-black border-warning mt-5 mb-5 link-warning" name=<?= !empty($jeu) ? "update_jeu" : "add_jeu" ?>> <?= !empty($jeu) ? "Update" : "Add" ?> jeu</button>
    </form>
</div>

<?php
include_once "./inc/footer.php";
?>