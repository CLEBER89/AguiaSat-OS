<?php
class Cities extends CI_Controller

$sql = "SELECT id_country, country FROM countries" ;
$stmt = $db->prepare($sql);

//$stmt->bindValue(1, $_GET['country']);

$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($result);