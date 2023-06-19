<?php
session_start();
if (!isset($_SESSION['login'])) {
	header("location:index.php?erreur=1");
	die();
} else if (($_SESSION['login']) != "admin") {
	header("location:home.php");
	die();
}

?>
<!DOCTYPE html>
<html>

<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/fontawesome/css/all.css">
</head>

<body style="background-image: url('./css/img/num.png'); background-position: center; background-size:cover;">
	<div>
		<?php include('navigation.php'); ?>
		<div class="card nvEtudiant">
			<div class="card-header   " style="background:rgba(0,0,0,.7); color:white;">Liste Etudiants</div>
			<div class="card-body">
				<?php
				include("DAO.php");
				$dao = new DAO();
				$liste = $dao->liste();
				?>
				<table class="table">
					<thead>
						<th>CNE</th>
						<th>Nom</th>
						<th>Prenom</th>
						<th>number</th>
						<th>apartment</th>
						<th>batiment</th>
						<th>Actions</th>
					</thead>
					<tbody>
						<?php
						foreach ($liste as $e) {
							echo "
							<tr>
								<td>" . $e[0] . "</td>
								<td>" . $e[1] . "</td>
								<td>" . $e[2] . "</td>
								<td>" . $e[3] . "</td>
								<td>" . $e[4] . "</td>
								<td>" . $e[5] . "</td>
								<td>" . '<a href="removeuser.php?cne=' . $e[0] . '"><i class="fas fa-trash-alt supp"></i></td></tr>';
						}

						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</body>

</html>