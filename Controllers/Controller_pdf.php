<?php

require_once('vendor\tecnickcom\tcpdf\tcpdf.php'); 

class Controller_pdf extends Controller{
    public function action_genpdf(){
        $m = Model::getModel();
        $m->generatePdf();
    }

    public function action_default(){
        return $this->action_genpdf();
    }

}
?>
