<?php
// Database connection
$host = "localhost";
$username = "root";
$password = "";
$database = "MadhuPG";

$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST['first_na'];
    $last_name = $_POST['last'];
    $phone = $_POST['pho'];
    $dob = $_POST['bir'];
    $email = $_POST['mi'];
    $address = $_POST['add'];
    $joining_date = $_POST['join'];
    $sharing_type = $_POST['share'];
    $amount = $_POST['am'];
    $payment_option = $_POST['payment'];

    // Insert data into the database
    $sql = "INSERT INTO Registration (first_name, last_name, phone, dob, email, address, joining_date, sharing_type, amount, payment_option)
            VALUES ('$first_name', '$last_name', '$phone', '$dob', '$email', '$address', '$joining_date', '$sharing_type', '$amount', '$payment_option')";
    if ($conn->query($sql) === true) {
        echo "Registration successful. ";
        echo '<br><a href="index.html">Back to Home</a>';
        
        // Show the payment receipt and a print button
        echo "<h3>Payment Receipt</h3>";
        echo "<p><strong>Name: </strong>" . $first_name . " " . $last_name . "</p>";
        echo "<p><strong>Amount: </strong>" . $amount . "</p>";
        
        // Button to print receipt
        echo "<button onclick='window.print()'>Print Receipt</button>";
    }
}

$conn->close();
?>
