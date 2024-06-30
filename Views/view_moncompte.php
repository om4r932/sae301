<?php
    require 'Views/view_navbar.php';
?>

<div class="container mt-4">
        <h2>Informations</h2>
        <table class="table">
            <tr>
                <th>Nom de la société</th>
                <td>Infos société</td>
            </tr>
            <tr>
                <th>Nom & Prénom</th>
                <td><?=e(strtoupper($user['nom'])) . " " . e(ucfirst(strtolower($user['prenom'])));?></td>
            </tr>
            <tr>
                <th>Siret</th>
                <td>num siret</td>
            </tr>
            <tr>
                <th>Numéro TVA</th>
                <td>TVA</td>
            </tr>
            <tr>
                <th>N° de téléphone</th>
                <td><?= e($user['telephone']);?></td>
                <td><button class="btn btn-primary">Modifier</button></td>
            </tr>
            <tr>
                <th>Mail</th>
                <td><?= e($user['mail']); ?></td>
                <td><button class="btn btn-primary">Modifier</button></td>
            </tr>
            <tr>
                <th>Adresse</th>
                <td>adresse postal</td>
                <td><button class="btn btn-primary">Modifier</button></td>
            </tr>
            <tr>
                <th>Ville</th>
                <td>ville</td>
                <td><button class="btn btn-primary">Modifier</button></td>
            </tr>
            <tr>
                <th>Pays</th>
                <td>pays</td>
                <td><button class="btn btn-primary">Modifier</button></td>
            </tr>
            <!-- Ajoutez d'autres lignes selon vos besoins -->
        </table>

        <div style="border: 1px solid #000000; padding: 10px; margin-top: 20px; overflow: hidden;">
            <img src="chemin_vers_votre_image.jpg" alt="Description de l'image" style="max-width: 100%; height: auto;">
        </div>
        <br>
        <p id="nom_en_tete">Commentaire : </p>
        <div style="border: 1px solid #000000; padding: 10px; margin-top: 20px; overflow: hidden;">
            <p id="Commentaire" alt="endroit_pour_commentaire">fezfzefz

            </p>
        </div>
    </div>
    <br>

<?php
    require 'Views/view_end.php';
?>