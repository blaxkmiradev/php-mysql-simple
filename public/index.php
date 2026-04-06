<?php
require_once "../config/db.php";

$sql = "SELECT id, name FROM users";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP MySQL App</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>User List</h2>

<div class="container">
<?php
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<p>ID: " . $row["id"] . " - Name: " . $row["name"] . "</p>";
    }
} else {
    echo "<p>No data found</p>";
}
?>
</div>

</body>
</html>

<?php $conn->close(); ?>
