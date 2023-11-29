<nav class="navbar navbar-expand-lg mb-5 bg-dark">
    <div class="container-fluid bg-black link-warning">
        <a class="navbar-brand link-warning" href="<?= addLink("home") ?>">Home</a>
        <button class="navbar-toggler link-warning" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarText">
            <ul class="navbar-nav mb-2 mb-lg-0 link-warning bg-black">
                <li class="nav-item">
                <a class="nav-link active link-warning" aria-current="page" href="<?= addLink("player","formPlayer") ?>">Ajouter un joueur</a>
                </li>
                <li class="nav-item">
                <a class="nav-link link-warning" href="<?= addLink("player") ?>">Liste de joueur</a>
                </li>
                <li class="nav-item">
                <a class="nav-link active link-warning" aria-current="page" href="<?= addLink("game","formGame") ?>">Ajouter un Game</a>
                </li>
                <li class="nav-item">
                <a class="nav-link link-warning" href="<?= addLink("game") ?>">Liste de Game</a>
                </li>
                <li class="nav-item">
                </li>
            </ul>
        </div>
    </div>
</nav>