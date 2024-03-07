<?php
require_once 'feedback_table.php';


function displayAllFeedback() {

    $feedbackData = feedback_table::getAllFeedback();

    $output = "";

    if (!empty($feedbackData)) {
        foreach ($feedbackData as $feedback) {
            $feedbackText = htmlspecialchars($feedback->getFeedback());
            $authorText = htmlspecialchars($feedback->getAuthor());
            $output .= "<p>$feedbackText ($authorText)</p>";
        }
    } else {
        $output .= "<p>No feedback data found.</p>";
    }

    return $output;
}

