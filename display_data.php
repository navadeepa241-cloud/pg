<!DOCTYPE html>
<hrad>
<title>Login Page</title>
<link rel="stylesheet" href="style.css">
</hrad>
<body  >
        <header>
            <h1> Madhu PG for Boys  </h1>
            <nav>
            <div class="navi">
                <a href="index.html">Home</a>
                <a href="login.html">Login</a>
                <a href="re.html">Registration</a>
            </div>
            </nav>
        </header>
</body>
<?php
// Database connection
$host = "localhost";
$username = "root";
$password = "";
$database = "madhupg";

$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch all registrations
$sql = "SELECT * FROM Registration";
$result = $conn->query($sql);

echo "<h1>Registered Users</h1>";

if ($result->num_rows > 0) {
    echo "<table border='1'>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Phone</th>
                <th>DOB</th>
                <th>Email</th>
                <th>Address</th>
                <th>Joining Date</th>
                <th>Sharing Type</th>
                <th>Amount</th>
                <th>Payment Option</th>
            </tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row['id'] . "</td>
                <td>" . $row['first_name'] . "</td>
                <td>" . $row['last_name'] . "</td>
                <td>" . $row['phone'] . "</td>
                <td>" . $row['dob'] . "</td>
                <td>" . $row['email'] . "</td>
                <td>" . $row['address'] . "</td>
                <td>" . $row['joining_date'] . "</td>
                <td>" . $row['sharing_type'] . "</td>
                <td>" . $row['amount'] . "</td>
                <td>" . $row['payment_option'] . "</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "<p>No registrations found.</p>";
}

$conn->close();
?>
