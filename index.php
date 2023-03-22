<?php
    $lengthPassword =$_GET['length'];
    $characters ='ABCDEFGHIKLMNOPQRSTUVXYZabcdefghiklmnopqrstuvxyz1234567890@!?_-&%';
    function createPw($lengthPassword,$characters) {
        $newPass='';
        for($i=0; $i< $lengthPassword; $i++){
            $character=$characters[rand(0, strlen($characters))];
            newPass_push($character);
        }
        return $newPass;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Strong Password Generator</title>
</head>
<body>
    <main>
        <h1>Strong Password Generator</h1>
        <form action="" method="GET">
            <input type="text" name="length" placeholder="Lunghezza password">
            <button type="submit">Invia</button>
        </form>
        <p><?php echo $lengthPassword; ?></p>
        <p><?php echo $characters; ?></p>
        <p><?php echo createPw($lengthPassword,$characters); ?></p>
    </main>
</body>
</html>
