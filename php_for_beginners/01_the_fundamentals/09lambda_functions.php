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
                'releaseYear' => 1968,
                'purchaseUrl' => 'http://example.com',
            ],
            [
                'name' => 'The langoliers',
                'author' => 'Andy Weir',
                'releaseYear' => 2021,
                'purchaseUrl' => 'http://example.com',
            ],
            [
                'name' => 'The Martian',
                'author' => 'Andy Weir',
                'releaseYear' => 2011,
                'purchaseUrl' => 'http://example.com',
            ],
        ];

        $filter = function ($items, $fn)
        {
            $filteredItems = [];

            foreach ($items as $item) {
                if($fn($item)) {
                    $filteredItems[] = $item;
                }
            }

            return $filteredItems;
        };

        $filteredBooks = $filter($books, function ($book) {
            return $book['releaseYear'] >= 2011;
        });
        ?>
        <ul>
            <?php foreach ($filteredBooks as $book) : ?>
                <li>
                    <a href="<?= $book['purchaseUrl'] ?>">
                        <?= $book['name'] ?> (<?= $book['releaseYear'] ?>) - By <?= $book['author'] ?>
                    </a>
                </li>
            <?php endforeach ?>
        </ul>
    </div>
</body>

</html>