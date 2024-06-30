<?php
    require "Views/view_no_navbar.php";
?>

<link rel="stylesheet" href="Content/css/style_listebdl_gestio.css">

<p id="nom_en_tete">Liste des personnes</p>

    <table id="tableau">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Fonction</th>
                <th>Action 1</th>
                <th>Action 2</th>
                <th>Action 3</th>
            </tr>
        </thead>
        <tbody>
            <!-- Ajoutez ici vos 8 lignes initiales -->
            <?php foreach($li as $i=>$entry): ?>
            <tr>
                <td><?= e($entry['nom']) ?></td>
                <td><?= e($entry['prenom'])?></td>
                <td><?= e($entry['fonction'])?></td>
                <td><a href=<?= "index.php?controller=ctrlsae&action=formmodifperson&id=". e($entry['id_personne']) ?>>Modifier</a></td>
                <td><a href=<?= "index.php?controller=ctrlsae&action=formcrypt&id=". e($entry['id_personne']) ?>>Crypter</a></td>
                <td><a href=<?= "index.php?controller=ctrlsae&action=delperson&id=". e($entry['id_personne']) ?>>Supprimer</a></td>
            </tr>
            <?php endforeach ?>
            <!-- Répétez cette ligne pour chaque ligne initiale -->
        </tbody>
    </table>

<br><button class="btn btn-primary" onclick="window.location = 'index.php?controller=ctrlsae&action=formaddperson';">Ajouter</button>
<?php
    require "Views/view_end.php";
?>