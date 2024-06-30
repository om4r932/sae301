<?php
    require "Views/view_navbar.php";
?>

<link rel="stylesheet" href="Content/css/formadgest.css">

<h4>Prestataire | Renseignement d'un bon de livraison</h4>
</br>
<p style="position:relative;left:300px;">Toutes les informations du prestataire et de l’entreprise nécessaires seront
  ajoutés automatiquement lors de la création du bon. </br>
  Veuillez vérifier que toutes les informations sont mis à jour dans votre espace prestataire.</p>
</br>
<p style="position:relative; left:300px;"><span style="color:red;">*</span> Champs obligatoires</p>
</br>

<div class="container">
  <div class="content" id="formgest">
    <div>
      <label for="nom" class="form-nom">Nom du client <span style="color:red;">*</span> </label></br>
      <input type="text" name="nom" id="nom" required>
    </div>

    <div>
      <label for="société" class="form-nom">Nom de l'entreprise</label></br>
      <input type="text" name="société" id="société">
    </div>

    <div>
      <label for="Adresse" class="form-nom">Adresse de livraison <span style="color:red;">*</span></label></br>
      <input type="text" name="Adresse" id="Adresse" required>
    </div>

    <div class="other">
      <div>
        <label for="codepostal" class="form-nom">Code postal <span style="color:red;">*</span></label></br>
        <input type="text" name="code_postal" id="code_postal" required>
      </div>

      <div>
        <label for="ville" class="form-nom">Ville <span style="color:red;">*</span></label></br>
        <input type="text" name="ville" id="ville" required></br>
      </div>

    </div>

    <div>
      <label for="pays" class="form-nom">Pays <span style="color:red;">*</span></label></br>
      <input type="text" name="pays" id="pays" required>
    </div>

    <div>
      <label for="NumCommande" class="form-nom">Numéro de commande <span style="color:red;">*</span></label></br>
      <input type="text" name="commande" id="commande" required>

      <div>

        <div>
          <label for="Commentaire" class="form-nom">Commentaire</label>
          <textarea class="form-control" id="commentaire" rows="5" cols="1"
            style="width: 970px; border: 2px solid #1b779f"></textarea>

        </div>
        <button class="btn btn-primary" style="position:relative; left:825px;" type="submit">Ajouter</button>
      </div>
    </div>
  </div>




  <?php require "Views/view_end.php"; ?>