<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<head>
    <meta charset="UTF-8">
    <title>Table</title>
</head>
<body>
<?php
    $mysqli = mysqli_connect("localhost", "noahb", "letmein", "testDB");
    $sql = "SELECT * from users";
    $result = mysqli_query($mysqli, $sql) or die(mysqli_error($mysqli));

        echo "<h2> User List: </h2>";
        echo "<table class=\"center\">";
        echo "<tr><th>First Name</th> <th>Last name</th> <th>Email</th> </tr>";

        while ($row = mysqli_fetch_array($result)){
            echo "<tr>";
            echo "<td>".$row["fname"]."</td>";
            echo "<td>".$row["lname"]."</td>";
            echo "<td>".$row["email"]."</td>";
            echo "</tr>";
        }
        echo "</table>";

?>
<a href="index.html">HOME</a>
</body>
</html>
