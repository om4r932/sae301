<?php
    class Controller_moncompte extends Controller{
        public function action_viewcompte(){
            if(isLogged()){
            $m = Model::getModel();
            $this->render('moncompte', ['title' => 'Mon Compte | SAS Perform Vision', 'user' => $m->getUserInfoId(dechiffrer($_SESSION['logged']))]);
            } else {
                header('Location: index.php');
            }
        }

        public function action_default(){
            return $this->action_viewcompte();
        }
    }
?>