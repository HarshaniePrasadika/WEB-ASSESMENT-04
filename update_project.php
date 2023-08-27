<?php
require_once('db_connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["update_id"];
    $newTitle = $_POST["new_title"];
    $newDescription = $_POST["new_description"];

    $sql = "UPDATE projects SET Title='$newTitle', Description='$newDescription' WHERE ID=$id";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
    } else {
        echo "Error updating project information: " . $conn->error;
    }
}

$conn->close();
?>

