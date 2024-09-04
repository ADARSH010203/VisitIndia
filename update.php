<?php
// Include the database connection file
include('function.php');

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the submitted form fields are set and not empty
    if (isset($_POST["username"]) && isset($_POST["password"]) && isset($_POST["new_password"])) {
        // Sanitize and validate input data
        $username = mysqli_real_escape_string($cn, $_POST["username"]);
        $password = mysqli_real_escape_string($cn, $_POST["password"]);
        $newPassword = mysqli_real_escape_string($cn, $_POST["new_password"]);

        // Check if the provided username and password match in the database
        $sql = "SELECT * FROM register WHERE username = '$username' AND password = '$password'";
        $result = $cn->query($sql);

        if ($result->num_rows == 1) {
            // Update the password in the database
            $updateSql = "UPDATE register SET password = '$newPassword' WHERE username = '$username'";
            if ($cn->query($updateSql) === TRUE) {
                echo "<p>Password updated successfully.</p>";
                header("location:index1.php");
            } else {
                echo "<p>Error updating password: " . $cn->error . "</p>";
            }
        } else {
            echo "<p>Invalid username or password.</p>";
        }
    } else {
        echo "<p>Please provide username, password, and new password.</p>";
    }
}

// Close connection
$cn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Password</title>
    <style>
        body {
            font-family:'Times New Roman', Times, serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: linear-gradient(to bottom right, #5a9bd4, #f4d03f, #8e44ad);
        }
        .container {
            width: 80%;
            max-width: 500px;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.2);
            display: flex;
            background: linear-gradient(to right, #5a9bd4, #f4d03f, #8e44ad); /* Gradient background */
        }
        .photo-container {
            flex: 1;
            background-image: url('images/91.jpg'); /* Background image URL */
            background-size: cover;
        }
        .form-container {
            flex: 1;
            padding: 20px;
            background-color: #ffebcd;
        }
        .form-container h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
            color: #555;
        }
        .form-group input[type="text"],
        .form-group input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            color: #555;
        }
        .form-group button {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #2980b9;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
        }
        .form-group button:hover {
            background-color: #2578a9;
        }
        .message {
            margin-top: 20px;
            text-align: center;
            color: #333;
        }
        .message.error {
            color: red;
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
    </style>
</head>
<body>
    <div class="container">
        <div class="photo-container"></div>
        <div class="form-container">
            <h2>Update Password</h2>

            <form id="updateForm">
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" id="username" name="username" required>
                </div>

                <div class="form-group">
                    <label for="password">Current Password:</label>
                    <input type="password" id="password" name="password" required>
                </div>

                <div class="form-group">
                    <label for="newPassword">New Password:</label>
                    <input type="password" id="newPassword" name="newPassword" required>
                </div>

                <button class="verify" type="submit">Update Password</button>
            </form>

            <div class="message" id="message"></div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#updateForm').submit(function(e) {
                e.preventDefault();
                var formData = $(this).serialize();

                $.ajax({
                    type: 'POST',
                    url: '', // Add your PHP script URL
                    data: formData,
                    success: function(response) {
                        $('#message').html(response);
                    }
                });
            });
        });
    </script>
</body>
</html>
