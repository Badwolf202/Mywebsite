<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<body style="background-color: darkslateblue">
<?php
echo "Hello From the PHP";
$mysqli = new mysqli("localhost", "root", "letmein", "testDB");
$conn = new mysqli("localhost", "root", "letmein");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo " 2";
$data = mysqli_query($mysqli, "SELECT * FROM `gameRev`;");
echo "<style>td{border: 1px solid black; color:blue}, tr {border: 1px solid black; color:blue}</style>";
echo "<table>";
echo "<thead><tr><td>Game</td><td>Rating</td><td>Notes</td></tr></thead>";
//write out the current ticket
echo "<tbody>";
while ($row = $data->fetch_assoc()) {
    echo "<tr><td>" . $row["gameName"] . "</td><td>" . $row["rating"] . "</td><td>" . $row["notes"] . "</td><td>";
}
echo "</tbody>";
echo "</table><br>";

echo '<a href ="index.php">Back to menu!';

echo "3";

?>
<title>Super Secret Records</title>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
