<?php
include_once "./inc/header.php";
include_once "./inc/nav.php";
require_once "../models/joueurModel.php";
$joueurList = Joueur::findAllJoueurs();
?>

<div class="container">
    <h1 class="m-5 link-warning">Liste de joueur</h1>
    <table class="table">
        <thead>
            <tr>
                <!-- <th>Id Actor</th> -->
                <th class="border-warning border-3 link-warning bg-black">Email</th>
                <th class="border-warning border-3 link-warning bg-black">Nickname</th>
                <th class="border-warning border-3 link-warning bg-black">Update</th>
                <th class="border-warning border-3 link-warning bg-black">Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($joueurList as $joueur){ ?>
                <tr>
                    <td class="border-warning border-3 link-warning bg-black"><?= $joueur['email']; ?></td>
                    <td class="border-warning border-3 link-warning bg-black"><?= $joueur['nickname']; ?></td>
                    <td class="border-warning border-3 link-warning bg-black"><a class="border-warning link-success" href="traitement/action.php?idJoueur=<?= $joueur['id_player']; ?>">Update</a></td>
                    <td class="border-warning border-3 link-warning bg-black"><a class="border-warning link-danger" href="traitement/action.php?idJoueur=<?= $joueur['id_player']; ?>">Delete</a></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>


<?php
include_once "./inc/footer.php";
?>
