<?php
require_once './db/conn.php';


$sql = "SELECT client_id FROM client_info ORDER BY client_id DESC LIMIT 1";
$result = mysqli_query($conn, $sql);

if ($result && mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_assoc($result);
    $latest_id = $row['client_id'];

    
    $delete_query = "DELETE FROM client_info WHERE client_id = $latest_id";
    mysqli_query($conn, $delete_query);
}


header("Location: viewrecords.php");
exit;
?>