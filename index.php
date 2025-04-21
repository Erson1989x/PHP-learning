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
    $read = true;
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

    <h2>Recomanded books</h2>
    <?php $books = [
        "The Lord of the Rings",
        "Harry Potter",
        "Game of Thrones"
    ]; ?>
    <ul>
        <?php foreach ($books as $book) : ?>
            <li><?= $book; ?></li>
        <?php endforeach; ?>
    </ul>

    <li><?= $books[0]; ?></li>

    <?php $books = [
        [
            "name" => "The Lord of the Rings",
            "author" => "L.R. Tolkien",
            "genre" => "Fantasy",
            "year" => "1954",
        ],
        [
            "name" => "Harry Potter",
            "author" => "J.K. Rowling",
            "genre" => "Fantasy",
            "year" => "1997",
        ],
        [
            "name" => "Game of Thrones",
            "author" => "G.R.R. Martin",
            "genre" => "Fantasy",
            "year" => "1996",
        ],
        [
            "name" => "The Hitchhiker's Guide to the Galaxy",
            "author" => "Douglas Adams",
            "genre" => "Science Fiction",
            "year" => "1979",
        ],

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
    $author = "author";
    $filteredBooks = filter(function ($book) {
        return $book["year"] < 1990 ;
    }, $books);
    ?>
    <ul>
        <?php foreach ($filteredBooks as $book) : ?>
            <li>
                <h3><?= $book["name"]; ?></h3>
                <p>Author: <?= $book["author"]; ?></p>
                <p>Genre: <?= $book["genre"]; ?></p>
                <p>Year: <?= $book["year"]; ?></p>
            </li>
        <?php endforeach; ?>
    </ul>

</body>

</html>