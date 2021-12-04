<?php
$mysqli = mysqli_connect("localhost", "noahb", "letmein", "testDB");
$email = filter_input(INPUT_POST, 'email');
$fname = filter_input(INPUT_POST, 'firstname');
$lname = filter_input(INPUT_POST, 'lastname');

$conn = new mysqli("localhost", "noahb", "letmein");
// Check connection

if (!isset($_POST['submit']))
{

?>

<html>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style>
title{
color: white;
}
p{
color: white;
}
h3{
color: white;
}
</style>
<head>
    <title>User Login</title>
</head>

<body class="container-fluid bg-dark" >
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
<fieldset> <legend><h3> Account creation form </h3></legend>
    <form method="post" action="Form_validation.php">
        <p><strong>First Name:</strong><br>
            <input type="text" name="firstname" required></p>
        <p><strong>Last Name:</strong><br>
            <input type="text"  name="lastname" required></p>
        <p><strong>Email:</strong><br>
            <input type="text"  name="email" required></p>
        <p><input type="submit" name="submit" value="Add user"/></p>
    </form>
</fieldset>
<a href="index.html">HOME</a>
<a href="FormAndReport.php">User Tables</a>
</body>
</html>

<?php
}else{
//$sql = "INSERT INTO `members` (`firstname`, `lastname`, `email`, `password`, `age`, `gender`,
 //`startdate`) VALUES ('$first', '$last', '$smallMail', SHA1('$password'),'$age', '$gender', CURRENT_DATE())";
    $sql = "INSERT INTO `users` (`fname`,`lname`,`email`) VALUES ('$fname','$lname','$email')";
    $result = mysqli_query($mysqli, $sql) or die(mysqli_error($mysqli));
    $sql = "SELECT * from users;";
    $result = mysqli_query($mysqli, $sql) or die(mysqli_error($mysqli));
    echo "Value instered into table";
    echo ">HOME</a>";
}

?>
<body style="background-color: #212F3C">