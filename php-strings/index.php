<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $lorem = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum quas laudantium, quam culpa, exercitationem necessitatibus, atque error facilis quisquam modi facere sit tempore id vitae animi veniam distinctio. Sapiente, a."
    ?>
    <h2>Stampo</h2>
    <p>
        <?php
        echo $lorem;
        ?>
    </p>

    <?php 
        $lorem_exploded = explode(",", $lorem);
    ?>
    <h2>Stampo</h2>
    <p>
        <?php
        var_dump($lorem_exploded);
        ?>
    </p>

    <?php 
        $lorem_replace = str_replace ("Lorem", "gioia", $lorem);
    ?>
    <h2>Stampo</h2>
    <p>
        <?php
        echo($lorem_replace);
        ?>
    </p>
</body>
</html>