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
            [
                'name' => 'Do Andriods Dream of Electric Sheep',
                'author' => 'Philip K. Dick',
                'purchaseUrl' => 'http://example.com',
            ],
            [
                'name' => 'The langoliers',
                'author' => 'Andy Weir',
                'purchaseUrl' => 'http://example.com',
            ],
        ]
        ?>
        <ul>
            <?php foreach ($books as $book): ?>
                <li><?= $book['name'] ?> - <?= $book['author'] ?></li>
            <?php endforeach ?>
        </ul>
    </div>
</body>

</html>