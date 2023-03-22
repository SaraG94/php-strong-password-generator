<!DOCTYPE html>
<?php
    require_once __DIR__ .'/function.php';
    
    //controllo se non è nullo e se è un numero
    if($lengthPassword!== null && is_numeric($lengthPassword)){
        $password = createPw($lengthPassword);

        $text_result ="La password generata è: $password";
    };
?>
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
        <div class="result">
            <!-- se il risultato esiste lo stampo altrimenti stampo un avviso -->
            <h2><?php echo isset($text_result) ? $text_result : 'Impossibile generare password'; ?></h2>
        </div>
        
    </main>
</body>
</html>
