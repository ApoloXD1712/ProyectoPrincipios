<?php

include 'conexion_BD.php';

class Comment {
    public $id;
    public $created_at;
    public $description;
    public $author;
    public $stories_id;

    public static function store($description, $author, $stories_id) {
        // mysqli query to store story
        global $conexion;
        mysqli_query($conexion, "INSERT INTO comments (description, author, stories_id) VALUES ('$description', '$author', '$stories_id')");
    }

    public static function getByStoriesId($stories_id) {
        // mysqli query of all stories
        global $conexion;
        $comment = mysqli_query($conexion, "SELECT * FROM comments WHERE stories_id = $stories_id");
        return $comment;
    }
}