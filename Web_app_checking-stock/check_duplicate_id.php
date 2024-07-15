<?php
include 'condb_store.php';

// Check if the ID already exists
$idProduct = $_POST["id_product"];
$sql = "SELECT COUNT(*) AS count FROM product_details WHERE id_product = '".$idProduct."'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$count = $row["count"];

// Send the response in JSON format
$response = array();
$response["isDuplicate"] = ($count > 0);
echo json_encode($response);

// Close the database connection
$conn->close();
?>