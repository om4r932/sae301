<?php
    class Controller_listbdl extends Controller{
        public function action_listbdl(){
            if(isLogged() && in_array(getCurrentRole(), ['Administrateur', 'SuperAdmin', 'Gestionnaire'])){
                $this->render('listbdl', ['title' => "Liste des BDLs | SAS Perform Vision"]);
            } else {
                header('Location: index.php');
            }
        }
        public function action_default(){
            return $this->action_listbdl();
        }
    }
?>