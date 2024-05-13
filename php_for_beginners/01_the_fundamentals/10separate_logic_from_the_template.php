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

$filter = function ($items, $fn) {
    $filteredItems = [];

    foreach ($items as $item) {
        if ($fn($item)) {
            $filteredItems[] = $item;
        }
    }

    return $filteredItems;
};

$filteredBooks = $filter($books, function ($book) {
    return $book['releaseYear'] >= 2011;
});


require "10separate_logic_from_the_template.view.php";