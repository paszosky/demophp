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

    <h5>Filtered new</h5>
    
    <?php foreach ($filteredFilmsNew as $film) : ?>
        <li>
            <?= $film['name']; ?> - <?= $film['year'] ?>
        </li>
    <?php endforeach; ?>
    
</body>
</html>