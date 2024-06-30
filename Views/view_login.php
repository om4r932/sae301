<?php
    require_once 'Utils/functions.php';
    require 'Views/view_no_navbar.php';
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6" style="text-align: center; ">
            <img src="Content/img/login.png" alt="" class="img-thumbnail">
        </div>
        <div class="col-lg-6" style="margin-top: 10%; margin-bottom: 10px; text-align: center;">
            <form action="index.php?controller=home&action=login" method="post" id="loginform">   
                <h2 style="color:#1B779F;">Connexion</h2><br>
                <p><?=e($message)?></p>
                <input type="text" name="user" placeholder="Adresse mail" id="field-user"><br><br>
                <input type="password" name="pass" placeholder="Mot de passe" id="field-pass"><br><br>
                <button type="submit">Se connecter</button><br>
                <a href="index.php?controller=home&action=formforgetmdp">Mot de passe oublié ?</a>
            </form>
        </div>
    </div>
</div>
<?php require 'Views/view_end.php';?>