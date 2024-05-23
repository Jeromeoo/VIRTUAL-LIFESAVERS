
<?php 


include 'connection.php';

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT * FROM event_logs";



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Recipient</title>
    <link rel="icon" href="css/images/Announcement-Logo.jpg" type="">

    <link rel="preconnect" href="https://fonts.googleapis.com%22%3E/">
    <link href="https://fonts.googleapis.com/css2?family=Vollkorn:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-Avb2QiuDEEvB4bZJYdft2mNjVShBftLdPG8FJ0V7irTLQ8Uo0qcPxh4Plq7G5tGm0rU+1SPhVotteLpBERwTkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/userdashboard-donation.css">
</head>
<body>

<header class="site-header">
    <div class="announcement-header">
        <img src="css/images/Announcement-Logo.jpg" alt="">
        <p>Online Blood Donation: Blood Bank Management System</p>
        <ul class="admin-ddown"></ul>
        <li class="dropdown">
            <button>User ↓</button>
            <div class="content">
                <a href="#" onclick="confirmLogout()">LOGOUT</a>
                <!-- JavaScript code -->
                <script>
                    function confirmLogout() {
                        var confirmLogout = confirm("Are you sure you want to logout?");
                        if (confirmLogout) {
                            window.location.href = 'homepage.php'; // Redirect if the user confirms
                        }
                        // If the user cancels, do nothing or provide alternative actions
                    }
                </script>
            </div>
        </li>
    </div>

    <div class="og-container">
        <div class="sidebar">
            <ul>
            <li><a href="admin.php"><i class="fa-solid fa-house"></i>Home</a></li>         
            <li><a href="donors.php"><i class="fa-solid fa-person"></i>Donors</a></li>
            <li><a href="bloodrequests.php"><i class="fa-solid fa-list"></i>Requests</a></li>
            <li><a href="handedover.php"><i class="fa-solid fa-briefcase"></i>Handed Over</a></li>
            <li><a href="users.php"><i class="fa-solid fa-user"></i>Users</a></li>
            <li><a href="eventlogs.php"><i class="fa-solid fa-book"></i>Event Logs</a></li>
        </div>

        <div class="head">
            <h1>USER'S EVENT LOGS</h1>
        </div>

        <div class="container1">
        <table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Logged On</th>
            <th>Role</th>
            <th>Who did?</th>
        </tr>
    </thead>
    <tbody>
        <?php
        // Fetch records from the event_logs table
        $query = "SELECT * FROM event_logs";
        $result = $conn->query($query);

        // Check if records exist
        if ($result->num_rows > 0) {
            // Loop through each row of the result set
            while ($row = $result->fetch_assoc()) {
                // Output the data in each row
                echo "<tr>";
                echo "<td>" . $row['ID'] . "</td>";
                echo "<td>" . $row['logged_on'] . "</td>";
                echo "<td>" . $row['role'] . "</td>";
                echo "<td>" . $row['User_email'] . "</td>";
                echo "</tr>";
            }
        } else {
            // If no records found, display a message
            echo "<tr><td colspan='4'>No records found</td></tr>";
        }
        ?>
    </tbody>
</table>