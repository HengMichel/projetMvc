<div class="container">
    <h1 class="m-5 link-warning">Ajouter une Game</h1>
    <form method="post">
        <div class="row">
            <div class="form-group mb-3">
                <label class="m-2 link-warning ">Titre du Game :<sup>*</sup></label>
                <input type="text" class="form-control text-uppercase border-warning border-3" name="title" id="title" value="<?= $game->getTitle() ?>">
            </div>
    
            <div class="form-group col-6 mb-3">
                <label class="m-2 link-warning">Min player :<sup>*</sup></label>
                <input type="number" class="form-control text-uppercase border-warning border-3" name="min_players" id="min_players" value="<?= $game->getMin_players()?>">
            </div>
    
            <div class="form-group col-6 mb-3">
                <label class="m-2 link-warning">Max player :<sup>*</sup></label>
                <input type="number" class="form-control text-uppercase border-warning border-3" name="max_players" id="max_players" value="<?= $game->getMax_players() ?>">
            </div>

        </div>
        <?php var_dump($game);?> // Vérifiez les données avant l'ajout
        <button type="submit" id="bouton" class="btn btn-black mt-3 mb-5 link-warning" name="submit"> 
            <a href="<?= addLink("Game") ?>" class="btn btn-success fw-medium">Ajouter une game</a>
        </button>
    </form>
</div>
