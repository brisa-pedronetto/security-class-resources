
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SQL Injection</title>
</head>
<body>

<?php
$servername = "localhost:9001";
$username = "root";
$password = "example";
$database = "security";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// If incoming new name, save it
if (isset($_GET['username'])) {
    $sql = "UPDATE user SET name = '" . $_GET['username'] . "' WHERE id=1";
    $result = $conn->query($sql);
}

//  Get user name
$sql = "SELECT * FROM user";
$result = $conn->query($sql);
$user = $result->fetch_assoc();

//Connection Close
mysqli_close($conn);

?>

<h2>Username: <?php echo $user['name'] ?></h2>

<form>
  <input type="text" name="username" value="<?php echo $user['name'] ?>">
  <button>Update username</button>
</form>


<p style="opacity: 0.3">Try later: DROP statement 😈</p>

</body>
</html>
