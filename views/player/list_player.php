<?php

use Models\Entity\Player;

$playerList = Player::findAllPlayers();
// Vérifier si la liste des Player est définie et n'est pas null
if ($playerList !== null) {
?>

<div class="container">
    <h1 class="m-5 link-warning">Liste de joueur</h1>
    <table class="table">
        <thead>
            <tr>
                <th class="border-warning border-3 link-warning bg-black">Email</th>
                <th class="border-warning border-3 link-warning bg-black">Nickname</th>
                <th class="border-warning border-3 link-warning bg-black">Update</th>
                <th class="border-warning border-3 link-warning bg-black">Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($playerList as $player){ ?>
                <tr>
                    <td class="border-warning border-3 link-warning bg-black"><?= $player['email']; ?></td>
                    <td class="border-warning border-3 link-warning bg-black"><?= $player['nickname']; ?></td>
                    <td class="border-warning border-3 link-warning bg-black"><a class="border-warning link-success" href="player/findAllPlayers<?= $player['id_player']; ?>">Update</a></td>
                    <td class="border-warning border-3 link-warning bg-black"><a class="border-warning link-danger" href="player/findAllPlayers<?= $player['id_player']; ?>">Delete</a></td>
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
