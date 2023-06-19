<?php
	include('nav.php');
?>

<!DOCTYPE html>
<html>

<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../NUM/css/style.css">
	<link rel="stylesheet" type="text/css" href="../NUM/css/fontawesome/css/all.css">
</head>

<body style="background-image: url('../NUM/css/img/num.png'); background-position: center; background-size:cover;">
	<div>
		<div class="card nvEtudiant">
			<div class="card-header   " style="background:rgba(0,0,0,.7); color:white;">Liste workers</div>
			<div class="card-body">
				<?php
				include("../NUM/DAO.php");
				$dao = new DAO();
				$liste = $dao->listeworkers();
				?>
				<table class="table">
					<thead>
						<th>Nom</th>
						<th>Prenom</th>
						<th>Number</th>
						<th>Profession</th>
						<th>Comment</th>
						<th>Apartment</th>
						<th>Photo</th>
						
					</thead>
					<tbody>
						<?php
						foreach ($liste as $e) {
							echo "<tr>
								<td>".$e[0]."</td>
								<td>".$e[1]."</td>
								<td>".$e[2]."</td>
								<td>".$e[3]."</td>
								<td>".$e[4]."</td>
								<td>".$e[5]."</td>
								<td><img width=80 src=".$e[6]."></td>
							</tr>";
						}
						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</body>

</html>