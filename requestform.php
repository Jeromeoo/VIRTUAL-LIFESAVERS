<?php
include 'connection.php';

// Process the form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = isset($_POST["requester_name"]) ? $_POST["requester_name"] : '';
    $email = isset($_POST["email"]) ? $_POST["email"] : '';
    $contactnumber = isset($_POST["contactnumber"]) ? $_POST["contactnumber"] : '';
    $blood = isset($_POST["blood"]) ? $_POST["blood"] : '';
    $request_blood = isset($_POST["request_blood"]) ? $_POST["request_blood"] : '';
    $purpose = isset($_POST["purpose"]) ? $_POST["purpose"] : '';
    $message = isset($_POST["message"]) ? $_POST["message"] : '';

    // Insert data into the database
    $sql = "INSERT INTO bloodrequests (requester_name, email, contact_number, blood, request_blood, purpose, message) 
            VALUES ('$fname', '$email', '$contactnumber', '$blood', '$request_blood', '$purpose', '$message')";
    echo "SQL Query: " . $sql . "<br>";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Request Sent!'); window.location.href = 'homepage2.php';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    // Close the database connection
    $conn->close();
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Request Form | Virtual Lifesaver</title>
    <link rel="stylesheet" href="css/requestform.css">
</head>
<body>
    <div class="wrapper">
        <h2>Blood Request Appointment</h2>
        <form action=" " method="post" class="form">
            <div class="input-box">
                Full Name: <br>
                <input type="text" placeholder="Enter your name" name="requester_name" required>
            </div>
            <br>
            <div class="input-box">
                Email: <br>
                <input type="text" placeholder="Enter your email" name="email" required>
            </div>
            <br>
            <div class="input-box">
                Contact Number: <br>
                <input type="text" placeholder="Enter your Phone number" name="contactnumber" required>
            </div>
            <br>
            
            <label for="blood">Blood Type:</label>
            <select id="blood" name="blood">
                <option value="a+">A+</option>
                <option value="a-">A-</option>
                <option value="b+">B+</option>
                <option value="b-">B-</option>
                <option value="ab+">AB+</option>
                <option value="ab-">AB-</option>
                <option value="o+">O+</option>
                <option value="o-">O-</option>
            </select>
            <br>
            <label for="request_blood">Request Blood Type:</label>
            <select id="request_blood" name="request_blood">
                <option value="a+">A+</option>
                <option value="a-">A-</option>
                <option value="b+">B+</option>
                <option value="b-">B-</option>
                <option value="ab+">AB+</option>
                <option value="ab-">AB-</option>
                <option value="o+">O+</option>
                <option value="o-">O-</option>
            </select>
            <div class="input-box">
                Purpose of Blood Request: <br>
                <input type="text" placeholder="Purpose of your request" name="purpose" required>
            </div>
           
            <br>
            Additional Message (Optional)<br>
            <textarea class="Message" name="message" rows="9" cols="49"></textarea>
            <div class="submit-container">
                <button name="submit" class="submit-button" type="submit"><span>Submit</span></button>
            </div>
        </form>
    </div>
</body>
</html>
