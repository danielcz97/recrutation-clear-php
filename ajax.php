<?php
$conn = mysqli_connect('localhost', 'root', 'Crisek?97', 'clearphp');
$result = mysqli_query($conn, "SELECT * FROM users");

$data =[];

while($row = mysqli_fetch_assoc($result))
{
	$data[] = $row;
}

echo json_encode($data);