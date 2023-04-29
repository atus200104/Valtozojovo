<div class="table-responsive">
<?php
include("connection.php");

$sql = "SELECT * FROM bukkiallatok";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  echo "<table id='myTable'>";
  echo "<tr>";
  echo "<th>Faj</th>";
  echo "<th>Megnevezés</th>";
  echo "<th>Hely</th>";
  echo "<th>Létszám</th>";
  echo "<th>Veszélyezettség</th>";
  echo "</tr>";
  
  // Output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $row["Faj"]. "</td>";
    echo "<td>" . $row["Megnevezes"]. "</td>";
    echo "<td>" . $row["Hely"]. "</td>";
    echo "<td>" . $row["Letszam"]. "</td>";
    echo "<td>" . $row["Veszelyezettseg"]. "</td>";
    echo "</tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}

mysqli_close($conn);
?>
</div>
