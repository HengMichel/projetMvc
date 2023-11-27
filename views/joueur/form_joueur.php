<?php
include_once "./inc/header.php";
include_once "./inc/nav.php";
?>

<div class="container">
    <h1 class="m-5 link-warning">Ajouter un joueur</h1>
    <form action="./traitement/action.php" method="post">
        <div class="form-group  mb-3 link-warning">

            <label class="m-2">Email :</label>
            <input type="email" class="form-control border-warning border-3 mt-2 link-warning"  name="email" >
        </div>
        
        <div class="form-group  mb-3">
            <label class="m-2 link-warning">Nickname :</label>
            <input type="text" class="form-control text-uppercase  border-warning border-3 mt-2 link-warning"  name="nickname" >
        </div>
        
