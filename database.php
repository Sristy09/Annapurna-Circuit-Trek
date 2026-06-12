<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "trek";


$con = new mysqli($servername, $username, $password, $database);


if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST["name"])) {
    
        $name = $_POST["name"];
        $age = $_POST["age"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];

        
        $sql = "INSERT INTO userdata (name, age, email, phone) VALUES (?, ?, ?, ?)";
        $stmt = $con->prepare($sql);

        if (!$stmt) {
            echo "Error: " . $con->error;
        } else {
            
            $stmt->bind_param("siss", $name, $age, $email, $phone);

            
            if ($stmt->execute()) {
                echo "Data inserted successfully";
            } else {
                echo "Error: " . $stmt->error;
            }


            $stmt->close();
        }
    } else {
        echo "Error: 'name' not set in the form";
    }
}

$con->close();
?>
