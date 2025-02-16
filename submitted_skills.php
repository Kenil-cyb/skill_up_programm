<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "skills_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $skill = htmlspecialchars($_POST['skill']);
    $contact = htmlspecialchars($_POST['contact']);

    $sql = "INSERT INTO skills (name, skill, contact) VALUES ('$name', '$skill', '$contact')";

    if ($conn->query($sql) === TRUE) {
        echo "New skill record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
