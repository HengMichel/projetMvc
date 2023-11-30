<?php

use Models\Entity\Player;

//  Récupérer la liste des Players
$playerList = Player::findAllPlayers();

// Vérifier si la liste des Player est définie et n'est pas null
if ($playerList !== null) {
?>
<div class="container mb-5">
    <h2 class="m-5 link-warning">Liste des joueurs</h2>
    <table class="table ">
        <thead>
            <tr>
                <th class="border-warning border-3 link-warning bg-black">Id Joueur</th>
                <th class="border-warning border-3 link-warning bg-black">Email</th>
                <th class="border-warning border-3 link-warning bg-black">Nickname</th>
                <th class="border-warning border-3 link-warning bg-black">Update</th>
                <th class="border-warning border-3 link-warning bg-black">Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($playerList as $player){ ?>
                <tr>
                    <td class="border-warning border-3 mt-2 link-warning bg-black"><?= $player->get('id_player') ?></td>
                    <td class="border-warning border-3 mt-2 link-warning bg-black"><?= $player->getEmail() ?>
                    </td>
                    <td class="border-warning border-3 mt-2 link-primary bg-black"><?= $player->getNickname() ?></td>

                    <td class="border-warning border-3 link-warning bg-black">
                        <a href="<?= addLink("player","AddPlayers", $player->getId('id_player')) ?>" class="border-warning link-success list-group-item">Update</a><td>
                    <td class="border-warning border-3 link-warning bg-black">
                        <a href="<?= addLink("player","deletePlayerById", $player->getId('id_player')) ?>" class="border-warning link-success list-group-item">Delete</a><td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
<?php
} else {
    echo "La liste des players n'est pas disponible.";
}
?>
<?php
use Models\Entity\Game;
//  Récupérer la liste des game
$gameList = Game::findAllGame();

// Vérifier si la liste des games est définie et n'est pas null
?>
<div class="container mb-5">
    <h2 class="m-5  link-warning">Liste des Games</h2>
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
        <tbody>
            <?php foreach($gameList as $game){ ?>
                <tr>
                    <td class="border-warning border-3 mt-2 link-warning bg-black"><?= $game['id_game']; ?></td>
                    <td class="border-warning border-3 mt-2 link-warning bg-black"><?= $game['title']; ?></td>
                    <td class="border-warning border-3 mt-2 link-warning bg-black"><?= $game['min_players']; ?></td>
                    <td class="border-warning border-3 mt-2 link-warning bg-black"><?= $game['max_players']; ?></td>
                    <td class="border-warning border-3 link-warning bg-black"><a class="border-warning link-success list-group-item" href="game/findAllGame<?= $game['id_game']; ?>">Update</a></td>
                    <td class="border-warning border-3 link-warning border-3 bg-black">
                        <a class="border-warning border-3 link-danger list-group-item" href="game/findAllGame<?= $game['id_game']; ?>">Delete</a>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
<?php
?>

<?php
use Models\Entity\Contest;
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
