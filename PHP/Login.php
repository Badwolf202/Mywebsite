<?php
session_start();
//check for required fields from the form
if ((!filter_input(INPUT_POST, 'email'))
    || (!filter_input(INPUT_POST, 'password'))) {
if ((!isset($_POST["username"])) || (!isset($_POST["password"]))) {
    header("Location: ../index.php");
    exit;
}
}

$mysqli = new mysqli("localhost", "cs213user", "letmein", "compDB");

//create and issue the query
$targetname = filter_input(INPUT_POST, 'email');
$targetpasswd = filter_input(INPUT_POST, 'password');
$sql = "SELECT * FROM fart WHERE email = '$targetname' and pass = SHA1('" . $targetpasswd . "')";

$result = mysqli_query($mysqli, $sql) or die(mysqli_error($mysqli));

if (mysqli_num_rows($result) == 1) {

    //if authorized, get the values of f_name l_name
    while ($info = mysqli_fetch_array($result)) {
        $email = stripslashes($info['email']);
        $fname = stripslashes($info['firstName']);

        $password = stripslashes($info['password']);
    }

    session_start();
    //set authorization cookie using curent Session ID
    $_SESSION['logged_in'] = true;
    $_SESSION['userName'] = $fname . "'s";
    $_SESSION['email'] = $email;
    setcookie("auth", session_id(), time()+60*30, "/", "", 0);
    header("Location: ../index.php");

} else {
    echo "failed";
    exit;
}
?>
<html>
<head>
    <title>Login</title>
</head>
<body>

</body>
</html>

