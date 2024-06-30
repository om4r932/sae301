<?php require 'Views/view_begin.php' ?>
<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #2388b0;">
    <div class="container">
        <a class="navbar-brand" href="index.php">SAS Perform Vision</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php?controller=home" style="color: white;">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?controller=moncompte&action=viewcompte"
                        style="color: white;">Compte</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?controller=home&action=contact"
                        style="color: white;">Contact</a>
                </li>
                <?php
                    if(in_array(getCurrentRole(), ['Administrateur', 'SuperAdmin'])){
                        echo '<li class="nav-item"><a class="nav-link" href="index.php?controller=admin" style="color: white;">Administration</a></li>';
                    }
                ?>
                <?php
                    if(in_array(getCurrentRole(), ['Administrateur', 'SuperAdmin', 'Gestionnaire'])){
                        echo '<li class="nav-item"><a class="nav-link" href="index.php?controller=bdl" style="color: white;">BDL</a></li>';
                    }
                ?>
                <?php
                    if(in_array(getCurrentRole(), ['Administrateur', 'SuperAdmin', 'Gestionnaire'])){
                        echo '<li class="nav-item"><a class="nav-link" href="index.php?controller=formaddprest" style="color: white;">Gest. Gestionnaire</a></li>';
                    }
                ?>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?controller=home&action=disconnect" style="color:red;">Deconnexion</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>