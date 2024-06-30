<?php
    class Controller_addbdl extends Controller{
        public function action_formaddbdl(){
            if(isLogged() && in_array(getCurrentRole(), ['Administrateur', 'SuperAdmin', 'Gestionnaire'])){
            $this->render('formaddbdl', ['title' => 'Ajouter bon de livraison | SAS Perform Vision']);
            } else {
                header('Location: index.php');
            }
        }

        public function action_default(){
            return $this->action_formaddbdl();
        }
    }
?>