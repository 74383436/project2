<?php
$servername = "localhost";
$username = 'username';
$password = 'password';
$dbname = "user";

try {
  // نضع الشيفرات داخل كتلة 
  // try-catch
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // باقي الأسطر تكتب بشكل طبيعي
        // ...

        if (mysqli_query($conn, $sql)) {
            echo "Data inserted successfully!";
        } else {
            echo "Error inserting data: " . mysqli_error($conn);
        }
    }

    $conn->close();
} catch (Exception $e) {
    echo "An error occurred: " . $e->getMessage();
}
?>