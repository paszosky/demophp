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
            ]
        ]
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
        <li>
            <a href="<?= $film['link']?>">    
                <?= $film['name'] . " | " . $film['year'] ?>
            </a>
        </li>
    <?php endforeach; ?>
    </ul>
</body>
</html>