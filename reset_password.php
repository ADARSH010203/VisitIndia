<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "travel";

// Create connection
$con = new mysqli($servername, $username, $password, $dbname);

// Check if the password reset form is submitted
if (isset($_POST["reset_password"])) {
    // Validate and update password
    $password = $_POST["password"];
    $email = $_SESSION['email'];


        
        $sql = "UPDATE register SET password = '$password'  WHERE email = '$email'";
        
        if ($con->query($sql) === TRUE) {
            // Password updated successfully, redirect to login page
            header("Location: login.php");
            exit;
        } else {
            echo "Error updating password: " . $con->error;
        }
    } else {
        // Passwords do not match
        echo "Passwords do not match. Please try again.";
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forget Password</title>
    <style>
        /* Your CSS Styles */
        body {
            font-family: 'Roboto', sans-serif;
            background: linear-gradient(to bottom right, #5a9bd4, #f4d03f, #8e44ad);
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-image: url("images/aa.jpg");
            background-size: cover;
            background-position: center;
        }

        .container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            max-width: 500px;
            height: 300px;
            background-color: #fff;
            border-radius: 20px;
            box-shadow: 0px 0px 20px rgba(0,0,0,0.2);
            transition: transform 0.5s ease; /* Transition for sliding effect */
            position: relative; /* Needed for absolute positioning */
        }

        .line {
            position: absolute;
            top: 0;
            bottom: 0;
            left: calc(50% - 1px); /* Adjust the position of the line */
            background-color: #005555; /* Adjust the background color of the line */
            width: 2px; /* Adjust the width of the line */
            border-radius: 1px; /* Adjust the border radius */
            border-left: 2px solid #005555; /* Adjust the border color */
        }

        .forget-password-form {
            padding: 20px;
            background-color: #f2f2f2;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .forget-password-form h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #008080; /* Teal color for the header */
        }

        .forget-password-form label {
            display: block;
            margin-bottom: 10px;
            color: #555;
            text-align: center; /* Center align label text */
        }

        .forget-password-form input[type="password"] {
            width: calc(100% - 22px);
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 16px;
            color: #555;
            font-family: 'Roboto', sans-serif;
            text-align: center; /* Center align input text */
        }

        .forget-password-form input[type="submit"] {
            width: 100%;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            background-color: #008080; /* Teal color for the submit button */
            color: #fff;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
            font-family: 'Roboto', sans-serif;
            outline: none; /* Remove default button focus outline */
        }

        .forget-password-form input[type="submit"]:hover {
            background-color: #005555; /* Darker teal color on hover */
        }

        .forget-password-form input[type="submit"]:active {
            transform: translateY(2px); /* Add slight downward movement on button press */
        }

        .photo {
            background-image: url('https://www.revv.co.in/blogs/wp-content/uploads/2019/11/self-drive-car-rental-delhi-gurgaon-noida_revv-blog.jpg');
            background-size: cover;
            background-position: center;
            border-radius: 20px 0 0 20px;
            width: 100%; /* Set the width to fill the container */
            height: 100%; /* Set the height to fill the container */
            overflow: hidden; /* Ensure the image doesn't overflow its container */
        }

    </style>
</head>
<body>

<div class="container">
    <div class="photo">
        <!-- Placeholder for photo -->
    </div>
    <div class="forget-password-form">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <label for="password">New Password:</label><br>
    <input type="password" id="password" name="password" required><br><br>
    <label for="confirm_password">Confirm New Password:</label><br>
    <input type="password" id="confirm_password" name="confirm_password" required><br><br>
    <input type="submit" name="reset_password" value="Reset Password">
    </form>

    </div>
    <div class="line"></div> <!-- Line between the two divs -->
</div>
</body>
</html>
