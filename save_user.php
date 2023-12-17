<?php

$username = $_POST['username'];
$password = $_POST['password'];

// Validate the data (you can add more validation if needed)

// Create a database connection
$conn = new mysqli('localhost', 'username', 'password', 'database_name');
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}
$stmt = $conn->prepare('INSERT INTO users (username, password) VALUES (?, ?)');
$stmt->bind_param('ss', $username, $password);

// Execute the SQL statement
if ($stmt->execute()) {
    echo 'User data saved successfully.';
} else {
    echo 'Error: ' . $stmt->error;
}
$stmt->close();
$conn->close();
?>
<form id="myForm">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>

    <button type="submit">Send</button>
</form>


?>