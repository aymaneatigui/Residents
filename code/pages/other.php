<?php
include('./nav.php');
?>

<!DOCTYPE html>
<html>

<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../NUM/css/style.css">
</head>

<body  style="background-image: url('../NUM/css/img/num.png');	  background-position: center; background-repeat: no-repeat; background-size: cover; position: relative;	">
	<div>

		<div class="card nvEtudiant" >
			<div class="card-header" style="background:rgba(0,0,0,.7); color:white;">Worker</div>
			<div class="card-body">

				<form action="../NUM/traiterworks.php" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<label for="nom">Nom:</label>
						<input type="text" name="txtNom" class="form-control">
					</div>
					<div class="form-group">
						<label for="prenom">Prenom :</label>
						<input type="text" name="txtPrenom" class="form-control">
					</div>
					<div class="form-group">
						<label for="number">Phone Number:</label>
						<input type="number" name="txtnumber" class="form-control">
					</div>
					<div class="form-group">
						<label for="prof">Profession :</label>
						<input type="text" name="prof" class="form-control">
					</div>
					<div class="form-group">
						 <label for="comm">Comments</label> 
						 <textarea class="form-control" name="comm" rows="4"></textarea>
					</div>
					<div class="form-group">
						<label for="apa">apartment :</label>
						<input type="number" name="apa" class="form-control">
					</div>
					<div class="form-group">
	   				  	   <label for="photo">Photo:</label>
	 					   <input type="file" name="photo" class="form-control">
	 				 </div>
					<input type="hidden" id="custId" name="custId"> 
					<button type="reset" class="btn btn-danger"><a style=" color:white; text-decoration: none;" href="../index.php" > Annuler</a></button>
					<button type="submit" name="save" class="btn btn-primary">Enregistrer</button>
				</form>
			</div>
		</div>
	</div>
</body>

</html>