<?php 
    $title = "View Records";
    require_once './includes/header.php';
    require_once './db/conn.php'; 
    
    $sql = "SELECT * FROM client_info WHERE 1";
    $result = mysqli_query($conn, $sql);

if ($result && mysqli_num_rows($result) > 0) {
  echo '<div class="container"><table class="table">';
  echo '<thead><tr><th>ID</th><th>Email</th><th>Address</th><th>City</th><th>Province</th><th>Postal</th></tr></thead><tbody>';
  while ($row = mysqli_fetch_assoc($result)) {
    echo '<tr>';
    echo '<td>' . $row['client_id'] . '</td>';
    echo '<td>' . $row['email'] . '</td>';
    echo '<td>' . $row['address'] . '</td>';
    echo '<td>' . $row['city'] . '</td>';
    echo '<td>' . $row['province'] . '</td>';
    echo '<td>' . $row['postalcode'] . '</td>';
    echo '</tr>';
  }
  echo '</tbody></table></div>';
} else {
  echo "<p>No records found</p>";
}
?>
	<h1>Testing!!</h1>
<?php 
    require_once './includes/footer.php';
 ?>
