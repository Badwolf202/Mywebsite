<!DOCTYPE html>
<!--<?php?>-->
<html lang="en">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

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
                <a href="../index.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
                    <span class="fs-4">Noah's Site</span>
                </a>
                <hr>
                <ul class="nav nav-pills flex-column mb-auto">
                    <li class="nav-item">
                        <a href="JQuery.html" class="nav-link active" aria-current="page">
                            <svg class="bi me-2" width="16" height="16"><use xlink:href="#home"/></svg>
                            JQuery
                        </a>
                    </li>
                    <li>
                        <a href="AJAX.html" class="nav-link text-white">
                            <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"/></svg>
                            AJAX
                        </a>
                    </li>
                    <li>
                        <a href="Form_validation.php" class="nav-link text-white">
                            <svg class="bi me-2" width="16" height="16"><use xlink:href="#grid"/></svg>
                            Form Validation
                        </a>
                    </li>
                    <li>
                        <a href="FormAndReport.php" class="nav-link text-white">
                            <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"/></svg>
                            Report
                        </a>
                    </li>
                </ul>
                <hr>
                <div class="dropdown">
                    <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="https://cdn.discordapp.com/attachments/816093593399328800/896114209484595250/2dbcms7xovr71.jpg" alt="" width="32" height="32" class="rounded-circle me-2">
                        <strong>  Calibur202</strong>
                    </a>
                </div>
                <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                    <li><a class="dropdown-item" href="Resume.html">Resume</a></li>
                    <li><a class="dropdown-item" href="https://www.linkedin.com/in/noah-blake-4aa9a5226/">LinkedIn</a></li>
                    <li><a class="dropdown-item" href="https://noahb742252897.wordpress.com/">Blog</a></li>
                </ul>
            </div>



    </div>
    <div class="container-fluid text-center position-fixed">
        <?php
        $mysqli = new mysqli("localhost", "noahb", "letmein", "testDB");
        $data = mysqli_query($mysqli, "SELECT * FROM `gameRev`;");
        echo "<style>td{font-size: large; color:white;}, tr { font-size: large; color:white;}</style>";
        echo "<table class='table table-bordered'>";
        echo "<thead><tr><td>Game</td><td>Rating</td><td>Notes</td></tr></thead>";
        //write out the current ticket
        echo "<tbody>";
        while ($row = $data->fetch_assoc()) {
            echo "<tr><td>" . $row["gameName"] . "</td><td>" . $row["rating"] . "</td><td>" . $row["notes"] . "</td><td>";
        }
        echo "</tbody>";
        echo "</table><br>";

        echo '<a href ="index.php">Back to menu!';

        ?>
    </div>
    <footer class="card-footer text-center fixed-bottom" style="color: white;">
        <p class="center">Contact: noahb@gmail.com</p>
    </footer>
    </section>



</div>
</body>
</html>
