<?php
session_start();
if (isset($_SESSION['login'])) {
    include('./nav.php');
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <title>Document</title>
</head>

<body>

    <div id="fh5co-features " class="animate-box" style="background-color: #FF9000; width: 100%; height: 100%;">
        <div class="container">
            <div class="services-padding" style="background-color: #FF9000; width: 100%; height: 100%;">
                <div class="row" style=" width: 100%; height: 20%;">
                    <!-- <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                        <h2> Services</h2>
                    </div> -->
                </div>
                <div class="row" style=" width: 100%; height: 40%;">
                    <div class="col-md-4 text-center">
                        <div class="feature-left">
                            <span class="icon">
                                <a href="./index.php" style="color: black;">

                                    <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
                                        <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
                                    </svg>
                                </a>
                            </span>
                            <div class="feature-copy">
                                <h3>HOME</h3>
                            </div>
                            </span>
                        </div>
                    </div>

                    <div class="col-md-4 text-center">
                        <div class="feature-left">
                            <span class="icon">
                                <a href="./NUM/index.php" style="color: black;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-box-arrow-in-left" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M10 3.5a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-2a.5.5 0 0 1 1 0v2A1.5 1.5 0 0 1 9.5 14h-8A1.5 1.5 0 0 1 0 12.5v-9A1.5 1.5 0 0 1 1.5 2h8A1.5 1.5 0 0 1 11 3.5v2a.5.5 0 0 1-1 0v-2z" />
                                        <path fill-rule="evenodd" d="M4.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H14.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z" />
                                    </svg>
                                </a>
                            </span>
                            <div class="feature-copy">
                                <h3>LOGIN</h3>
                            </div>
                        </div>

                    </div>
                    
                    <!-- ---------------------- -->

                    <?php
                    if ((isset($_SESSION['login'])) && ($_SESSION['login']) == "admin") {
                        include('adduser.php');
                    } else {
                        include('signup.php');
                    }

                    ?>
                    <!-- ---------------------- -->

                    <div class="row" style=" width: 100%; height: 40%;">
                        <div class="col-md-4 text-center">

                            <div class="feature-left">
                                <span class="icon">
                                    <a href="./pages/code.php" style="color: black;">
                                        <img src="./img/healthcare.png" width="90" height="90">
                                    </a>
                                </span>
                                <div class="feature-copy">
                                    <h3>Other numbers</h3>
                                </div>
                            </div>

                        </div>

                        <div class="col-md-4 text-center">
                            <div class="feature-left">
                                <span class="icon">
                                    <a href="./NUM/page1.php" style="color: black;">
                                        <img src="./img/two-houses.png" width="95" height="95">
                                    </a>
                                </span>
                                <div class="feature-copy">
                                    <h3>Neighborhood numbers</h3>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-4 text-center">
                            <div class="feature-left">
                                <span>
                                    <a href="./NUM/logout.php" style="color: black;">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="90" height="90" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z" />
                                            <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
                                        </svg>
                                    </a>
                                </span>
                                <div class="feature-copy">
                                    <h3>Loge Out</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>