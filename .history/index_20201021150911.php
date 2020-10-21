<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Projecte Welcome 1</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="templates/style.css">
</head>
<body>
	<div class="title">
		<h1>Projecte Welcome 1</h1>
	</div>	
	<?php 

		$imgs = scandir("./img",SCANDIR_SORT_ASCENDING);
		foreach( $imgs as $img ) {	
			if( substr($img,-3)=="jpg" or substr($img,-3)=="png" or substr($img,-4)=="jpeg") {
				$name = substr($img,0,-4);
				echo "
					<div class='card' style='width: 18rem;'>
						<img class='card-img-top' src='img/$img' alt='Card image cap'>
						<div class='card-body'>
							<a href='profile/$name.html' class='btn btn-primary'>$name</a>
						</div>
					</div>
				"
				;
			}
		}
	?>
</body>
</html>