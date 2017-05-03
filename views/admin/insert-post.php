<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Blog de Ángel con Bootstrap</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1>El Blog de Ángel</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-md-8">
				<div>
				<h2>New Post</h2>
				<p>
					<a href="<?php echo BASE_URL;?>admin/posts" class="btn btn-default">Regresar</a>
					<?php
						if(isset($result) && ($result)){
							echo '<div class="alert alert-success">Post agregado!</div>';
						}
					?>
				</p>

				<form method="POST">
				<br>
					<div class="form-group">
						<label for="inputTitle">Title</label>						
						<input class="form-control" type="text" name="title" id="inputTitle">
					</div>
					<textarea class="form-control" name="content" id="inputContent" cols="" rows="5"></textarea>
					<br>
					<input class="btn btn-primary" type="submit" vale="Save">
					
				</form>
				</div>
			</div>
				
			<div class="col-md-4">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut quod assumenda laboriosam aperiam illo ullam magni, officia earum esse totam. Dolore ea dolor quaerat eaque perferendis cupiditate reprehenderit quod laborum!
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<footer>
					Blog Ángel &copy;<br>
					<a href="<?php echo BASE_URL;?>admin">Admin Panel</a>
				</footer>
			</div>
		</div>
	</div>
</body>
</html>
