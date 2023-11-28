<?php

use Models\Entity\Game;

$gameList = Game::findAllGame();
?>

<div class="container">
    <h1 class="m-5 link-warning ">Liste de Game</h1>
    <table class="table">
        <thead>
            <tr>
                <th class="border-warning border-3 link-warning bg-black">Id Game</th>
                <th class="border-warning border-3 link-warning bg-black">Title</th>
                <th class="border-warning border-3 link-warning bg-black">Min player</th>
                <th class="border-warning border-3 link-warning border-3 bg-black">Max player</th>
                <th class="border-warning border-3 link-warning border-3 bg-black">action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($gameList as $game) { ?>
                <tr>
                    <td class="border-warning border-3 link-warning border-3 bg-black"><?= $game['id_game']; ?></td>
                    <td class="border-warning border-3 link-warning border-3 bg-black"><?= $game['title']; ?></td>
                    <td class="border-warning border-3 link-warning border-3 bg-black"><?= $game['min_players']; ?></td>
                    <td class="border-warning border-3 link-warning border-3 bg-black"><?= $game['max_players']; ?></td>
                    <td class="border-warning border-3 link-warning border-3 bg-black">
                        
                        <a class="border-warning border-3 link-danger" href="./traitement/action.php?id_Game_delete=<?= $game['id_game']; ?>">Delete</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>


<?php
include_once "./inc/footer.php";
?>