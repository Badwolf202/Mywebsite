<?php
session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>PC Part Picker</title>
</head>
<body>
<h1 style="color: crimson">PC part picker</h1>
<nav class="navbar navbar-expand-xxl navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navigation</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="../index.html">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/PHP/createBuild.php">Make a build</a>
                </li>
            </ul>

            <?php

            if(!empty($_SESSION['logged_in'])){
                echo "<a class='btn btn-outline-danger my-2 my-sm-0' href='logout.php' role='button'>Logout</a>";


            }else{
                echo "<a class='btn btn-outline-primary my-2 my-sm-0 ' href='../PHP/applyaccount.php' role='button'>Register</a>";
                echo "<a class='btn btn-outline-primary my-2 my-sm-0' href='../HTML/Login.html' role='button'>Login</a>";
            }
            ?>
        </div>
    </div>
</nav>
<?php
if (!isset($_POST['submit'])){

?>


<div class="container-lg">
    <div class=" align-content-center">

    <?php

    if(!empty($_SESSION['logged_in'])){
        ?>
        <form method="post" action="account.php" class="mb-3 h3 fw-normal">
            <div class="form-floating">
                <h1 class="h3 mb-3" style="color: black">Change your password</h1>
                <input type="password" name="oldPassword" placeholder="Old password"/></p>
                <input type="password" name="re-oldPassword" placeholder="Re-type Old password"/></p>
                </br>
                <input type="password" name="NewPassword" placeholder="New Password"/></p>
                <button class="btn btn-outline-primary my-2 my-sm-0" type="submit" name="submit">Change password</button>
            </div>
            </br></br>
            <a class='btn btn-outline-primary my-2 my-sm-0' href='sqltableresults2.php' role='button'>View builds</a>
        </form>

        <?php
    }else{
       exit;
    }
    }else{
        $oldpass = $_POST["oldPassword"];
        $reOldPass = $_POST["re-oldPassword"];
    if($oldpass == $reOldPass){
        $newpass = $_POST["NewPassword"];
        $temp = $_SESSION['email'];
        $mysqli = new mysqli("localhost", "cs213user", "letmein", "compDB");
        $data = mysqli_query($mysqli, "UPDATE fart SET pass = SHA1('$newpass') WHERE email = '$temp' ");
        echo "<h3 class='h3 mb-3 text-center' style='text-align: center'>Password has been changed<h3>";
        echo "<h6 class='h6 mb-3 text-center' style='text-align: center'><a href='../index.html' >Back to main</a></h6>";

    }else{
        exit;
    }
}
    ?>
    </div>
</div>
<div class="card-footer" >
    <div style="text-align:center">
        <p>Contact us:</p>
        <p>ParkerAndNoah@funtime.co</p>

    </div>

</div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>