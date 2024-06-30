<?php
    class Controller_bdl extends Controller{
        public function action_listbdl(){
            $this->render('listbdl', ['title' => 'Liste des BDLs | SAS Perform Vision']);
        }

        public function action_formaddbdl(){
            $this->render('formaddbdl', ['title' => 'Ajouter un BDL | SAS Perform Vision']);
        }

        public function action_default(){
            return $this->action_listbdl();
        }
    }
?>