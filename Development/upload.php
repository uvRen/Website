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
	</body>
</html>