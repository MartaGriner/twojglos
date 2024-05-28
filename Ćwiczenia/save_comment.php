<?php
$comment = $_POST['comment'];
if ($comment) {
    $comment = htmlspecialchars($comment); // Sanityzacja danych
    $file = 'comments.txt';
    file_put_contents($file, $comment . "\n", FILE_APPEND);
}
?>
