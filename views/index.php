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
					<?php 
					foreach ($blogPosts as $blogPost)
					{
						echo '<div class="blog-post">';
						echo '<h2>'.$blogPost['title'].'</h2>';
						echo '<p>30 de Abril, 2017 por <a href="#">Ángel Cabrera</a></p>';
						echo '<div class="blog-post-image">';
						echo '<img src="images/oasis.jpg" alt="" style="max-width: 100%;">';
						echo '<div class="blog-post-content">';
						echo $blogPost['content'];
						echo '</div>';
						echo '</div>';
						echo '</div>';
					}

					?>
				</div>
				<div class="col-md-4">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut quod assumenda laboriosam aperiam illo ullam magni, officia earum esse totam. Dolore ea dolor quaerat eaque perferendis cupiditate reprehenderit quod laborum!
				</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<footer>
					Blog Ángel &copy;<br>
					<a href="admin/index.php">Admin Panel</a>
				</footer>
			</div>
		</div>
	</div>
</body>
</html>
