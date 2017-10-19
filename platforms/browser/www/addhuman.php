<?php include('connect.php') ?>

<?php
    
    $firstname = $_GET['name'];


    $sql = "INSERT INTO profile (name) VALUES ('$Playername')";
    $query = mysqli_query($conn, $sql);
    

?>