<?php
$conn = new mysqli("localhost", "root", "", "evproject");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$result = $conn->query("SELECT * FROM enquiry");
?>

<!DOCTYPE html>
<html>
<head>
<title>All Enquiries</title>
</head>
<body>

<h2>📋 All Enquiries</h2>

<table border="1" cellpadding="10">
<tr>
<th>ID</th>
<th>Name</th>
<th>Email</th>
<th>Phone</th>
<th>Message</th>
</tr>

<?php
while($row = $result->fetch_assoc()) {
    echo "<tr>
    <td>".$row['id']."</td>
    <td>".$row['name']."</td>
    <td>".$row['email']."</td>
    <td>".$row['phone']."</td>
    <td>".$row['message']."</td>
    </tr>";
}
?>

</table>

</body>
</html>

<?php
$conn->close();
?>