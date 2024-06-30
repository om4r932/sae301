<?php
    require "Views/view_navbar.php";
?>

<head>
    <link rel="stylesheet" href="Content/css/style_pgadmin.css">
</head>

<div class="container">
        <div class="image-container">
            <div>
                <a href="index.php?controller=addrole"><img src="Content/img/GestionPerso.png" alt="Image 1"></a>
            </div>
            <div>
                <a href="index.php?controller=client"><img src="Content/img/Gestion client.png" alt="Image 2"></a>
            </div>
            
        </div>
    </div>
    <br>
    <br>

<?php require "Views/view_end.php";?>