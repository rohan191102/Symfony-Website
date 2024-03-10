<?php
require_once 'book_table.php';
function displayBooks() {

    $bookData = book_table::getAllBooks();

    $output = "";

    if (!empty($bookData)) {
        foreach ($bookData as $book) {
            $bookText = htmlspecialchars($book->getTitle());
            $output .= "<li>$bookText</li><br>";
        }
    } else {
        $output .= "<p>No feedback data found.</p>";
    }

    return $output;
}


?>