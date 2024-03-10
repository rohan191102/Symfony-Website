<?php
require_once 'feedback_table.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $author = $_POST["author"];
    $feedback_content = $_POST["feedback"];

    $feedback = new feedback_table($feedback_content);
    $feedback->setAuthor($author);
    $feedback->save();
    exit();
}
else {
    echo "Invalid request";
}
?>
