<?php
    class Controller_admin extends Controller{
        public function action_adminmenu(){
            if(isLogged() && in_array(getCurrentRole(), ['Administrateur', 'SuperAdmin'])){
                $this->render("adminmenu", ['title' => 'Administrateur | SAS Perform Vision']);
            } else {
                header('Location: index.php');
            }
        }

        public function action_default(){
            return $this->action_adminmenu();
        }
    }
?>