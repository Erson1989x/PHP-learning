
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
/* function filter($items, $fn)
    {
        $filteredItems = [];

        foreach ($items as $item) {
            if ($fn($item)) {
                $filteredItems[] = $item;
            }
        }
        return $filteredItems;
    }
    $author = "author"; */
$filteredBooks = array_filter($books, function ($book) {
    return $book["year"] < 2000 && $book["genre"] == "Fantasy";
});

require "index.view.php";