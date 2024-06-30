<?php
    class Controller_client extends Controller{
        public function action_listclient(){$this->render('listeprestaInterlo', ['title' => 'Liste des clients | SAS Perform Vision']);}
        public function action_gestclient(){$this->render('gestficheclient', ['title' => 'Fiche client | SAS Perform Vision']);}
        public function action_default(){$this->action_listclient();}
    }
?>