<?php
    //$lengthPassword =$_GET['length'];
    //controllo se esiste
    $lengthPassword = isset($_GET['length']) ? $_GET['length'] : null;

    function createPw($lengthPassword) {
        $characters ='ABCDEFGHIKLMNOPQRSTUVXYZabcdefghiklmnopqrstuvxyz1234567890@!?_&%';
        $max = strlen($characters)-1;
        
        $newPass='';
        for($i=0; $i< $lengthPassword; $i++){
            $character=$characters[rand(0, $max)];
            $newPass.=$character;
        }
        return $newPass;
    }
?>