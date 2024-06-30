<?php
    require "Views/view_navbar.php";
?>

<link rel="stylesheet" href="Content/css/style_listebdl_gestio.css">

<br><button class="btn btn-primary" onclick="window.location = 'index.php?controller=bdl&action=formaddbdl';">Ajouter</button>
<p id="nom_en_tete">Gestionnaire c.c | Liste des BDLs</p>

    <table id="tableau">
        <thead>
            <tr>
                <th>N° commande</th>
                <th>Fournisseur</th>
                <th>Adresse</th>
                <th>Ville</th>
                <th>Pays</th>
                <th>Date de commande </th>
                <th>Date d'expédition</th>
                <th>Statut</th>
            </tr>
        </thead>
        <tbody>
            <!-- Ajoutez ici vos 8 lignes initiales -->
            <tr>
                <td>Donnée 1</td>
                <td>Donnée 2</td>
                <td>Donnée 3</td>
                <td>Donnée 4</td>
                <td>Donnée 5</td>
                <td>Donnée 6</td>
                <td>Donnée 7</td>
                <td>Donnée 8</td>
            </tr>
            <tr>
                <td>Donnée 1</td>
                <td>Donnée 2</td>
                <td>Donnée 3</td>
                <td>Donnée 4</td>
                <td>Donnée 5</td>
                <td>Donnée 6</td>
                <td>Donnée 7</td>
                <td>Donnée 8</td>
            </tr>
            <tr>
                <td>Donnée 1</td>
                <td>Donnée 2</td>
                <td>Donnée 3</td>
                <td>Donnée 4</td>
                <td>Donnée 5</td>
                <td>Donnée 6</td>
                <td>Donnée 7</td>
                <td>Donnée 8</td>
            </tr>
            <!-- Répétez cette ligne pour chaque ligne initiale -->
        </tbody>
    </table>

<br><button class="btn btn-primary" onclick="window.location = 'index.php?controller=pdf';">Générer un PDF</button>
<?php
    require "Views/view_end.php";
?>