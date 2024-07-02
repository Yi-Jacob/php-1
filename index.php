<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    <?php
    $var = "Hello World222";
    $books = [
        [
            "title" => "The Hobbit",
            "author" => "J.R.R. Tolkien",
            "pages" => 310
        ],
        [
            "title" => "The Great Gatsby",
            "author" => "F. Scott Fitzgerald",
            "pages" => 180
        ],
        [
            "title" => "The Catcher in the Rye",
            "author" => "J.D. Salinger",
            "pages" => 220
        ]
    ];
    ?>
    <ul>
    <?php foreach ($books as $book) : ?>
        <li><?= $book['pages']; ?></li>
    <?php endforeach; ?>
    </ul>
   
</body>
</html>