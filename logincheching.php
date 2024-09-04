 <?php
    include("function.php");

    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = "SELECT * FROM register WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($cn, $query);
    $count = mysqli_num_rows($result);
    if($count>0){
        $_SESSION['username'] = $username;
        header("location: index1.php");
    }
    else{
       echo "incorrect username and password please checked";

       header("location: login.php");
    }

?> 
