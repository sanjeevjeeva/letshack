<?php
$conn = new mysqli("localhost", "root", "", "evproject");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Get form data safely
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    // Insert query
    $sql = "INSERT INTO enquiry (name, email, phone, message)
            VALUES ('$name', '$email', '$phone', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "<h2>✅ Enquiry Submitted Successfully!</h2>";
        echo "<a href='view.php'>👉 View All Enquiries</a><br><br>";
        echo "<a href='contact.php'>⬅ Go Back</a>";
    } else {
        echo "❌ Error: " . $conn->error;
    }
}

$conn->close();
?>