<!DOCTYPE html>
<?php
session_start();
?>
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
                        <a href="../HTML/Holder.html" class="nav-link text-white">
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
<style>
    .h2,p,.h1,.h3{
        color: white;
    }
</style>
<article class="container-sm" style="padding-left: 400px; padding-right: 200px; margin: 15px">

    <h1 class="h1">Noah Blake</h1>
    <br>
    <h2 class="h2">PROFILE</h2><br>
    <p>
        Since I was young, I have been consistently working towards building a future
        for myself. While working I was always appreciated for my hard work and
        willingness to do what it took for the team to succeed

    </p>
    <br>
    <h2 class="h2">EXPERIENCE</h2><br>
    <h3 class="h3">McDonald???s Team Leader | Penticton | 2020 ??? Present</h3>
    <p>
        ??? Participate in training of new Crew members.<br>
        ??? Opening and closing the building.<br>
        ??? Takes pride in work.<br>
        ??? Detail cleaning:enjoys workinginan organized,maintained workspace.<br>
        ??? Activelyinvolvedinthedailymaintenanceoftheequipment:grill cleaning,Fryer
        maintenance, etc.<br>
        ??? Responsible for overseeing the building<br>
    </p>
    <br>
    <h3 class="h3">Landmark Cinemas | Penticton | 2014 ??? 2020</h3>
    <p>
        ??? InvolvedinPOSandTheatrecomputersetupandproblemsolving.<br>
        ??? Participate in training of new Cast members.<br>
        ??? Proficientin handlinghigh volumes ofpatrons professionally.<br>
        ??? Opening and closing the building.<br>
        ??? Takes pride in work.<br>
        ??? Skilled at cash handling and accounting.<br>
        ??? Detail cleaning:enjoys workinginan organized,maintained workspace.<br>
        ??? Activelyinvolvedinthedailymaintenanceofthebuilding: seat repair,concession
        maintenance, light changing, etc.

    </p>
    <br>
    <h2 class="h2">CERTIFICATIONS</h2><br>
    <p>
        ???Food Safe Level #1<br>
        ???W.H.M.I.S.<br>
        ???Gateway to technology
        program
    </p>
    <br>
    <h2 class="h2">REFERENCES</h2><br>
    <fieldset style="color: white" class="float-left">
        <p>
        <h4 class="h4">William Afton</h4><br>
        Manager,
        Fazbear entertainment<br>
        Penticton, BC<br>
        613-555-0199<br>

        </p>
    </fieldset>
    <fieldset style="color: white; padding-left: 50px" class="float-left">
        <p>
        <h4 class="h4">Michel Scott</h4><br>
        Manager,
        Dunder Mifflin<br>
        Scranton, PA<br>
        613-555-0111<br>

        </p>
    </fieldset>

</article>


</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</html>
