<?php
$mode = $mode ?? "insertion";
require "views/errors_form.html.php";
?>
<div class="container">
    <h1 class="m-5 link-warning">Ajouter une Game</h1>
    <form action="" method="post">
        <div class="form-group  mb-3">
            <label class="m-2 link-warning ">Titre du Game :</label>
            <input type="text" class="form-control text-uppercase border-warning border-3" name="title" id="title" value="<?= $game->getTitle() ?>"<?= $mode == "suppression" ? "disabled" : "" ?>>
        </div>

        <div class="form-group  mb-3">
            <label class="m-2 link-warning">Min player :</label>
            <input type="number" class="form-control text-uppercase border-warning border-3" name="min_players" id="min_players" value="<?= $game->getMin_players()?>"<?= $mode == "suppression" ? "disabled" : "" ?>>
        </div>

        <div class="form-group  mb-3">
            <label class="m-2 link-warning">Max player :</label>
            <input type="number" class="form-control text-uppercase border-warning border-3" name="max_players" id="max_players" value="<?= $game->getMax_players() ?>"<?= $mode == "suppression" ? "disabled" : "" ?>>
        </div>

        <button type="submit" id="bouton" class="btn btn-black border-warning mt-5 mb-5 link-warning" name="submit"> 
        <?= $mode == "suppression" ? "Confirmer" : "Enregistrer" ?></button>
        <a href="<?= addLink("game") ?>" class="btn btn-danger">Annuler</a>
    </form>
</div>
