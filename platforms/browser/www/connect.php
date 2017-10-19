<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "spell_game_app";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if(!$conn){
        die("Connection failed".mysqli_connect_error());
        $sql="INSERT INTO my_words (id, easy) VALUES ('2', 'dog')";
$query=mysqli_query($conn, $sql);
    }
?>