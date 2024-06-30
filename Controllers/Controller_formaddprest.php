<?php
 class Controller_formaddprest extends Controller{
  public function action_afficher_formulaire(){
   if(isLogged() && in_array(getCurrentRole(), ['Administrateur', 'SuperAdmin', 'Gestionnaire'])){$this->render('formaddprest', ['title' => 'Ajouter prestataire | SAS Perform Vision']);}
   else{header('Location: index.php');}
 }
 public function action_traiter_formulaire(){
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $nom = isset($_POST['nom']) ? $_POST['nom'] : '';
        $société = isset($_POST['société']) ? $_POST['société'] : '';
        $email= isset($_POST['email']) ? $_POST['email']: '';
        $telephone= isset($_POST['telephone']) ? $_POST['telephone']: '';
        $adresse= isset($_POST['adresse']) ? $_POST['adresse']: '';
        $code_postal=isset($_POST['code_postal']) ? $_POST['code_postal']: '';
        $ville=isset($_POST['ville']) ? $_POST['ville']: '';
        $pays=isset($_POST['pays']) ? $_POST['pays']: '';
        $tva=isset($_POST['tva']) ? $_POST['tva']: '';
        $siret=isset($_POST['siret']) ? $_POST['siret']: '';
        $type_prestation=isset($_POST['type_prestation']) ? $_POST['type_prestation']: '';

        
    }
 }

 public function action_default(){
  return $this->action_afficher_formulaire();
 }
 }

?>