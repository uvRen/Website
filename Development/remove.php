<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	</head>
	<body>
		<script>
			$( document ).ready(function() {
    			document.getElementById('browseBtn').onclick = function() {
    				document.getElementById('hiddenFile').click();
    			};
    			$('input[type=file]').change(function (e) {
	    			document.getElementById('fileLocation').value = $(this).val();
				});
			});
		</script>
		<div class="page-header">
			<center>
				<img src="https://raygun.com/blog/wp-content/uploads/2016/05/nodejs-logo.png" />
			</center>
		</div>
		<div>
			<ul class="nav nav-pills nav-justified">
  				<li><a href="index.php">Home</a></li>
  				<li><a href="upload.php">Upload</a></li>
  				<li><a href="remove.php">Remove</a></li>
			</ul>
		</div>
		<div class="jumbotron">
			<div style="text-align: center;">
				<div style="width: 50%; align: center; display: inline-block">
					<h1>Flow</h1>
					<p>Örebro</p>
					
						<?php
							// Establish connection to database
							$conn = mysql_connect("localhost", "root", "bugocheat") or die(mysql_error());
							//Select database
							$db = mysql_select_db("joel");
							$query = "SELECT * FROM flow ORDER BY id DESC";
							$response = mysql_query($query);
							while($row = mysql_fetch_array($response)) {
								echo '<form method="post" action="removepost.php">';
									echo '<div class="row">';
										echo '<div class="col-md-12">';
											echo '<div class="thumbnail">';
												echo '<img src="'.$row["image"].'" alt="...">';
												echo '<div class="caption">';
													echo '<h3>'.$row["title"].'</h3>';
													echo '<p>'.$row["content"].'</p>';
													echo '<input name="id" value="'.$row["id"].'" style="display: none" />';
													echo '<input name="file" value="'.$row["image"].'" style="display: none" />';
													echo '<input type="submit" class="btn btn-default" value="Delete"></input>';
												echo '</div>';
											echo '</div>';
										echo '</div>';
									echo '</div>';
								echo '</form>';
							}
							mysql_close();
						?>
				</div>
			</div>
		</div>
	</body>
</html>