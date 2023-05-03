<?php
// stampare
echo "ciao";

// variabile
$username = "Mirko";
echo "ciao $username";

// concatenazione
echo "ciao " . $username;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- La variabile vive in tutte il file -->
    <h2>Ciao <?php echo $username; ?></h2>

    <!-- Si può fare anche il processo contrario -->
    <?php 
    echo "<p>Ciao iuser</p>";
    ?>
</body>
</html>