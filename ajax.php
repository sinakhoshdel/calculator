<?php 
require_once('classes/Calculator.php');
$data = json_decode(file_get_contents('php://input'), true);

$calculator = new Calculator($data['val']);

$response = $calculator->answer;
echo json_encode($response);
