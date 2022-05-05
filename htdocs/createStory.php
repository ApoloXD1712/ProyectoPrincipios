<?php

include 'story.php';

if(isset($_POST['description']) && isset($_POST['category'])) {
    Story::store($_POST['description'], $_POST['category']);
}

header("location: /pagina.php");
exit();
?>