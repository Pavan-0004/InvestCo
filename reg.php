<?php
// Get the form data
$username = $_POST['username'];
$password = $_POST['password'];
$name = $_POST['name'];
$email = $_POST['email'];
$telegram = $_POST['telegram'];
$phone = $_POST['phone'];

$host = "localhost";
        $dbusername = "";
        $dbpassword = "";
        $dbname = "";

// Create a connection to the database
$conn = mysqli_connect($host, $dbusername, $dbpassword, $dbname);

// Check if the connection was successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Insert the form data into the database
$sql = "INSERT INTO login (username, password, name, email, telegram, phone, gold, oil, farm, pharmaceuticals) VALUES ('$username', '$password', '$name', '$email', '$telegram', '$phone', '0', '0', '0', '0')";

if(mysqli_query($conn, $sql)){
    header("Location: login.php");
    exit();
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}


// Close the database connection
mysqli_close($conn);
?>
