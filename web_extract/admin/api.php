<?php 
$conn = mysqli_connect('localhost', 'root', '', 'web');
$query = mysqli_query($conn, 'SELECT * FROM judul');

while ($row = mysqli_fetch_assoc($query)) {
	$data[] = $row;
	// $i++;
}
					
echo '<pre>'; 
print_r($data); 
echo '</pre>';

?>