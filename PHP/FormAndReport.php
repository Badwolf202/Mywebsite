<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<head>
    <meta charset="UTF-8">
    <title>Table</title>
</head>
<body class="container-fluid bg-dark">
<?php
    $mysqli = mysqli_connect("localhost", "noahb", "letmein", "testDB");
    $sql = "SELECT * from user";
    $result = mysqli_query($mysqli, $sql) or die(mysqli_error($mysqli));

        echo "<h2 class='h2 mb-3' style='color: white;'> User List: </h2>";
        echo "<table class=\"table\">";
        echo "<tr><th>Email</th>  </tr>";

        while ($row = mysqli_fetch_array($result)){
            echo "<tr>";
            echo "<td>".$row["email"]."</td>";
            echo "</tr>";
        }
        echo "</table>";

?>

</body>
<button class='btn btn-outline-primary my-2 my-sm-0 text-center' href='index.php' role='button'>Home</button>
</html>
