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
<head>
    <title>User Login</title>
</head>

</div>
<div class="container-fluid text-center">
    <fieldset> <legend><h3> Account creation form </h3></legend>
        <form method="post" action="Form_validation.php">
            <p class="form-check-input" style="color: white"><strong>First Name:</strong><br>
                <input type="text" name="firstname" required></p>
            <p class="form-check-input" style="color: white"><strong>Last Name:</strong><br>
                <input type="text"  name="lastname" required></p>
            <p class="form-check-input" style="color: white"><strong>Email:</strong><br>
                <input type="text"  name="email" required></p>
            <p><input class="btn btn-outline-primary" type="submit" name="submit" value="Add user"/></p>
        </form>
    </fieldset>
    <a class="btn btn-outline-primary" href="index.html">HOME</a>
    <a  class="btn btn-outline-primary" href="FormAndReport.php">User Tables</a>
    </body>
</div>
<body>

</html>

<?php
}else{
//$sql = "INSERT INTO `members` (`firstname`, `lastname`, `email`, `password`, `age`, `gender`,
 //`startdate`) VALUES ('$first', '$last', '$smallMail', SHA1('$password'),'$age', '$gender', CURRENT_DATE())";
    $sql = "INSERT INTO `users` (`fname`,`lname`,`email`) VALUES ('$fname','$lname','$email')";
    $result = mysqli_query($mysqli, $sql) or die(mysqli_error($mysqli));
    $sql = "SELECT * from users;";
    $result = mysqli_query($mysqli, $sql) or die(mysqli_error($mysqli));
    echo "<h2 class='h2 mb-3' style='color: white'>Value inserted into table</h2>";
    echo "<a class='brn btn-outline-primary'>HOME</a>";
}

?>
<body class="bg-dark">
