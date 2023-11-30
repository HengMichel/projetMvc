<?php

use Models\Entity\Contest;

$contestList = Contest::findAllTables();
?>

<div class="container">
    
    <h1 class="listeM link-warning">Liste du Tournoi</h1>
    <table class="table">
        <thead>
            <tr>
                <th class="border-warning border-3 link-warning bg-black">Nom du Game</th>
                <th class="border-warning border-3 link-warning bg-black">Nbr de joueurs enregistrés :</th>
                <th class="border-warning border-3 link-warning bg-black">Date de démarrage:</th>
                <th class="border-warning border-3 link-warning bg-black">Pseudonyme du gagnant du match :</th>
                <th class="border-warning border-3 link-warning bg-black">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($contestList as $contest){ ?>

               <?php if ($contest['start_date'] > date('Y-m-d H:i:s')) echo 'not-started'; ?>
                    <h2><?= $contest['game_title']; ?></h2>
                    <p>Date de démarrage : <?= $contest['start_date']; ?></p>
                <tr>
                    <td class="border-warning border-3 link-warning bg-black"><?= $contest['title']; ?></td>
                    <td class="border-warning border-3 link-warning bg-black"><?= $contest['nombre_de_joueurs']; ?></td>
                    <td class="border-warning border-3 link-warning bg-black"><?= $contest['start_date']; ?></td>
                    <td class="border-warning border-3 link-warning bg-black"><?= $contest['nickname']; ?></td>
                    <td class="border-warning border-3 link-warning bg-black"><a class="link-warning text-decoration-none" href="traitement/action.php?idcontest=<?= $contest['id_contest']; ?>">Delete</a></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

