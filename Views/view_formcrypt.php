<?php require 'Views/view_no_navbar.php'?>

<?php
    function crypter($txt){
        $string = "";
        foreach(str_split($txt) as $i => $char){
            if($char != "Z" or $char != "z"){
            $string = $string . chr(ord($char) + 1);} else {
                $string = $string . $char;
            }
        }
        return $string;
    }
?>

<p>Original :</p>
<?php foreach($info as $k => $v): ?>
    <p><?=e($k)?>: <?=e($v)?></p>
<?php endforeach ?>

<p>Translittération :</p>
<?php foreach($info as $k => $v): ?>
    <p><?=e($k)?>: <?=e(crypter($v))?></p>
<?php endforeach ?>

<?php require 'Views/view_end.php'?>