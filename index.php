<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css" type="text/css" media="screen" />
    <title>PHP</title>
</head>
<body class="container">

<?php
        $name = "Dark Matter";
        $read =true;
         if ($read) {
            $message = "You have read this book $name";
        } else {
            $message = "You have not read this book $name";
         }
        ?>
    <h1>
        <?php echo $message; ?>
        <?= $message ?>
    </h1>
</body>
</html>