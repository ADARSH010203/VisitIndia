<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
            background: linear-gradient(to right, #2980b9, #6dd5fa, #ffffff);
        }
        .login-container {
            width: 80%;
            max-width: 500px;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.2);
            display: flex;
             /* Gradient background */
        }
        .photo-container {
            flex: 1;
            background-image: url('https://tse3.mm.bing.net/th?id=OIP.3YD6BYo7QXfw5Y5d_79tGwHaFj&pid=Api&P=0&h=180.jpg'); /* Change the URL to your photo */
            background-size: cover;
        }
        .form-container {
            flex: 1;
            padding: 20px;
            background-color: #f2f2f2;
        }
        .form-container h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }
        .form-group {
            margin-bottom: 10px;
            
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
            color: #555;
        }
        .form-group input[type="text"],
        .form-group input[type="password"] {
            width: 100%;
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            color: #555;
        }
        .form-group button {
            width: 100%;
            padding: 12px 20px;
            border: none;
            border-radius: 5px;
            background-color: #2980b9;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
            margin-bottom: 10px; /* Added margin bottom */
            transition: background-color 0.3s ease;
        }
        .form-group button:hover {
            background-color: #2578a9;
        }
        .form-group a {
            text-decoration: none;
            color: #fff;
        }
        .form-group a:hover {
            text-decoration: underline;
        }
        .btn-register {
            margin-top: 10px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="photo-container"></div>
        <div class="form-container">
            <h2 style = "color: #008080;">Login</h2>
            <form action="logincheching.php" method="POST">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <div class="form-group">
                    <button type="submit">Login</button>
                    <a href="update.php"><button type="button">Update Password</button></a>
                    <a href="forget.php"><button type="button">Forget Password</button></a>
                </div>
            </form>
            <p class="btn-register">Don't have an account? <a href="signup.php">Register</a></p>
        </div>
    </div>
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
    </script>
</body>
</html>
