<?php include('connect.php'); ?>
<html>
 <head>
<title>Scoreboard</title>
</head>
<body>






<?php
		
		echo "<table border='1' align='center' >";

			
				echo "<th>";
				echo "ID";
				echo "</th>";
				echo "<th>";
				echo "Name";
				echo "</th>";
				
				
				
			$getUsersQuery = "SELECT * FROM users";
			$getUsersQueryResult = mysql_query($getUsersQuery) or die('Error: getUsersQuery '.mysql_error());
			while($row = mysql_fetch_array($getUsersQueryResult)){ //mysql_fetch_row & mysql_num_rows
				$ID = $row['id'];
				$name = $row['name'];
				
				echo "<tr>";
				echo "<td>";
				echo $id;	
				echo "</td>";
				
				echo "<td>";
				echo $name;	
				echo "</td>";
				
				
				
			}
			echo "</table>";
		?>
		</body>

		</html>