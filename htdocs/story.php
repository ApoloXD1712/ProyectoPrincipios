<?php

include 'conexion_BD.php';

class Story {
    public $id;
    public $created_at;
    public $description;
    public $category;

    public static function store($description,$category) {
        // mysqli query to store story
        global $conexion;
        mysqli_query($conexion, "INSERT INTO stories (description,category) VALUES ('$description','$category')");
    }

    public static function getAll() {
        // mysqli query of all stories
        global $conexion;
        $stories = mysqli_query($conexion, "SELECT * FROM stories");
        return $stories;
    }
}