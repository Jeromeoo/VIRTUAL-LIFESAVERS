<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/requestform.css">
</head>
<body>
    <div class="wrapper">
        <h2>Blood Request Appointment</h2>
        <form>
            <form action="" method="">
            <div class="input-box">
                Fullname: <br>
                <input type="text" placeholder="Enter your name" name="fname" required>
            </div>
            <br>
            <div class="input-box">
                Email:
                <input type="text" placeholder="Enter your email" name="email" required>
            </div>
            <br>
            
                <label for="blood">Bloodtype:</label>
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
            <label for="blood">Request Blood Type</label>
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
            <div class="input-box">
                Purpose of Blood Request: <br>
                <input type="text" placeholder="" name="fname" required>
            </div>
           
            <br>
            Additional Message(Optional)<br>
            <textarea name="Message" rows="10" cols="52">
            </textarea>
        </form>
</body>
</html>