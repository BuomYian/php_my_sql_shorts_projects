<?php 
require '../config.php'; 

if(isset($_GET['id'])) {
    // Sanitize the input to prevent SQL injection
    $id = $_GET['id'];

    $select = $conn->query("SELECT * FROM urls WHERE id='$id'");
    $select->execute();

    $data = $select->fetch(PDO::FETCH_OBJ);

    header("location: ".$data->url."");
}

?>
