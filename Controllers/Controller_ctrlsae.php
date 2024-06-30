<?php
    class Controller_ctrlsae extends Controller{
        public function action_formaddperson(){
            $this->render('formaddperson', ['title' => 'Ajouter une personne | Spécial contrôle']);
        }

        public function action_listperson(){
            $m = Model::getModel();
            $entries = [];
            $x = $m->getAllPersonnes();
            foreach($x as $i => $entry){
                $entries[$i]['id_personne'] = $entry['id_personne'];
                $entries[$i]['nom'] = $entry['nom'];
                $entries[$i]['prenom'] = $entry['prenom'];
                $entries[$i]['fonction'] = $m->getIdRole($entry['id_personne']);
            }
            $data = ["li" => $entries, 'title' => 'Liste des personne'];
            $this->render('listperson', $data);
        }

        public function action_formmodifperson(){
            $m = Model::getModel();
            if(isset($_GET['id'])){
                $data = ['oldInfo' => $m->getUserInfoId($_GET['id']), 'oldFonc' => $m->getIdRole($_GET['id']), 'title' => 'Modifier une personne'];
                $this->render('formmodifperson', $data);
            }
        }

        public function action_modifperson(){
            $m = Model::getModel();
            if(isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['fonction'])){
                $data = [
                    'nom' => $_POST['nom'],
                    'id' => $_POST['id'],
                    'prenom' => $_POST['prenom'],
                    'fonction' => $_POST['fonction'],
                    'oldfonction' => $_POST['oldfonction']
                ];
                $res = $m->modifPerson($data);
                header('Location: index.php?controller=ctrlsae');
            }
        }

        public function action_delperson(){
            $m = Model::getModel();
            if(isset($_GET['id'])){
                $m->delPerson($_GET['id']);
                header('Location: index.php?controller=ctrlsae');
            }
        }

        public function action_formcrypt(){
            $m = Model::getModel();
            if(isset($_GET['id'])){
                $data = ['info' => $m->getUserInfoId($_GET['id']), 'fonction' => $m->getIdRole($_GET['id']), 'title' => 'Crypter'];
                $this->render('formcrypt', $data);
            }
        }

        public function action_addperson(){
            $m = Model::getModel();
            if(isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['fonction'])){
                $res = $m->addPerson($_POST['nom'], $_POST['prenom'], $_POST['fonction']);
                header('Location: index.php?controller=ctrlsae');
            }
        }

        public function action_default(){
            return $this->action_listperson();
        }
    }
?>