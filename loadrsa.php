<?php // Ce script est utilisé pour la gestion des sessions
    require 'vendor/autoload.php';
    use phpseclib3\Crypt\PublicKeyLoader;
    use phpseclib3\Crypt\RSA;
    
    $m = Model::getModel();
    
    function chiffrer($donnee){
        return base64_encode(PublicKeyLoader::loadPrivateKey(file_get_contents('Keys/private_key.pem'))->getPublicKey()->encrypt($donnee));
    }
    
    function dechiffrer($donnee){
        return PublicKeyLoader::loadPrivateKey(file_get_contents('Keys/private_key.pem'))->decrypt(base64_decode($donnee));
    }
?>