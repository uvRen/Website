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
		<div class="jumbotron">
			<div style="text-align: center;">
				<div style="width: 50%; align: center; display: inline-block">
					<h1>Upload</h1>
					<p>Form</p>
					<form method="post" action="action.php" enctype="multipart/form-data">
						<div class="input-group">
							<input id="title" name="title" class="form-control" placeholder="Title"/>
							<span class="input-group-addon" />
						</div>
						<div class="input-group">
							<input id="content" name="content" class="form-control" placeholder="Content"/>
							<span class="input-group-addon" />
						</div>
						<div class="input-group">
							<input id="fileLocation" name="fileLocation"type="text" class="form-control" placeholder="Image to upload">
						     <span class="input-group-btn">
						        <button value="Browse..." id="browseBtn" class="btn btn-default" type="button">Browse...</button>
						     </span>
						     <input type="file" name="file" id="hiddenFile" style="display: none"/>
						</div>
						 <div class="btn-group btn-group-justified">
                            <div class="btn-group">
                                <input type="submit" value="Upload" name="submit" class="btn btn-default"></button>
                            </div>
						</div>
					</form>
				</div>
			</div>
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
							echo '<div class="row">';
								echo '<div class="col-md-12">';
									echo '<div class="thumbnail">';
										echo '<img src="'.$row["image"].'" alt="...">';
										echo '<div class="caption">';
											echo '<h3>'.$row["title"].'</h3>';
											echo '<p>'.$row["content"].'</p>';
										echo '</div>';
									echo '</div>';
								echo '</div>';
							echo '</div>';
						}
					?>
				</div>
			</div>
		</div>
	</body>
</html>