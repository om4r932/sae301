<?php
    require_once 'Utils/functions.php';
    require 'Views/view_no_navbar.php';
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <img src="Content/img/forgot.png" alt="" class="img-thumbnail">
        </div>
        <div class="col-md-6" style="margin-top: 10%; margin-bottom: 10px; text-align: center;">
            <form action="index.php?controller=home&action=formchangemdp" method="post" id="loginform">   
                <h2>Récupération de votre mot de passe</h2><br>
                <p>Saississez afin de vous envoyer un lien permettant de changer votre mot de passe en cas d'oubli</p>
                <input type="text" name="user" placeholder="Adresse mail" id="field-user" style="width: 55vh;"><br><br>
                <button type="submit">Récupérer</button>
            </form>
        </div>
    </div>
</div>
<?php require 'Views/view_end.php';?>