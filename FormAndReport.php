<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<head>
    <meta charset="UTF-8">
    <title>Table</title>
</head>
<body>
<div class="w-auto h-auto container-fluid">
    <section class="row-cols-1 btn-toolbar h-100">
        <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: 280px;">
            <a href="index.html" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
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
<?php
    $mysqli = mysqli_connect("localhost", "noahb", "letmein", "testDB");
    $sql = "SELECT * from users";
    $result = mysqli_query($mysqli, $sql) or die(mysqli_error($mysqli));

        echo "<h2> User List: </h2>";
        echo "<table class=\"center\">";
        echo "<tr><th>First Name</th> <th>Last name</th> <th>Email</th> </tr>";

        while ($row = mysqli_fetch_array($result)){
            echo "<tr>";
            echo "<td>".$row["fname"]."</td>";
            echo "<td>".$row["lname"]."</td>";
            echo "<td>".$row["email"]."</td>";
            echo "</tr>";
        }
        echo "</table>";

?>
<a href="index.html">HOME</a>
</body>
</html>
