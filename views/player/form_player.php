<div class="container">
    <h1 class="m-5 link-warning">Ajouter un joueur</h1>
    <form method="post">
        <div class="row">
            <div class="form-group  mb-3 link-warning col-6">
                <label class="m-2">Email :</label>
                <input type="email" class="form-control border-warning border-3 mt-2 link-black"  name="email" >
            </div>
            
            <div class="form-group col-6 mb-3">
                <label class="m-2 link-warning">Nickname :</label>
                <input type="text" class="form-control text-uppercase  border-warning border-3 mt-2 link-black"  name="nickname" >
            </div>
        </div>
        <button type="submit" id="bouton" name="submit"><a href="<?= addLink("user") ?>" class="btn btn bg-success mt-5 mb-5 mt-2 link-light fw-medium">Ajouter un user</button>
    </form>
</div>
