<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles.css" />
    <title>Demo</title>

</head>
<body>
    <p>
        <?php
            $greeting = "Hello";
            // echo $greeting . "world";
            echo "$greeting world";
        ?>
    </p>

    <?php
        $name = "Dark Matter";
        $read = true;

        if ($read) {
            $message = "You have read  $name ";
        } else {
            $message = "You have NOT read $name";
        }
    ?>
    <p>
        <!-- <?php echo $message;  ?> -->
        <?= $message ?>
        
    </p>
    
    <?php 
        $books = [
            "Philip K. Dick - Do Androids dream of electric sheep?",
            "Steven King - The Langoliers",
            "Andy Weir - Hail Mary"
        ];

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

            function filterByAuthor($films, $director) {
                $filteredFilms = [];

                foreach ($films as $film) {
                    if ($film['director'] == $director) {
                        $filteredFilms[] = $film;
                    }
                }

                return $filteredFilms;
            }

            function filterByYear($films, $year) {
                $filteredFilms = [];

                foreach ($films as $film) {
                    if ($film['year'] >= $year) {
                        $filteredFilms[] = $film;
                    } 
                }
                return $filteredFilms;
            }

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
    ?>

    <p>Recommended books</p>
    <ul>
        <!-- <?php foreach ($books as $book) {
            echo "<li>$book</li>";
        }
        ?> -->
        <?php foreach ($books as $book) : ?>
            <li><?= $book ?></li>
        <?php endforeach; ?>
    </ul>

    <p>
        <?= $books[2] ?>
    </p>

    <ul>Filmy
    <?php foreach ($films as $film) : ?>
        <?php if ($film['director'] == 'Robert Zemeckis') : ?>
        <li>
            <a href="<?= $film['link']?>">    
                <?= $film['name'] . " | " . $film['year'] ?>
            </a>
        </li>
        <?php endif ?>
    <?php endforeach; ?>
    </ul>
    

    <h5>Filtered film</h5>
    <?php foreach (filterByAuthor($films, 'Frank Darabont') as $film) : ?>
        <li>
            <a href="#">
                <?= $film['name']; ?> - <?= $film['director']; ?>
            </a>
        </li>
    <?php endforeach; ?>

    <h5>Filtered by year</h5>
    <?php foreach (filterByYear($films, 1990) as $film) : ?>
        <li>
            <?= $film['name']; ?> - <?= $film['year'] ?>
        </li>
    <?php endforeach; ?>

    <h5>Filtered new</h5>
    <?php foreach ($filteredFilmsNew as $film) : ?>
        <li>
            <?= $film['name']; ?> - <?= $film['year'] ?>
        </li>
    <?php endforeach; ?>
</body>
</html>