<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, width=device-width">
       <title>Spelling Bug</title>
        <link rel="stylesheet" href="js/jquery.mobile-1.4.5.min.css" />
        <script src="js/jquery.js"></script>
        <script src="js/jquery.mobile-1.4.5.min.js"></script>

    </head>


<?php include('connect.php'); ?>

<?php  
    
    $sql = "SELECT * FROM users";
    $query = mysqli_query($conn, $sql);

    if(mysqli_num_rows($query) > 0){
        while($row = mysqli_fetch_assoc($query)){
            echo '<ul data-role="listview" data-inset="true" data-filter="true" data-input="#filter-for-listview">';
                echo '<li><a>'.$row['name'].'</a></li>';
            echo '</ul>';
           
        }echo'<button onclick="goBack()">Go Back</button>';
    }
?>
 <script type="text/javascript">
            
function goBack() {
    window.history.back();
}

        </script>
        <script type="text/javascript" src="cordova.js">

        </script>

    </body>
</html>