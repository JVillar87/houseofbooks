<?php
// CODE HERE
$data = json_decode(file_get_contents("php://input"), true);
// COMPLETE CODE
$title = $data['title'];
$author = $data['author'];
$year = $data['year'];

$sql = "INSERT INTO books (title, author, year) 
VALUES ('$title', '$author', $year)";

if ($conn->query($sql) === TRUE) {
    echo json_encode(["status" => "OK"]);
} else {
    echo json_encode(["status" => "KO"]);
}
$conn->close();
