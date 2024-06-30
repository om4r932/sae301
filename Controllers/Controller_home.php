<?php
    class Controller_home extends Controller{
        public function action_home(){
            $m = Model::getModel();
            if(isLogged()){
                $this->render('home', ['title' => "Acceuil | SAS Perform Vision"]);
            } else {
                $this->render('login', ['title' => 'Connexion | SAS Perform Vision', 'message' => "Vous devez être connecté.e afin d'accéder à cette page"]);
            }
        }

        public function action_login(){
            $m = Model::getModel();
            $user = $m->getUserInfoEmail($_POST['user']);
            if(isset($_POST['user']) and isStringEmail($_POST['user']) and isset($_POST['pass']) and $m->isInDatabaseEmail($_POST['user']) and $user['motdepasse'] == $_POST['pass']){
                $_SESSION['logged'] = chiffrer($user['id_personne']);
                header('Location: index.php');
            } else {
                $this->render('login', ['title' => 'Connexion | SAS Perform Vision', 'message' => "Email/mot de passe incorrect"]);
            }
        }

        public function action_disconnect(){
            if (isset($_SESSION['logged'])){
                unset($_SESSION['logged']);
                session_destroy();
                header("Location: index.php");
            }
        }

        public function action_formchangemdp(){
            $m = Model::getModel();
            $this->render('newmdp', ['title' => "Modification du mot de passe | SAS Perform Vision", 'id' => $m->getUserInfoEmail($_POST['user'])['id_personne']]);
        }

        public function action_formforgetmdp(){
            $this->render('mdp', ['title' => "Réinitialisation du mot de passe | SAS Perform Vision"]);
        }

        public function action_changemdp(){
            $m = Model::getModel();
            if(isset($_POST["npass"]) && isset($_POST["cpass"])){
                if($_POST["npass"] == $_POST["cpass"]){
                    $m->newmdp($_POST['id'],$_POST["npass"]);
                    $this->render("login", ["message"=> "Le mot de passe a été modifié avec succés"]);
                }
            }
        }

        public function action_contact(){
            $this->render('contact', ['title' => "Nous contacter | SAS Perform Vision"]);
        }

        public function action_default(){
            return $this->action_home();
        }
    }
?>