<?php
require_once('db_connection.php');

$sql = "SELECT * FROM projects";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<div class='project'>";
        echo "<h4>" . $row["Title"] . "</h4>";
        echo "<p>" . $row["Description"] . "</p>";
        if (!empty($row["Image"])) {
            echo "<img src='" . $row["Image"] . "' alt='Project Image'>";
        }
        echo "</div>";
    }
} else {
    echo "No projects found.";
}

$conn->close();
?>
