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
    <tbody>
        <?php foreach($gameList as $game) : ?>
            <tr>
                <td class="border-warning border-3 mt-2 link-warning bg-black"><?= $game->getId() ?></td>
                <td class="border-warning border-3 mt-2 link-warning bg-black"><?= $game->getTitle() ?></td>
                <td class="border-warning border-3 mt-2 link-warning bg-black"><?= $game->getMin_players() ?></td>
                <td class="border-warning border-3 mt-2 link-warning bg-black"><?= $game->getMax_players() ?>
                </td>
                <td class="border-warning border-3 link-warning bg-black"><a class="border-warning link-success list-group-item" href="<?= addLink("game/addGame", $game->getId()) ?>">Update</a>
                </td>
                <td class="border-warning border-3 link-warning border-3 bg-black">
                    <a class="border-warning border-3 link-danger list-group-item" href="<?= addLink("game/findAllGame", $game->getId()) ?>">Delete</a>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
