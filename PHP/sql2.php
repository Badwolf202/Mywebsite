<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<head>
    <meta charset="UTF-8">
    <title>Noah's Site</title>
</head>
<body class="w-100 bg-dark">

<div class="card-header" >
    <h2 class="h2 mb-3 text-center" style="color: white"><strong>Welcome to Noah's website</strong></h2>
    <?php

    if(!empty($_SESSION['logged_in'])){
        echo "<a class='btn btn-outline-danger my-2 my-sm-0' href='../PHP/logout.php' role='button'>Logout</a>";
    }else{
        echo "<a class='btn btn-outline-primary my-2 my-sm-0 ' href='../PHP/applyaccount.php' role='button'>Register</a>";
        echo "<a class='btn btn-outline-primary my-2 my-sm-0' href='../HTML/Login.html' role='button'>Login</a>";
    }
    ?>

</div>
<div class="w-auto h-auto container-fluid">
    <section class="btn-toolbar position-fixed h-100 float-left">
        <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: 280px;">
            <a href="../index.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
                <span class="fs-4">Noah's Site</span>
            </a>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                    <a href="../HTML/JQuery.php" class="nav-link" aria-current="page">
                        <svg class="bi me-2" width="16" height="16"><use xlink:href="#home"/></svg>
                        JQuery
                    </a>
                </li>
                <li>
                    <a href="../HTML/AJAX.php" class="nav-link text-white">
                        <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"/></svg>
                        AJAX
                    </a>
                </li>
                <li>
                    <a href="../PHP/sqltableresults.php" class="nav-link text-white">
                        <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"/></svg>
                        All Reviews
                    </a>
                </li>
                <li>
                    <a href="../HTML/Resume.php" class="nav-link text-white">
                        <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"/></svg>
                        Resume
                    </a>
                </li>
                <?php

                if(!empty($_SESSION['logged_in'])){
                    ?>
                    <li>
                        <a href="../PHP/MakeReview.php" class="nav-link text-white">
                            <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"/></svg>
                            Make Review
                        </a>
                    </li>

                    <li>
                        <a href="HTML/Holder.html" class="nav-link text-white">
                            <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"/></svg>
                            Holder (Tester Page)
                        </a>
                    </li>
                    <?php
                }
                ?>
            </ul>
            <hr>
    </section>


</div>
<article class="container-sm" style="padding-left: 400px; padding-right: 200px; margin: 15px">
    <?php

    $mysqli = new mysqli("localhost", "noahb", "letmein", "testDB");
    $data = mysqli_query($mysqli, "SELECT * FROM `user`;");
    echo "<style>td{border: 1px solid black; color:white}, tr {border: 1px solid black; color:white}</style>";
    echo "<table class='table'>";
    echo "<thead><tr><td>Email</td><td>Pass</td></tr></thead>";
    //write out the current ticket
    echo "<tbody>";
    while ($row = $data->fetch_assoc()) {
        echo "<tr><td>" . $row["email"] . "</td><td>" . $row["pass"] . "</td>";
    }
    echo "</tbody>";
    echo "</table><br>";


    ?>
</article>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</html>


