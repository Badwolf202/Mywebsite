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
        echo "<a class='btn btn-outline-danger my-2 my-sm-0' href='PHP/logout.php' role='button'>Logout</a>";
    }else{
        echo "<a class='btn btn-outline-primary my-2 my-sm-0 ' href='PHP/applyaccount.php' role='button'>Register</a>";
        echo "<a class='btn btn-outline-primary my-2 my-sm-0' href='HTML/Login.html' role='button'>Login</a>";
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
                    <a href="HTML/JQuery.html" class="nav-link active" aria-current="page">
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
                </li>
                <li>
                    <a href="HTML/Resume.html" class="nav-link text-white">
                        <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"/></svg>
                        Resume
                    </a>
                </li>
                <?php

                if(!empty($_SESSION['logged_in'])){
                    ?>
                    <li>
                        <a href="HTML/Resume.html" class="nav-link text-white">
                            <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"/></svg>
                            Resume
                        </a>
                    </li>

                    <li>
                        <a href="HTML/Resume.html" class="nav-link text-white">
                            <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"/></svg>
                            Resume
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

</article>
</article>
<style>
    * {box-sizing: border-box;}
    .mySlides {display: none;}
    img {vertical-align: middle;}

    /* Slideshow container */
    .slideshow-container {
        max-width: 500px;
        position: relative;
        margin: auto;
    }
    /* The dots/bullets/indicators */
    .dot {
        height: 15px;
        width: 15px;
        margin: 0 2px;
        background-color: #bbb;
        border-radius: 50%;
        display: inline-block;
        transition: background-color 0.6s ease;
    }

    /* Fading animation */
    .fade {
        -webkit-animation-name: fade;
        -webkit-animation-duration: 4s;
        animation-name: fade;
        animation-duration: 4s;
    }

    @-webkit-keyframes fade {
        from {opacity: .4}
        to {opacity: 1}
    }

    @keyframes fade {
        from {opacity: .4}
        to {opacity: 1}
    }

</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        $("#hide").click(function(){
            $("p").hide();
        });
        $("#show").click(function(){
            $("p").show();
        });
    });
</script>



<p>If you click on the "Hide" button, I will disappear.</p>

<button id="hide">Hide</button>
<button id="show">Show</button>


<div class="container">
    <div class="slideshow-container">

        <div class="mySlides fade">
            <div class="numbertext">1 / 3</div>
            <img src="pic1.png" style="width:100%">
            <!--    <div class="text">captions</div>-->
        </div>

        <div class="mySlides fade">
            <div class="numbertext">2 / 3</div>
            <img src="pic2.jpg" style="width:100%">
            <!--    <div class="text">captions</div>-->
        </div>

        <div class="mySlides fade">
            <div class="numbertext">3 / 3</div>
            <img src="pic3.jpg" style="width:100%">
            <!--    <div class="text">captions</div>-->
        </div>

    </div>
    <br>

    <div style="text-align:center">
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
    </div>

    <script>



        var slideIndex = 0;
        showSlides();

        function showSlides() {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("dot");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) {slideIndex = 1}
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex-1].style.display = "block";
            dots[slideIndex-1].className += " active";
            setTimeout(showSlides, 4000);
        }
    </script>

</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</html>
