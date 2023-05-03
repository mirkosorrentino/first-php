<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <?php
    // $name = $_GET["name"];
    // $last_name = $_GET["last_name"];
    // ?>
    <h1>Ciao sono <?php echo $name; ?>. Il mio cognome è <?php echo $last_name; ?>.</h1> -->

    <form action="greeting.php">
        <label for="username">Nome</label>
        <input type="text" id="username" name="username">

        <label for="username">Cognome</label>
        <input type="text" id="lastname" name="lastname">

        <button type="submit">Invia</button>
    </form>
</body>
</html>