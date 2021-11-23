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
<body style="background-color: #212F3C">

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