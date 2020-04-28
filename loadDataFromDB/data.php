<?php

	include_once( dirname(__DIR__) . '/DB/db.php');


    $conn = new Db();

    $newNumberOfComment = $_POST['newNumberOfComment'];

			$sql = "select * from comments limit $newNumberOfComment";
			$result = $conn->connectionMSQLI()->query($sql);
			if( $result->num_rows > 0 )
			{
				while( $row = mysqli_fetch_assoc($result) )
				{
					echo "<p>";
					echo $row['author'];
					echo "<br>";
					echo $row['message'];
					echo "</p>";
				}
			}
			else{
				echo "<p>there is nothing to show!</p>";
			}



?>

