<?php include 'constant.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <script src="index.js"></script>
    <title>
        <?php
            echo Title;
        ?>
    </title>
</head>
<body>

    <?php
    
    $test = "Horoscope";
    $heh = $test;
    echo $heh;

    ?>

    <div class="resultat">
        <input id="input" type="date">
        <button id="saveButton" onclick="saveButton()">Save</button>
        <button id="updateButton" onclick="updateButton()">Update</button>
        <button id="deleteButton" onclick="deleteButton()">Delete</button>
    </div>
    
    <h1></h1>

</body>
</html>