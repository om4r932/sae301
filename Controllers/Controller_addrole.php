<?php
    class Controller_addrole extends Controller{
        public function action_formaddbdl(){
            if(isLogged() && in_array(getCurrentRole(), ['Administrateur', 'SuperAdmin'])){
                $this->render('formaddrole', ['title' => 'Ajouter rôle | SAS Perform Vision']);
            } else {
                header('Location: index.php');
            }
        }

        public function action_default(){
            return $this->action_formaddbdl();
        }
    }
?>