<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("location:index.php?erreur=1");
    die();
}

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
        <?php include('../NUM/navigation.php'); ?>
        <div class="card nvEtudiant">
            <div class="card-header   " style="background:rgba(0,0,0,.7); color:white;">Liste Etudiants</div>
            <div class="card-body">
                <?php
                include("../NUM/DAO.php");
                $dao = new DAO();
                $liste = $dao->scne($_SESSION['login']);
                ?>
                <table class="table">
                    <thead>
                        <th>Nom</th>
		              	<th>Prenom</th>
		               	<th>number</th>
		            	<th>apartment</th>
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