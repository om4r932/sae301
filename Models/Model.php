<?php

class Model
{
    private $bd;
    private static $instance = null;

    private function __construct()
    {
        include "credentials.php";
        $this->bd = new PDO($dsn, $login, $mdp);
        $this->bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->bd->query("SET nameS 'utf8'");
    }

    public static function getModel()
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function getUserInfoId($id){
        $requete = $this->bd->prepare('Select * from personne WHERE id_personne = :id');
        $requete->bindValue(':id', $id);
        $requete->execute();
        return $requete->fetch(PDO::FETCH_ASSOC);
    }

    public function getUserInfoEmail($email){
        $requete = $this->bd->prepare('Select * from personne WHERE mail = :mail');
        $requete->bindValue(':mail', $email);
        $requete->execute();
        return $requete->fetch(PDO::FETCH_ASSOC);
    }

    public function getAllPersonnes(){
        $req = $this->bd->query('select * from personne');
        return $req->fetchAll();
    }

    public function isInDatabaseEmail($email){
        return $this->getUserInfoEmail($email) !== false;
    }

    public function addPerson($nom, $prenom, $fonction){
        $req = $this->bd->prepare("insert into personne (nom, prenom, mail, motdepasse, telephone) values (:nom, :prenom, 'null@null.null', 'null123', '1')");
        $req2 = $this->bd->prepare("insert into $fonction values (:id)");
        $i = 0;
        while($this->isInDatabaseId($i) !== false){
            $i++;
        }
        $req->bindValue(':nom', $nom);
        $req->bindValue(':prenom', $prenom);
        $req->execute();
        $req2->bindValue(':id',$this->getUserInfoNomPrenom($nom, $prenom)['id_personne']);
        $req2->execute();
    }

    public function delPerson($id){
        $req = $this->bd->prepare("delete from ". $this->getIdRole($id) . " where id_personne = :id");
        $req2 = $this->bd->prepare("delete from personne cascade where id_personne = :id");
        $req->bindValue(':id', $id);
        $req2->bindValue(':id', $id);
        $req->execute();
        $req2->execute();
    }

    public function modifPerson($newInfo){
        $req = $this->bd->prepare("update personne set nom=:nom, prenom=:prenom where id_personne = :id");
        $req2 = $this->bd->prepare("delete from ". $newInfo['oldfonction'] . " where id_personne = :id");
        $req3 = $this->bd->prepare("insert into ". $newInfo['fonction'] . " values (:id)");
        
        $req->bindValue(':nom', $newInfo['nom']);
        $req->bindValue(':prenom', $newInfo['prenom']);
        $req->bindValue(':id', $newInfo['id']);

        $req2->bindValue(':id', $newInfo['id']);

        $req3->bindValue(':id', $newInfo['id']);

        $req->execute();
        $req2->execute();
        $req3->execute();
    }

    public function getUserInfoNomPrenom($nom, $prenom){
        $requete = $this->bd->prepare('Select * from personne WHERE nom = :nom AND prenom = :prenom');
        $requete->bindValue(':nom', $nom);
        $requete->bindValue(':prenom',$prenom);
        $requete->execute();
        return $requete->fetch(PDO::FETCH_ASSOC);
    }

    public function isInDatabaseId($id){
        return $this->getUserInfoId($id) !== false;
    }

    public function get_mdp($id){
        $requete = $this->bd->prepare('Select motDePasse from Personne WHERE id_personne = :id');
        $requete->bindValue(':id', $id);
        $requete->execute();
        $res = $requete->fetch(PDO::FETCH_ASSOC);
        return $res["motDePasse"];
    }

    public function getBDL($id, $first, $last){
        $requete = $this->bd->prepare('SELECT * FROM BDL, ');
    }

    public function newmdp($id, $mdp){
        $requete = $this->bd->prepare('UPDATE personne SET motDePasse = :mdp WHERE id_personne = :id'); //requete modifiant un mot de passe pour une id
        $requete->bindValue(':id', $id);
        $requete->bindValue(':mdp', $mdp);
        $requete->execute();

    }

    public function generatePdf(){
        $sql = "SELECT id_composante, id_personne_1, annee, mois, signatureinterlocuteur, signatureprestataire, commentaire, id_personne, id_personne_2 FROM bdl";
        $stmt = $this->bd->query($sql);

        $pdf = new TCPDF();
        $pdf->AddPage();

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $pdf->Cell(0, 10, 'Mois ' . $row['mois'], 0, 1);
            $pdf->Cell(0, 10, 'Année ' . $row['annee'], 0, 1);
            $pdf->Cell(0, 10, 'Identifiant Composante ' . $row['id_composante'], 0, 1);
            $pdf->Cell(0, 10, 'Identifiant Personne ' . $row['id_personne1'], 0, 1);
            $pdf->Cell(0, 10, 'Signature Interlocuteur' . $row['signatureinterlocuteur'],' - Signature Prestataire ' . $row['signatureprestataire'], 0, 1);
            $pdf->Cell(0, 10, 'Commentaire ' . $row['commentaire'], 0, 1);
            $pdf->Cell(0, 10, 'Identifiant Personne 2' . $row['id_personne2'], 0, 1);
        $pdf->Cell(0, 10, '', 0, 1); // Ajouter une ligne vide entre les enregistrements
    }

        $pdf_filename="bdl.pdf";
        $chemin_output = $_SERVER['DOCUMENT_ROOT'] . "PDF/" . $pdf_filename;
        ob_clean();
        $pdf->Output($chemin_output, 'FI');
    }

    public function getIdRole($id){
        if($id == 0){return 'SuperAdmin';}
        $role = ['Administrateur', 'Gestionnaire', 'Commercial', 'Prestataire', 'Interlocuteur'] /*+ 'Administrateur'*/; // A noter: Créer une table Administrateur qui répertorie tous les admins (sans le superadmin) dedans
        foreach ($role as $v) {
            $stmt = "SELECT * FROM $v WHERE id_personne = :id";
            $requete = $this->bd->prepare($stmt);
            $requete->bindValue(':id', $id);
            $requete->execute();
            $res = $requete->fetch(PDO::FETCH_ASSOC);
            if($res != false){return $v;}
        }
        return 'Client';

    }
}
