<?php require 'Views/view_no_navbar.php'?>

<h4>Modifier une personne</h4>
</br>
<p><span style="color:red;">*</span> Champs obligatoires</p>
</br>
<div class="container">
    <div class="content" id="formgest">
        <form action="index.php?controller=ctrlsae&action=modifperson" method="post">
            <input type="text" style="display: none" name="id" value=<?=e($_GET['id'])?> id="id">
            <div>
                <label for="nom">Nom<span style="color:red;">*</span> </label></br>
                <input type="text" name="nom" value=<?= e(strval($oldInfo['nom']))?> id="nom" required>
            </div>
            <div>
                <label for="prenom" class="form-prenom">Prénom<span style="color:red;">*</span> </label></br>
                <input type="text" name="prenom" value=<?= e($oldInfo['prenom'])?> id="prenom" required>
            </div>
            <div>
                <label for="fonction" class="form-fonction">Fonction<span style="color:red;">*</span> </label></br>
                <input type="text" name="oldfonction" style='display: none;' value=<?=e($oldFonc)?> id="oldfonc">
                <select name="fonction" id="fonction">
                    <?php foreach(['Administrateur', 'Gestionnaire', 'Commercial', 'Prestataire', 'Interlocuteur'] as $i => $value):?>
                        <?php if($oldFonc == $value):?>
                            <option selected value=<?=e($value)?>><?=e($value)?></option>
                        <?php else: ?>
                            <option value=<?=e($value)?>><?=e($value)?></option>
                        <?php endif ?>
                    <?php endforeach?>
                </select>
            </div>
            <br>
            <div>
                <input type="submit" value="Modifer">
            </div>
            <div>
                <button><a style="text-decoration: none; color: black;" href="index.php?controller=ctrlsae&action=listperson">Renoncer</a></button>
            </div>
        </form>
    </div>
</div>

<?php require 'Views/view_end.php'?>