<?php
    require_once 'Utils/functions.php';
    require 'Views/view_no_navbar.php';
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <img src="Content/img/reset.png" alt="" class="img-thumbnail">
        </div>
        <div class="col-md-6" style="margin-top: 10%; margin-bottom: 10px; text-align: center;">
            <form action="index.php?controller=home&action=changemdp" method="post" id="loginform">   
                <h2>Modification du mot de passe</h2><br>
                <input type="text" name='id' style="display: none;" value=<?=e($id);?>>
                <input type="password" name="npass" placeholder="Nouveau mot de passe" id="field-npass" style="width: 55vh;"><br><br>
                <input type="password" name="cpass" placeholder="Confirmation mot de passe" id="field-cpass" style="width: 55vh;"><br><br>
                <button type="submit">Changer de mot de passe</button><br>
            </form>
        </div>
    </div>
</div>
<?php require 'Views/view_end.php';?>