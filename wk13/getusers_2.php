<!DOCTYPE html>
<html>
<head>
    <title>User Query Form</title>
</head>
<body>

<form method="GET">
    <label for="firstname">Enter First Name:</label>
    <input type="text" id="firstname" name="firstname">
    <input type="submit" value="Search">
</form>

<?php
$servername = "db-mysql-tor1-26552-do-user-15611648-0.c.db.ondigitalocean.com";
$username = "doadmin";
$database = "defaultdb";
$password = "AVNS_Lf76L6C9ihi4GyBHvrC"
$port = 25060;
$sslmode = "REQUIRED";

$conn = new mysqli($servername, $username, $password, $database, $port);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_GET['firstname'])) {
    $firstname = $_GET['firstname'];

    $sql = "SELECT * FROM users WHERE firstname = ? AND active = 1";
    $stmt = $conn->prepare($sql);

    $stmt->bind_param("s", $firstname);

    $stmt->execute();

    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo "<table border='1'>";
        echo "<tr><th>ID</th><th>Username</th><th>Email</th><th>First Name</th><th>Last Name</th><th>Active</th></tr>";

        while($row = $result->fetch_assoc()) {
            echo "<tr><td>".$row["id"]."</td><td>".$row["username"]."</td><td>".$row["email"]."</td><td>".$row["firstname"]."</td><td>".$row["lastname"]."</td><td>".$row["active"]."</td></tr>";
        }

        echo "</table>";
    } else {
        echo "0 results";
    }

    $stmt->close();
}

$conn->close();
?>

</body>
</html>
