<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>

<link href="style.css" rel="stylesheet" type="text/css" />

<link href="../css/bootstrap.css" rel='stylesheet' type='text/css'/>
<link href="../css/style.css" rel="stylesheet" type="text/css" media="all"/>
<meta name="viewport" content="width=device-width, initial-scale=1">

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--js--> 
<script src="js/jquery.min.js"></script>
<!--/js-->
</head>
<body>
<!--header-->
<!--sticky-->

<?php include('function.php'); ?>
<?php
$_SESSION['loginstatus']="";
if(isset($_POST["sbmt"]))
{
    $cn=makeconnection();
    $s="select * from users where Username='" . $_POST["t1"] . "' and Pwd='" . $_POST["t2"] ."'";
    
    $q=mysqli_query($cn,$s);
    $r=mysqli_num_rows($q);
    $data=mysqli_fetch_array($q);
    mysqli_close($cn);
    if($r>0)
    {
        $_SESSION["Username"]= $_POST["t1"];
        $_SESSION["usertype"]=$data[2];
        $_SESSION['loginstatus']="yes";
        header("location:index.php");
    }
    else
    {
    echo "<script>alert('Invalid User Name or Password');</script>";
}
}
?>



<?php include('topforlogin.php'); ?>
<!--/sticky-->

<div style="padding-top:150px; box-shadow:1px 1px 20px black; min-height:570px" class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <form method="post" class="form-horizontal">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Login</h3>
                    </div>
                    <div class="panel-body">
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label">User Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="username" name="t1" required pattern="[a-zA-z _]{1,50}" title"Please Enter Only Characters between 1 to 50 for User Name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password" class="col-sm-2 control-label">Password</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="password" name="t2" required pattern="[a-zA-z0-9]{1,10}" title"Please Enter Only Characters between 1 to 10 for Password">
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer text-center">
                        <input type="submit" class="btn btn-primary" value="Login" name="sbmt">
                        <button class="btn btn-warning"><a href="../index.php" style="color: #fff; text-decoration: none;">Logout</a></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php include('bottom.php'); ?>
</body>
</html>
