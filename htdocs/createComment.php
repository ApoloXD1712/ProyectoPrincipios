<?php

include 'comment.php';

if((isset($_POST['description']) && isset($_POST['author'])) && isset($_POST['stories_id'])) {
    Comment::store($_POST['description'], $_POST['author'], $_POST['stories_id']);
}

header("location: /pagina.php");
exit();

?>