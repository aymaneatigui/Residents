<style>
	body {
		margin: 0;
	}

	ul.topnav {
		list-style-type: none;
		margin: 0;
		padding: 0;
		overflow: hidden;
		background-color: #333;
	}

	ul.topnav li {
		float: left;
	}

	ul.topnav li a {
		display: block;
		color: white;
		text-align: center;
		padding: 14px 16px;
		text-decoration: none;
	}

	ul.topnav li a:hover:not(.active) {
		background-color: #111;
	}

	ul.topnav li a.active {
		background-color: #4CAF50;
	}

	ul.topnav li.right {
		float: right;
	}

	@media screen and (max-width: 600px) {

		ul.topnav li.right,
		ul.topnav li {
			float: none;
		}
	}
</style>

<ul class="topnav">
	<li><a class="active" href="./index.php">Home</a></li>	
	
	
	<li class="right"> <a class="nav-link " href="./NUM/logout.php" style="color: burlywood;">

			logout(
			<?php
			echo $_SESSION['login'];
			?>
			)
		</a></li>
</ul>