<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<p>Hello there</p>
<?php

$mysqli = new mysqli("localhost", "root", "letmein", "testDB");
$data = mysqli_query($mysqli, "SELECT * from `gameRev`;");
echo " <p style='color: white'>Connected successfully</p>";
echo "<style>td{border: 1px solid black; color:blue}, tr {border: 1px solid black; color:blue}</style>";
echo "<table class='table'>";
echo "<thead><tr><td>Game Name</td><td> Rating</td><td>Notes</td></tr></thead>";
echo "<tbody>";
while ($row = $data->fetch_assoc()) {
    echo "<tr><td>" . $row["gameName"] . "</td><td>" . $row["rating"] . "</td><td>" . $row["notes"] . "</td><td>";
}
echo "</tbody>";
echo "</table><br>";
echo '<a href ="index.html">Back to menu!';

?>
<title>Game Reviews</title>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<body class="w-100 bg-dark">


