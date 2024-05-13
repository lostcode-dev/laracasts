<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Fundamentals</title>
    <style>
        body {
            display: grid;
            place-items: center;
            height: 100vh;
            margin: 0;
            font-family: sans-serif;
        }
    </style>
</head>

<body>
    <?php
    $name = "Dark Matter";
    $read =  (bool) rand(0, 1);

    if ($read) {
        $message = "You have read $name.";
    } else {
        $message = "You have not read $name";
    }
    ?>
    <h1>
        <?= $message ?>
    </h1>
</body>

</html>