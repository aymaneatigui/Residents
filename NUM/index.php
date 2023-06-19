<?php
session_start();
if (isset($_SESSION['login'])) {
	header("location: ./liste.php");
	die();
}
?>

<!DOCTYPE html>
<html>

<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body style="background-image: url('./css/img/2.jpg'); background-position: center; background-size: cover;">
	<div>
		<div class="card login" style="height: 70vh; background:rgba(0,0,0,.6); color:white;">
			<div class="card-header  bg-default" style="background:rgb(0,0,0); color:white; padding-bottom:20px; margin-bottom:20px;">Authentification</div>
			<div class="card-body">
				<form action="connexion.php" method="post" enctype="multipart/form-data" .>
					<div class="form-group">
						<label for="login">Login:</label>
						<input type="text" name="login" class="form-control">
					</div>
					<div class="form-group" style="margin-bottom: 60px;">
						<label for="password">Password:</label>
						<input type="password" name="password" class="form-control">
					</div>
					<div style="color:red;margin-bottom: 20px;">
						<?php
						if (isset($_GET['erreur']) && ($_GET['erreur'] == 1)) echo "Please login first";
						if (isset($_GET['erreur']) && ($_GET['erreur'] == 2)) echo "Incorrect login or password	!!!";
						?>
					</div>
					<button type="reset" class="btn btn-danger"> <a href="../index.php" style="  text-decoration: none; color:white;"  > Annuler</a></button>
					<button type="submit" name="connexion" class="btn btn-primary">connexion</button>
				</form>
			</div>
		</div>
	</div>
</body>

</html>