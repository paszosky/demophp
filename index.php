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
</body>
</html>