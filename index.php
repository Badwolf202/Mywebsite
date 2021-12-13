<?php


?>


<html lang="en">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

<head>
    <meta charset="UTF-8">
    <title>Noah's Site</title>
</head>
<body class="w-100 bg-dark">
<div class="content">
    <div class="card-header" >
        <h2 class="h2 mb-3 text-center" style="color: white"><strong>Welcome to Noah's website</strong></h2>

    </div>
    <div class="w-auto h-auto container-fluid">
        <section class="btn-toolbar h-100 float-left">
            <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: 280px;">
                <a href="index.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
                    <span class="fs-4" style="font-size: xx-large"><strong>Navbar</strong></span>
                </a>
                <hr>
                <ul class="nav nav-pills flex-column mb-auto">
                    <li class="nav-item">
                        <a href="HTML/JQuery.html" class="nav-link text-white" aria-current="page">
                            <svg class="bi me-2" width="16" height="16"><use xlink:href="#home"/></svg>
                            JQuery
                        </a>
                    </li>
                    <li>
                        <a href="HTML/AJAX.html" class="nav-link text-white">
                            <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"/></svg>
                            AJAX
                        </a>
                    </li>
                    <li>
                        <a href="PHP/Form_validation.php" class="nav-link text-white">
                            <svg class="bi me-2" width="16" height="16"><use xlink:href="#grid"/></svg>
                            Form Validation
                        </a>
                    </li>
                    <li>
                        <a href="PHP/FormAndReport.php" class="nav-link text-white">
                            <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"/></svg>
                            Report
                        </a>
                    <li>
                    <a class="nav-link text-white" href="HTML/Resume.html">
                    <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"/></svg>Resume</a></li>
                    <li>
                        <a class="nav-link text-white" href="https://www.linkedin.com/in/noah-blake-4aa9a5226/">
                        <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"/></svg>LinkedIn</a></li>
                    <li>
                        <a class="nav-link text-white" href="https://noahb742252897.wordpress.com/">
                        <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"/></svg>Blog</a></li>
                    </li>

                </ul>
                <hr>
            </div>


    <div class="container-fluid text-center position-fixed">
         <?php

         $mysqli = new mysqli("localhost", "root", "letmein", "testDB");
         $data = mysqli_query($mysqli, "SELECT * from `gameRev`;");
         echo "<style>td{border: 1px solid black; color:blue}, tr {border: 1px solid black; color:blue}</style>";
         echo "<table class='table'>";
         echo "<thead><tr><td>Game Name</td><td> Rating</td><td>Notes</td></tr></thead>";
         //write out the current ticket
         echo "<tbody>";
         while ($row = $data->fetch_assoc()) {
             echo "<tr><td>" . $row["gameName"] . "</td><td>" . $row["rating"] . "</td><td>" . $row["notes"] . "</td><td>";
         }
         echo "</tbody>";
         echo "</table><br>";
         ?>
    </div>




    <footer class="card-footer text-center fixed-bottom" style="color: white;">
        <p class="center">Contact: noahb@gmail.com</p>
    </footer>
    </section>
</div>
</body>
</html>
