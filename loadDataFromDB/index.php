<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="css/css.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script>
		$(document).ready(function() {
			var numberOfComment = 2;
			$("#btn").click(function() {
				numberOfComment += 2;
				$("#div").load("data.php", {
					newNumberOfComment: numberOfComment
				});
			});


		});
	</script>

</head>

<body>
	<?php

	include_once(dirname(__DIR__) . '/DB/db.php');

	$conn = new Db();

	?>

	<div id="div">
		<?php

		$sql = "select * from comments limit 2";
		$result = $conn->connectionMSQLI()->query($sql);
		if ($result->num_rows > 0) {
			while ($row = mysqli_fetch_assoc($result)) {
				echo "<p>";
				echo $row['author'];
				echo "<br>";
				echo $row['message'];
				echo "</p>";
			}
		} else {
			echo "there is nothing to show!";
		}

		?>

	</div>

	<button id="btn">
		show more here
	</button>
</body>

</html>