<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Book Repository">
    <title>Book Repository</title>
    <!-- core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.transitions.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/magnific-popup.css" rel="stylesheet">
    <link href="css/gallery-1.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">

    <link rel="shortcut icon" href="images/ico/favicon.png">
</head>

<body id="home">

    <header id="header">
        <nav id="main-nav" class="navbar navbar-default navbar-fixed-top" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <div class="logoSection"> <a class="navbar-brand" href="index.html">Book Repository</a>

                    </div>
                </div>

                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="scroll active"><a href="index.html">Home</a></li>
                        <li class="scroll"><a href="add.php">Add</a></li>
                        <li class="scroll"><a href="view.php">View</a></li>
                    </ul>
                </div>
            </div>
            <!--/.container-->
        </nav>
        <!--/nav-->
    </header>
    <!--/header-->


    <section id="hero-text" class="d-flex align-items-center" style="height: 100vh; padding: 40px;">
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "bookrepositorydb";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } else {
            $db_Title = $_POST["Title"];
            $db_Author = $_POST["Author"];
            $db_Price = $_POST["Price"];

            $db_decp = $_POST["Description"];
            if ($db_decp == '') {
                $db_decp = 'Description is not provided';
            }
            $db_cat = $_POST["Category"];
            if ($db_cat == '') {
                $db_cat = 'Other';
            }
        }
        $sql = "INSERT INTO book (title, author,price, book_description ,category) VALUES ('$db_Title', '$db_Author','$db_Price', '$db_decp','$db_cat'  )";

        if ($conn->query($sql) === TRUE) {
        ?>
            <div class="jumbotron" style="background-color:green ;">
                <h1 class="display-4">Successfully Added</h1>
                <p class="lead">Record has been Added!!</p>

                <p class="lead">
                    <a class="btn btn-primary btn-lg " style="background-color: white; font-weight:bold;" href="view.php" role="button">View</a>
                </p>
            </div>
        <?php


        } else {
        ?>

            <div class="jumbotron" style="background-color:red ;">
                <h1 class="display-4">Error!!!</h1>
                <p class="lead">Record has not been Added Successfully!!</p>

                <p class="lead">
                    <a class="btn btn-primary btn-lg" style="background-color: white; font-weight:bold;" href="index.html" role="button">Go Home</a>
                </p>
            </div>
        <?php

        }
        $conn->close();
        ?>
    </section>




    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    2020 Book Repository. <a href="https://webthemez.com/free-bootstrap-templates/" target="_blank">All
                        Rights Reserved &copy;</a> | Copyrights
                </div>
                <div class="col-sm-6">
                    <ul class="social-icons">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                        <li><a href="#"><i class="fa fa-github"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!--/#footer-->

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/mousescroll.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.inview.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="contact/jqBootstrapValidation.js"></script>
    <script src="contact/contact_me.js"></script>

    <script src="js/custom-scripts.js"></script>
</body>

</html>