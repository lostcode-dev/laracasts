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
    <div>
        <h1>Recommended Books</h1>

        <?php
        $books = [
            'Do Andriods Dream of Electric Sheep',
            'The langoliers',
            'Hail Mary'
        ]
        ?>
        <ul>
            <?php foreach ($books as $book) {
                echo "<li>$book</li>";
            } ?>
            <?php foreach ($books as $book) : ?>
                <li><?= $book ?></li>
            <?php endforeach ?>
        </ul>
    </div>
</body>

</html>