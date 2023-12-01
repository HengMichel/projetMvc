<?php
use Service\PlayerService;
use Model\Repository\PlayerRepository;


// Créez une instance de PlayerRepository
$playerRepository = new PlayerRepository();

// Injectez l'instance de PlayerRepository dans PlayerService
$playerService = new PlayerService($playerRepository);

$playerList = $playerService->findAllPlayers();
?>

<div class="container">
    <h1 class="m-5 link-warning">Liste des joueurs</h1>
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
            <?php 
            foreach($playerList as $player) {
                ?>
                <tr>
                    <td class="border-warning border-3 link-warning bg-black"><?= $player->getEmail() ?></td>
                    <td class="border-warning border-3 link-warning bg-black"><?= $player->getNickname() ?></td>

                    <td class="border-warning border-3 link-warning bg-black">
                        <?php 
                        $playerId = $player->getId();
                        // Vérifiez si $playerId est défini avant de l'utiliser
                        echo isset($playerId) ? "<a class='border-warning link-success' href='" . addLink("player", "AddPlayers", $playerId) . "'>Update</a>" : ""; 
                        ?>
                    </td>
                    <td class="border-warning border-3 link-warning bg-black">
                        <?php 
                        // Vérifiez si $playerId est défini avant de l'utiliser
                        echo isset($playerId) ? "<a class='border-warning link-danger' href='" . addLink("player", "deletePlayerById", $playerId) . "'>Delete</a>" : ""; 
                        ?>
                    </td>
                </tr>
            <?php 
            }
            ?>
        </tbody>
    </table>
</div>
