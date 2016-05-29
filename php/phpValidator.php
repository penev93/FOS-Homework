<?php
function emailValidator(){
    $mailValue=$_POST['Email'];
    $pattern='/^\S+@\S+\.\S+$/';
    $isTrue=preg_match($pattern,$mailValue);
    if($isTrue!=1){

    }
};
?>
