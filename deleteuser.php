<?php
include 'connection.php';

if (isset($_GET['userID'])) {
    $userId = $_GET['user_id'];

    // Perform the deletion query
    $delete_query = "DELETE FROM info WHERE userID = $userId";
    if (mysqli_query($conn, $delete_query)) {
        echo "User deleted successfully";
    } else {
        echo "Error deleting user: " . mysqli_error($conn);
    }

    // Close the database connection
    $conn->close();
}
?>
