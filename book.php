<?php
$link = new PDO('mysql:host=localhost;dbname=pwl2022', 'root', '');
$link->setAttribute(PDO::ATTR_AUTOCOMMIT, false);
$link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$query = 'SELECT isbn, title, author, publisher, publisher_year, short_description, genre_id, name FROM book INNER JOIN genre ON book.genre_id = genre.id';
$stmt = $link->prepare($query);
$stmt->execute();
$result = $stmt->fetchAll();
$link = null;
?>

<table class="table table-striped table-bordered">
    <thead class="thead-dark">
    <th>Isbn</th>
    <th>Title</th>
    <th>Author</th>
    <th>Publisher</th>
    <th>Publisher_year</th>
    <th>Nama Genre</th>
    </thead>
    <tbody>
    <?php
    foreach ($result as $book){
        echo '<tr>';
        echo '<td>' . $book['isbn'] . '</td>';
        echo '<td>' . $book['title'] . '</td>';
        echo '<td>' . $book['author'] . '</td>';
        echo '<td>' . $book['publisher'] . '</td>';
        echo '<td>' . $book['publisher_year'] . '</td>';
        echo '<td>' . $book['name'] . '</td>';
        echo '</tr>';
    }
    ?>
    </tbody>
</table>
