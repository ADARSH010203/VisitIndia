<?php
session_start();
include 'function.php';

// Check if the OTP verification form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["verify_otp"])) {
    // Validate OTP
    $otp = $_POST["otp"];
    if ($_SESSION['otp'] == $otp) {
        // OTP is correct, redirect to reset password form
        header("Location: reset_password.php");
        exit;
    } else {
        // Incorrect OTP
        echo "Incorrect OTP. Please try again.";
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
            background-image: url("https://img.freepik.com/free-photo/abstract-backdrop-with-vibrant-multicolored-shapes-patterns-generated-by-ai_188544-15580.jpg");
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

        .forget-password-form input[type="text"] {
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
        .verify{
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

        .forget-password-form button[type="submit"] {
            width: calc(100% - 22px);
            padding: 12px; /* Updated button padding */
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
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <input type="text" name="email" placeholder="Enter your email" value="<?php echo isset($_SESSION['email']) ? $_SESSION['email'] : ''; ?>"><br><br>

        
        <input type="text" id="otp" name="otp" placeholder="Enter the OTP"><br><br>
        <input class="verify" type="submit" name="verify_otp" value="Verify OTP">
    </form>
    </div>
    <div class="line"></div> <!-- Line between the two divs -->
</div>
</body>
</html>
