<?php

use Models\Entity\Player;

$playerList = Player::findAllPlayers();
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
            <?php foreach($playerrList as $player){ ?>
                <tr>
                    <td class="border-warning border-3 link-warning bg-black"><?= $player['email']; ?></td>
                    <td class="border-warning border-3 link-warning bg-black"><?= $player['nickname']; ?></td>
                    <td class="border-warning border-3 link-warning bg-black"><a class="border-warning link-success" href="findAllPlayers<?= $player['id_player']; ?>">Update</a></td>
                    <td class="border-warning border-3 link-warning bg-black"><a class="border-warning link-danger" href="findAllPlayers<?= $player['id_player']; ?>">Delete</a></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>


<?php
include_once "./inc/footer.php";
?>
