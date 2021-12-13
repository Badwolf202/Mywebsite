<?php
$mysqli = new mysqli("localhost", "noahb", "letmein", "testDB");
$email = filter_input(INPUT_POST, 'email');
$password = filter_input(INPUT_POST, 'password');
$lowerEmail = strtolower($email);

    $check = mysqli_query($mysqli, "SELECT * FROM `user` WHERE email = '$lowerEmail'");
    if(empty($email) || empty($password)){
        echo "one of the options was empty, please try again";
    } else if (mysqli_num_rows($check) != 0)
    {
        echo "Username Already Exists! Please Try Again!</br>";
        echo '<a href ="applyaccount.php">Try Again!';
    }
    else
    {
        $sql = "INSERT INTO `user` (`email`,`pass`) VALUES ('$lowerEmail',SHA1('$password'))";
        if (mysqli_query($mysqli, $sql))
        {
            echo "<h3 class='h3 mb-3 text-center' style='text-align: center'>Your Account has been created! Thank you for joining us!<h3>";
            echo "<h6 class='h6 mb-3 text-center' style='text-align: center'><a href='../index.php' >Back to main</a></h6>";
        }
}
?>
<html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sign-in/">
    <title>Created!</title>
</head>
<body class="bg-dark">
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</html>
