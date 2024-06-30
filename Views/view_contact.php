<?php 
    if(isLogged()){
        require "Views/view_navbar.php";
    } else {
        require "Views/view_no_navbar.php";
    }
?>

<div class="content">
        <div class="row" style="min-height: 15vh;"></div>
        <div class="row" style="text-align: center; justify-content: center;">
            <h1 style="color:#2388B0;">Nous contacter</h1>
            <p>Nous sommes disponible du lundi au vendredi de <span style="1B779F">9h</span> à <span style="1B779F">18h</span></p>
        </div><br><br><br><br><br><br>
        <div class="row">
            <div class="col-md-4" style="border-right: 1px solid #1b779f; padding: 5% 0; "  >
                <img src="Content/img/Phone.png" alt="" style="width: 120px">
                <h6 style="color:#2388B0">Par téléphone</h6>
                <p>Appelez-nous au <a href="tel:+33165656565"> +33 01 65 65 65 65 </a></br>
                    (du lundi au samedi de 9h à 10h)</p>
            </div>
            <div class="col-md-4" style="border-right: 1px solid #1b779f; padding: 5% 0;">
                <img src="Content/img/chat.png" alt="" style="width: 120px">
                <h6 style="color:#2388B0">Par chat</h6>
                <p>Posez-nous toutes vos questions en</br>cliquant sur chat en bas à gauche </p>
            </div>
            <div class="col-md-4" style="padding: 5% 0;">
                <img src="Content/img/mail.png" alt="" style="width: 120px">
                <h6 style="color:#2388B0">Par mail</h6>
                <p>Ecrivez-nous sur l’adresse mail :</br><a href="mailto:contact@perform-vision.com">contact@perform-vision.com</a></p>
            </div>
        </div>
    </div>

<?php require "Views/view_end.php" ?>