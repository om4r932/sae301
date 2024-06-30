<?php
    require 'Views/view_navbar.php';
?>

<head>
  <link rel="stylesheet" href="Content/css/formadgest.css">
</head>

<h4>Gestionnaire | Ajouter un prestataire</h4>
</br>
<p style="position:relative; left:30px;"><span style="color:red;">*</span> Champs obligatoires</p>
</br>
<div class="container">
  <div class="content" id="formgest">
    <div >
      <label for="nom" class="form-nom">Nom du prestataire <span style="color:red;">*</span> </label></br>
      <input type="text" name="nom" id="nom" required>
    </div>

    <div >
      <label for="société" class="form-nom">Société <span style="color:red;">*</span></label></br>
      <input type="text" name="société" id="société"  required>
    </div>

    <div>
      <label for="email" class="form-nom">Adresse Email <span style="color:red;">*</span></label></br>
      <input type="email" name="email" id="email" required>
    </div>

    <div>
      <label for="telephone" class="form-nom">Numéro de téléphone <span style="color:red;">*</span></label></br>
      <input type="tel" name="telephone" id="telephone" required>
    </div>



    <div>
      <label for="Adresse" class="form-nom">Adresse personnelle <span style="color:red;">*</span></label></br>
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

    <div class="other">
      <div>
        <label for="tva" class="form-nom">Numéro TVA <span style="color:red;">*</span></label></br>
        <input type="text" name="tva" id="tva">
      </div>

      <div>
        <label for="siret" class="form-nom">Numéro SIRET <span style="color:red;">*</span></label></br>
        <input type="text" name="siret" id="siret">
      </div>
    </div>

    <div>
      <label for="type_prestation" class="form-nom"> Type de prestation <span style="color:red;">*</span></label></br>
      <input type="text" name="type_prestation" id="type_prestation">
    </div>


    <div>
      <button class= "btn btn-primary" style="position:relative; left:825px;" type="submit">Ajouter</button>
    </div>
  </div>
</div>

<?php require 'Views/view_end.php';?>