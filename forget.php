<?php
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
include ('function.php');

// Create connection
$cn = makeconnection();
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["forget_password"])) {
    // Validate email
    $email = $_POST["email"];
    $_SESSION['email'] = $email;

    // Check if email exists in the database
    $sql = "SELECT * FROM register WHERE email = '$email'";
    $result = $cn->query($sql);

    if ($result->num_rows > 0) {
        // Generate a random OTP (6 digits)
        $otp = mt_rand(100000, 999999);

        // Store the OTP in the session for verification
        $_SESSION['otp'] = $otp;

        // Send the OTP to the user's email using PHPMailer
        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->isSMTP();                                            // Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                     // SMTP server
            $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
            $mail->Username   = 'adarshkumarsbrhs@gmail.com';                     // SMTP username
            $mail->Password   = 'behu wbiq dhmp xdrp';                         // SMTP password
            $mail->SMTPSecure = 'ssl';      // Enable TLS encryption
            $mail->Port       = 465 ;   
            //Recipients
            $mail->setFrom('adarshkumarsbrhs@gmail.com', 'visit india');
            $mail->addAddress($email);

            // Content
            $mail->isHTML(true);
            $mail->Subject = 'OTP for Password Reset';
            $mail->Body    = "Your OTP for password reset is : $otp";

            $mail->send();

            // Redirect to the OTP verification page
            header("Location: varify.php");
            exit;
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    } else {
        echo "<p style='color=red;'>Email not found. Please enter a valid email address.</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forget Password</title>
    <style>
        body {
            font-family:'Times New Roman', Times, serif;
            background: linear-gradient(to bottom right, #5a9bd4, #f4d03f, #8e44ad);
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            /* background-image: url(""); */
            background-size: cover;
            background-position: center;
        }

        .container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            max-width: 800px;
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

        .forget-password-form input[type="email"] {
            width: calc(100% - 22px);
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 16px;
            color: #555;
            font-family:'Times New Roman', Times, serif;
            text-align: center; /* Center align input text */
        }

        .forget-password-form button[type="submit"] {
            width: 100%;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            background-color: #008080; /* Teal color for the submit button */
            color: #fff;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
            font-family:'Times New Roman', Times, serif;
            outline: none; /* Remove default button focus outline */
        }

        .forget-password-form button[type="submit"]:hover {
            background-color: #005555; /* Darker teal color on hover */
        }

        .forget-password-form button[type="submit"]:active {
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
        <h2>Forget Password</h2>
        <form id="forget-form" method="post" action="">
            <label for="email">Enter Your Email</label><br>
            <input type="email" name="email" id="email" placeholder="Enter your email" required><br><br>
            <button type="submit" name="forget_password">Forget Password</button>
        </form>
    </div>
    <div class="line"></div> <!-- Line between the two divs -->
</div>
</body>
</html>
