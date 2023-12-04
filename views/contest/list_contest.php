<h1 class="listeM link-warning">Liste du Tournoi</h1>
<div class="container">

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
            <?php foreach($contests as $contest) : ?>
               <?php
                 if ($contest->getStart_date() > date('Y-m-d H:i:s')) echo 'not-started'; 
                 ?>
                    <?= $game->getTitle() ?>
                    <p>Date de démarrage : <?= $contest->getStart_date() ?></p>
                <tr>

                    <td class="border-warning border-3 link-warning bg-black"><?= $contest->findAllGame()->getTitle() ?></td>
                    <td class="border-warning border-3 link-warning bg-black"><?= $contest->getNumberOfPlayers() ?></td>
                    <td class="border-warning border-3 link-warning bg-black"><?= $contest->getStart_date() ?></td>
                    <td class="border-warning border-3 link-warning bg-black"><?= $contest->getWinner()->getNickname() ?></td>
                    <td class="border-warning border-3 link-warning bg-black">
                        <a class="link-warning text-decoration-none" href="<?= addLink("contest", "deleteContest", $contest->getId_contest()) ?>">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

