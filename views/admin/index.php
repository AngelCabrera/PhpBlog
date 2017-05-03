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
				<h2>Admin Panel</h2>
				<ul>
					<li>
						<a href="<?php echo BASE_URL;?>admin/posts">Manage Posts</a>
					</li>
				</ul>
			</div>
			<div class="col-md-4">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut quod assumenda laboriosam aperiam illo ullam magni, officia earum esse totam. Dolore ea dolor quaerat eaque perferendis cupiditate reprehenderit quod laborum!
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<footer>
					Blog Ángel &copy;<br>
					<a href="<?php echo BASE_URL;?>">Main Page</a>
				</footer>
			</div>
		</div>
	</div>
</body>
</html>
