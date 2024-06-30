<?php require 'Views/view_navbar.php'; ?>

<head>
  <link rel="stylesheet" href="../Content/css/gestficheclient.css">
</head>

<h2>Gestionnaire | Fiche client </h2>

<div class="container">
  <div class="formulaire">

    <span class="img">
      <img src="chemin/vers/image.jpg" alt="Description de l'image">
    </span>

    <form>
      <div class="form-section">
        <input type="text" id="Name" placeholder="Nom et Prénom" required> <label for="Name">Identifiant du client</label>
      </div>

      <div class="form-section">
        <input type="checkbox" id="société">
        <label for="société">Société</label>
        <input type="checkbox" id="particulier">
        <label for="particulier">Particulier</label>
      </div>

      <div class="form-section">
        <input type="text" id="société" placeholder="Nom de la société" required>
      </div>
    </form>

  </div>
  <div class="container-infos">
    <form>
      <label for="email">Adresse Mail</label>
      <input type="email" name="email" id="email">
      <label for="tel">Numéro de téléphone</label>
      <input type="text" name="text" id="text">
      <label for="adresse">Adresse</label>
      <input type="adresse" name="adresse" id="adresse">
      <label for="code postale">Code Postal</label>
      <input type="code postale" name="code postale" id="code postale">
      <label for="ville">Ville</label>
      <input type="ville" name="ville" id="ville">
      <label for="pays">Pays</label>
      <input type="pays" name="pays" id="pays">
    </form>
  </div>

</div>


<?php require 'Views/view_end.php' ?>