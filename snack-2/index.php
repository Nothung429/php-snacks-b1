<!-- Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php
    $example = ["Pino", "34", "pino.insegno@hotmail.com"];
    
    $name = $_GET["name"];
    $age = $_GET["age"];
    $email = $_GET["email"];

    function validateName($name) {
        if (strlen($name) > 3) {
            return $name;
        } else {
            return "Minimum 3 letters";
        };
    };

    function validateAge($age) {
        if (is_numeric($age) && ($age) < 100) {
            return $age;
        } else {
            return "Insert a valid number";
        };
    };

    function validateEmail($email) {
        $regex = "/^([a-zA-Z0-9\.]+@+[a-zA-Z]+(\.)+[a-zA-Z]{2,3})$/";
        if (preg_match($regex, $email) == true) {
            return $email;
        } else {
            return "Insert a valid e-mail";
        }
    };

    $account = [validateName($name), validateAge($age), validateEmail($email)];
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Account Verification</title>
    </head>

    <body>
        <h1>Account Verification</h1>
        <form action="" method="get">
            <input type="text" name="name" placeholder="Insert your name">
            <input type="text" name="age" placeholder="Insert your age">
            <input type="text" name="email" placeholder="Insert your email">
            <button type="submit">Verify</button>
        </form>
        <h3>Example</h3>
        <p><?= $example[0]?> - <?= $example[1]?> - <?= $example[2]?></p>
        <h3>Your Datas</h3>
        <p><?= $account[0]?> - <?= $account[1]?> - <?= $account[2]?></p>        
    </body>
</html>