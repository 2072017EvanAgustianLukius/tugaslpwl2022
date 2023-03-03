<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <ul class="nav nav-pills nav-fill">
            <li class="nav-item ">
                <a class="nav-link" href="?menu=home">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?menu=genre">Genre <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?menu=book">Book <span class="sr-only">(current)</span></a>
            </li>
        </ul>
</nav>
<!--<nav>-->
<!--    <ul>-->
<!--        <li><a href="?menu=home">Home</a></li>-->
<!--        <li><a href="?menu=genre">Genre</a></li>-->
<!--        <li><a href="?menu=book">Book</a></li>-->
<!--    </ul>-->
<!--</nav>-->
<main>
    <?php
    $navigation = filter_input(INPUT_GET, 'menu');
    switch ($navigation){
        case 'home' :
            include_once 'home.php';
            break;
        case 'genre' :
            include_once 'genre.php';
            break;
        case 'book' :
            include_once 'book.php';
            break;
        default:
            include_once 'home.php';
    }
    ?>
</main>
</body>
</html>