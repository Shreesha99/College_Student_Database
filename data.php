<html>
<head>
<title>Table with database</title>
<style>
table {
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
</head>
<body>
<table>
<tr>
<th>Sl.No</th>
<th>USN</th>
<th>Name</th>
<th>15CS71 - Internals</th>
<th>15CS71 - External</th>
<th>15CS71 - Total</th>

</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "college student database");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT Sl.No, USN, Name, 15CS71I, 15CS71E, 15CS71T FROM batch20157thsem";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["Sl.No"]. "</td><td>" . $row["USN"] . "</td><td>"
. $row["Name"]. $row["15CS71I"]. "</td><td>" . $row["15CS71E"]. "</td><td>" . $row["15CS71T"]. "</td><td>" . "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>