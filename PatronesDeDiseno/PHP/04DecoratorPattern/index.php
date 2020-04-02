<?php
// index.php
include_once('PrettyPrint.php');

$book = new stdClass();

$book->title = "Modern PHP";
$book->author_first_name = "Josh";
$book->author_last_name = "Lockhart";

$bookFormatter = new PrettyPrint($book);

echo $book->title . " es un libro escrito por: " . $bookFormatter->getAuthor() . "<br>";
echo "Pero encontrarás el libro de esta forma: " . $bookFormatter->getAuthorSortable() . "<br>";
