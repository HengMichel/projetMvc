<?php
include_once "./inc/header.php";
include_once "./inc/nav.php";
require_once "../models/jeuModel.php";
$jeuList = Jeu::findAllJeu();
?>

<div class="container">
    <h1 class="m-5 link-warning ">Liste de jeu</h1>
    <table class="table">
        <thead>
            <tr>
                <th class="border-warning border-3 link-warning bg-black">Id Jeu</th>
                <th class="border-warning border-3 link-warning bg-black">Title</th>
                <th class="border-warning border-3 link-warning bg-black">Min player</th>
                <th class="border-warning border-3 link-warning border-3 bg-black">Max player</th>
                <th class="border-warning border-3 link-warning border-3 bg-black">action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($jeuList as $jeu) { ?>
                <tr>
                    <td class="border-warning border-3 link-warning border-3 bg-black"><?= $jeu['id_game']; ?></td>
                    <td class="border-warning border-3 link-warning border-3 bg-black"><?= $jeu['title']; ?></td>
                    <td class="border-warning border-3 link-warning border-3 bg-black"><?= $jeu['min_players']; ?></td>
                    <td class="border-warning border-3 link-warning border-3 bg-black"><?= $jeu['max_players']; ?></td>
                    <td class="border-warning border-3 link-warning border-3 bg-black">
                        
                        <a class="border-warning border-3 link-danger" href="./traitement/action.php?id_jeu_delete=<?= $film['id_game']; ?>">Delete</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>


<?php
include_once "./inc/footer.php";
?>