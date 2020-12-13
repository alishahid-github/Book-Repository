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
        <nav id="main-nav" class="navbar navbar-default fixed-top" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <div class="logoSection"> <a class="navbar-brand" href="index.html">Book Repository</a>

                    </div>
                </div>

                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="scroll "><a href="index.html">Home</a></li>
                        <li class="scroll active"><a href="add.php">Update</a></li>
                        <li class="scroll"><a href="view.php">View</a></li>
                    </ul>
                </div>
            </div>
            <!--/.container-->
        </nav>
        <!--/nav-->
    </header>
    <!--/header-->
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
    }

    $db_id = $_POST["ID"];
    $sql = "SELECT * FROM book Where Id=$db_id ";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    ?>

    <div style="padding: 30px; padding-left: 30vw">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <form action="update.php" method="POST" role="form" style="font-size: 18px;" onsubmit="return check()">
                        <div class="form-group">Book Tittle : <span style="font-size:22x; color:red ">*</span>
                            <input type="text" class="form-control" name="Title" value="<?php echo $row["title"] ?>" placeholder="Book Tittle" required />

                        </div>
                        <div class="form-group">Book Author[s] :<span style="font-size:22px; color:red ">*</span>
                            <input type="text" class="form-control" name="Author" value="<?php echo $row["author"] ?>" placeholder="Book Author[s]" required />
                        </div>

                        <div class="form-group"> Price $ :<span style="font-size:22px; color:red ">*</span>
                            <input type="number" class="form-control " name="Price" value="<?php echo $row["price"] ?>" min="1" max="10000" required />
                        </div>

                        <div class="form-group ">Category :<span style="font-size:22px; color:red ">*</span>
                            <select id="inputState" name="Category" value="<?php echo $row["category"] ?>" class="form-control">
                                <option selected>Other</option>
                                <option>Religion</option>
                                <option>Science</option>
                                <option>Education</option>
                                <option>Technical</option>

                            </select>
                        </div>

                        <div class="form-group">Description :<span style="font-size:22px; color:red ">*</span>
                            <input type="textarea" name="Description" value="<?php echo $row["book_description"]; ?>" placeholder="Book Description" class="form-control" name="sub3" />

                        </div>

                        <br>
                        <input type="hidden" name="ID" value=" <?php echo $row["Id"];  ?>">

                        <div class="text-center">
                            <button type="submit" class="btn btn-warning btn-lg">Update</button>
                        </div>
                    </form>


                </div>

            </div>
        </div>
    </div>

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

    <script>
        function check() {

            if (confirm("Are you sure to update this record?\n"))
                return true;
            else
                return false;
        }
    </script>


</body>

</html>