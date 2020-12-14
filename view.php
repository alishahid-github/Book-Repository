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
                        <li class="scroll "><a href="index.html">Home</a></li>
                        <li class="scroll"><a href="add.php">Add</a></li>
                        <li class="scroll active"><a href="view.php">View</a></li>
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
    } else {

        $sql = "SELECT * FROM book";
        $result = $conn->query($sql);
    ?>
        <section style="padding: 40px;">
            <div class="container">
                <div class="row">
                    <?php
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                    ?>
                            <div class="col-md-3 md-b-3 " style="margin-bottom: 10px;">
                                <div class="card col-6" style="width: 250px ; background-color:#f1f1f1; padding: 0px 15px 10px; border: 2px solid black;">
                                    <div class="card-body">
                                        <h3 class="card-title"><?php echo $row["title"] ?></h3>
                                        <h4 class="card-subtitle mb-2 text-muted">Author: <?php echo $row["author"] ?></h4>
                                        <h4 class="card-subtitle mb-2 ">Price: $ <?php echo $row["price"] ?></h4>
                                        <h6 class="card-text">Description: <?php echo $row["book_description"] ?></h6>
                                        <h6 class="card-text">Category: <?php echo $row["category"] ?></h6>

                                        <form action="edit.php" method="POST">

                                            <input type="hidden" name="ID" value=" <?php echo $row["Id"]; ?>">
                                            <button type="submit" style="width: 100%;" class="btn btn-info "> <i class="fa fa-pencil"></i>&nbsp;&nbsp;&nbsp; Update</button>
                                        </form>
                                        <form action="delete.php" method="POST" onsubmit="return check()"> <br>
                                            <input type="hidden" name="ID" value=" <?php echo $row["Id"]; ?>">
                                            <button type="submit" style="width: 100%;" class="btn btn-danger "><i class="fa fa-trash"></i>&nbsp;&nbsp;&nbsp; Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                <?php
                        }
                    } else {
                        echo "No results are found";
                    }
                    $conn->close();
                }


                ?>
                </div>
            </div>

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

        <script>
            function check() {

                if (confirm("Are you sure to delete this record?\n"))
                    return true;
                else
                    return false;
            }
        </script>


</body>

</html>