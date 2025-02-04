<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: http://localhost:61990');

include "konek.php";

$name = $_POST['name'];
$birth = $_POST['birth'];
$gender = $_POST['gender'];
$religion = $_POST['religion'];
$address = $_POST['address'];

$stmt = $db->prepare("INSERT INTO warga (name, birth, gender, religion, address) VALUES (?, ?, ?, ?, ?)");
$result = $stmt->execute([$name, $birth, $gender, $religion, $address]);

echo json_encode([
    'success' => $result
]);
?>