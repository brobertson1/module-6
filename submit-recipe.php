<?php
    // get the data to insert into the db
    $title = $_POST["title"];
    $author = $_POST["author"];
    $ingredients = $_POST["ingredients"];
    $directions = $_POST["directions"];


    // insert the data with the sql query
    include_once 'db_connect.php';
     $sql="INSERT INTO posts (title, author, ingredients, directions) VALUES ('" . $title . "','" .  $author . "','" . $ingredients . "','" . $directions . "')";
    $result = mysqli_query($conn, $sql);
 

 // redirect to homepage
 header("Location: index.php");
?>