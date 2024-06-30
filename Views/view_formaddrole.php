<?php
    require 'Views/view_navbar.php';
?>

<link rel="stylesheet" href="Content/css/formadgest.css">

<h4>Administrateur | Ajouter un role</h4>
</br>
<p style="position:relative; left:30px;"><span style="color:red;">*</span> Champs obligatoires</p>
</br>
<div class="container">
  <div class="content" id="formgest">
  <div >
    <label for="role" class="form-nom">Role<span style="color:red;">*</span> </label></br>
    <div>
        <input class="form-radio-input" type="radio" id="radio" name="role" value="gestionnaire">
        <label class="form-radio-label" for="role" style="margin-right: 5px;">Gestionnaire</label>
        <input class="form-radio-input" type="radio" id="radio" name="role" value="commercial">
        <label class="form-radio-label" for="role">Commercial</label>
    </div>
    </br></br>
</div>
    <div >
      <label for="nom" class="form-nom">Nom <span style="color:red;">*</span> </label></br>
      <input type="text" name="nom" id="nom" required>
    </div>

    <div >
      <label for="société" class="form-nom">Prénom <span style="color:red;">*</span></label></br>
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
      <button class= "btn btn-primary" style="position:relative; left:825px;" type="submit">Ajouter</button>
    </div>
</div>
</div>

<?php require 'Views/view_end.php';?>