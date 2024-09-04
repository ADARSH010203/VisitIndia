<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
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
            font-family:Verdana, Geneva, Tahoma, sans-serif;
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

        .signup-form {
            padding: 20px;
            background-color: #f2f2f2;
        }

        .signup-form h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #008080; /* Teal color for the header */
        }

        .signup-form label {
            display: block;
            margin-bottom: 10px;
            color: #555;
        }

        .signup-form input[type="text"],
        .signup-form input[type="email"],
        .signup-form input[type="password"] {
            width: calc(100% - 22px);
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 16px;
            color: #555;
            font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        }

        .signup-form input[type="submit"] {
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
        }

        .signup-form input[type="submit"]:hover {
            background-color: #005555; /* Darker teal color on hover */
        }

        /* Password visibility toggle */
        .password-toggle {
            position: relative;
        }

        .password-toggle input[type="password"] {
            padding-right: 40px;
        }

        .password-toggle .toggle-password {
            position: absolute;
            top: 50%;
            right: 10px;
            transform: translateY(-50%);
            cursor: pointer;
            color: #666;
            font-family:'Times New Roman', Times, serif;
        }

        .password-toggle .toggle-password:hover {
            color: #333;
        }

        .photo {
            background-image: url('https://assets.vogue.in/photos/603780b297a6d928a4e6eae9/2:3/w_2560%2Cc_limit/Travel.jpg');
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

<div class="container hidden"> <!-- Initially hidden -->
    <div class="photo">
        <!-- <img src="images/photo.jpg"> -->
    </div>
    <div class="signup-form"> <!-- Signup Form -->
        <h2>Registration Form</h2>
        <form action="signupcheck.php" method="post">
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" placeholder="User name">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required placeholder="Email">
            <label for="password" class="password-toggle">Password:
                <input type="password" name="password" id="password" required placeholder="Password">
                <span class="toggle-password">Show</span>
            </label>
            <label for="number">Number:</label>
            <input type="text" name="number" id="number" required placeholder="Number">
            <label for="address">Address:</label>
            <input type="text" name="address" id="address" required placeholder="Address">
            <input type="submit" name="submit" value="Register" onclick="slideIn()">
        </form>
    </div>
    <div class="line"></div> <!-- Line between the two divs -->
</div>

<!-- Password visibility toggle script -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const togglePassword = document.querySelector('.toggle-password');
        const passwordInput = document.getElementById('password');

        togglePassword.addEventListener('click', function() {
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);
            this.textContent = type === 'password' ? 'Show' : 'Hide';
        });
    });

    function slideIn() {
        const container = document.querySelector('.container');
        container.classList.remove('hidden'); // Remove 'hidden' class to reveal the container
    }
</script>
</body>
</html>
