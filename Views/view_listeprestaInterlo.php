<?php
    require 'Views/view_navbar.php';
?>

<link rel="stylesheet" href="Content/css/style_listebdl_gestio.css">

<p id="nom_en_tete">Liste des prestataires</p>

<table id="tableau">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Nom de la société </th>
                <th>Adresse</th>
                <th>Ville</th>
                <th>Pays</th>
            </tr>
        </thead>
        <tbody>
            <!-- Ajoutez ici vos 8 lignes initiales -->
            <tr>
                <td><a href='index.php?controller=client&action=gestclient'>Donnée 1</a></td>
                <td>Donnée 2</td>
                <td>Donnée 3</td>
                <td>Donnée 4</td>
                <td>Donnée 5</td>
                <td>Donnée 6</td>
            </tr>
            <!-- Répétez cette ligne pour chaque ligne initiale -->
        </tbody>
    </table>

<?php require 'Views/view_end.php';?> 