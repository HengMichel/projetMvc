<!-- <div class="container">
    <h1 class="m-5 link-warning">Liste des joueurs</h1>
    <table class="table">
        <thead>
            <tr>
                <th class="border-warning border-3 link-warning bg-black">Id Joueur</th>
                <th class="border-warning border-3 link-warning bg-black">Email</th>
                <th class="border-warning border-3 link-warning bg-black">Nickname</th>
                <th class="border-warning border-3 link-warning bg-black">Update</th>
                <th class="border-warning border-3 link-warning bg-black">Delete</th>
            </tr>
        </thead>
        <tbody> -->
            <?php foreach ($players as $player) : ?>
                <!-- <tr>
                    <td class="border-warning border-3 link-warning bg-black">
                        <?= $player->getId() ?>
                    </td>
                    <td class="border-warning border-3 link-warning bg-black">
                        <?= $player->getEmail() ?>
                    </td>
                    <td class="border-warning border-3 
                    link-warning bg-black">
                    <?= $player->getNickname() ?>
                    </td>
                    <td class="border-warning border-3 link-warning bg-black"><a class="border-warning link-success list-group-item" href="<?= addLink("player/addPlayer", $player->getId()) ?>">Update</a>
                    </td>
                    <td class="border-warning border-3 link-warning border-3 bg-black">
                    <a class="border-warning border-3 link-danger list-group-item" href="<?= addLink("player/findAllPlayer", $player->getId()) ?>">Delete</a> </td>
                    </td>
                </tr> -->
            <?php endforeach; ?>
        <!-- </tbody>
    </table>
</div> -->

<?php
// use Model\Entity\Game;
//  Récupérer la liste des game
// $gameList = Game::findAllGame();

// Vérifier si la liste des games est définie et n'est pas null
?>
<!-- <div class="container mb-5">
<h1 class="m-5  link-warning">Liste des Games</h1>
<table class="table">
    <thead>
        <tr>
            <th class="border-warning border-3 mt-2 link-warning bg-black">Id Game</th>
            <th class="border-warning border-3 mt-2 link-warning bg-black">Title</th>
            <th class="border-warning border-3 mt-2 link-warning bg-black">Min joueur</th>
            <th class="border-warning border-3 mt-2 link-warning bg-black">Max joueur</th>
            <th class="border-warning border-3 link-warning border-3 bg-black">Update</th>
            <th class="border-warning border-3 link-warning border-3 bg-black">Delete</th>
        </tr>
    </thead>
    <tbody> -->
        <?php foreach($games as $game) : ?>
            <!-- <tr>
                <td class="border-warning border-3 mt-2 link-warning bg-black"><?= $game->getId() ?></td>
                <td class="border-warning border-3 mt-2 link-warning bg-black"><?= $game->getTitle() ?></td>
                <td class="border-warning border-3 mt-2 link-warning bg-black"><?= $game->getMin_players() ?></td>
                <td class="border-warning border-3 mt-2 link-warning bg-black"><?= $game->getMax_players() ?>
                </td>
                <td class="border-warning border-3 link-warning bg-black"><a class="border-warning link-success list-group-item" href="<?= addLink("game/addGame", $game->getId()) ?>">Update</a>
                </td>
                <td class="border-warning border-3 link-warning border-3 bg-black">
                    <a class="border-warning border-3 link-danger list-group-item" href="<?= addLink("game/findAllGame", $game->getId()) ?>">Delete</a>
                </td>
            </tr> -->
        <?php endforeach; ?>
    <!-- </tbody>
</table> -->

<?php
?>

<?php
use Model\Entity\Contest;
//  Récupérer la liste des contests
$contestList = Contest::findAllContests();

// Vérifier si la liste des contests est définie et n'est pas null
if ($contestList !== null) {
    ?>
<div class="container">
    <h1 class="m-5 link-warning">Liste de contest</h1>
    <table class="table">
        <thead>
            <tr>
                <th class="border-warning border-3 mt-2 link-warning bg-black">Nom du Game</th>
                <th class="border-warning border-3 mt-2 link-warning bg-black">Nbr de joueurs enregistrés :</th>
                <th class="border-warning border-3 mt-2 link-warning bg-black">Date de démarrage:</th>
                <th class="border-warning border-3 mt-2 link-warning bg-black">Pseudonyme du gagnant du contest :</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($contestList as $contest){ ?>
                <tr>
                   
                    <td class="border-warning border-3 mt-2 link-warning bg-black"><?= isset($game['title']) ? $game['title'] : 'N/A'; ?></td>
                    <td class="border-warning border-3 mt-2 link-warning bg-black"><?= isset($game['nombre_de_joueurs'])  ? $game['nombre_de_joueurs'] : 'N/A'; ?></td>
                    <td class="border-warning border-3 mt-2 link-warning bg-black"><?= isset($contest['start_date'])  ? $contest['start_date'] : 'N/A'; ?></td>
                    <td class="border-warning border-3 mt-2 link-info bg-black"><?= isset($player['nickname']) ? $player['nickname'] : 'N/A'; ?></td>
                    <?php } ?>
                </tr>
        </tbody>
    </table>
</div>
<?php
} else {
    echo "La liste des contests n'est pas disponible.";
}
?>
</div>
