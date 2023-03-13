<?php

$films = [
    [
        'name' => 'Miś',
        'director' => 'Stanisław Bareja',
        'year' => 1981,
        'link' => 'https://www.filmweb.pl/film/Mi%C5%9B-1980-896'
    ],
    [
        'name' => 'The Green Mile',
        'director' => 'Frank Darabont',
        'year' => 1999,
        'link' => 'https://www.filmweb.pl/film/Zielona+mila-1999-862'
    ],
    [
        'name' => 'Forrest Gump',
        'director' => 'Robert Zemeckis',
        'year' => 1994,
        'link' => 'https://www.filmweb.pl/film/Forrest+Gump-1994-998'
    ],
    [
        'name' => 'Back to the Future',
        'director' => 'Robert Zemeckis',
        'year' => 1985,
        'link' => 'https://www.filmweb.pl/film/Powr%C3%B3t+do+przysz%C5%82o%C5%9Bci-1985-8823'
        ]
    ];

    function filter($items, $fn)
    {
        $filteredItems = [];
        
        foreach ($items as $item) {
            if ($fn($item)) {
                $filteredItems[] = $item;
            }
        }
        
        return $filteredItems;
    }
    
    $filteredFilmsNew = filter($films, function($film) {
        return $film['director'] == 'Robert Zemeckis';
    });


require "index.view.php";