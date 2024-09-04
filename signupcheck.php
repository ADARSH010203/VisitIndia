<?php 
     include('function.php');     
?>
<?php
    if (($_SERVER["REQUEST_METHOD"] == "POST") and (isset($_POST['submit'] ))) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $number = $_POST['number']; // New field
        $address = $_POST['address']; // New field
        $cn = makeconnection();
        // SQL to insert data into register table with new fields
        $sql = "INSERT INTO register (username, email, password, number, address) VALUES ('$username', '$email', '$password', '$number', '$address')";

        if (mysqli_query($cn , $sql)) {
            echo "New record created successfully";
            header("location: index1.php");
        } else { 
            echo "Error: " . $sql . "<br>" . $cn->error;
        }
    }
?> 