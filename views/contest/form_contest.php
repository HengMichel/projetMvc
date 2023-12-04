<div class="container">
    <h1 class="m-5 link-warning">Ajouter un match</h1>
    <form method="post">
        <div class="row">

            <div class="form-group col-1 mb-3">
                <label class="m-2 link-warning">Game Id :</label>
                <input type="text" class="form-control text-uppercase" name="game_id" value="<?= !empty($contest) ? $contest->getGame_id() : "" ?>">
            </div>
    
            <div class="form-group col-2 mb-3">
                <label class="m-2 link-warning">Date de démarrage:</label>
                <input type="date" class="form-control text-uppercase"  name="start_date" value="<?= !empty($contest) ? $contest->getStart_date() : "" ?>">
            </div>
    
            <div class="form-group col-2 mb-3">
                <label class="m-2 link-warning">Winner id :</label>
                <input type="number" class="form-control text-uppercase" name="winner_id" value="<?= !empty($contest) ? $contest->getWinner_id() : "" ?>">
            </div>
    
        </div>
        <button type="submit" id="bouton" class="btn bg-success mt-5 mb-5 link-light" name="submit">            
            <a href="<?= addLink("contest","newContest") ?>" class="btn btn-success fw-medium">Ajouter un tournoi</a>
        </button>
    </form>
</div>
