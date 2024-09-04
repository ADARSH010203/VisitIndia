<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    #map {
      height: 400px;
      width: 100%;
    }
    .image-box{
        align-items: center;
    }
    .form-control {
            border-radius: 0;
        }
    form span{
        color: red;
        font-size: 13px;
    }
  </style>
</head>
<body>

    <!-- Contact Us form -->

    <div id="section-5" class="contact section">
    <div class="contact-head text-center">
        <h3>Contact Us</h3>
        <br>
        <h4 style="color:#000">Plan Your Trip</h4>
        <br>
        <h5 style="color:#000">Our travel experts can help you book now</h5>

        <div class="contact-grids">
            <div class="container">
                <div class="col-md-4 address">
                    <h4 style="color:#09F"></h4>
                    <p style="color:#000"><br/></p>
                    <br/>
                </div>
                <div class="col-md-8 contact">
                    <?php
                    if(isset($_POST["sbmt"])) {
                        $cn=makeconnection();
                        $s="insert into contactus(Name,Phno,Email,Message) values('" . $_POST["guest_name"] ."','" . $_POST["guest_phone"] ."','" . $_POST["guest_email"] ."','" . $_POST["jobDescription"] ."')";
                        mysqli_query($cn,$s);
                        mysqli_close($cn);
                        echo "<script>alert('Record Save');</script>";
                    }
                    ?>
                    <form method="post">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="guest_name" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="guest_name" name="guest_name" placeholder="Enter your name">
                                </div>
                                <div class="mb-3">
                                    <label for="guest_phone" class="form-label">Contact No</label>
                                    <input type="text" class="form-control" id="guest_phone" name="guest_phone" placeholder="Enter your phone number">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="guest_email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="guest_email" name="guest_email" placeholder="Enter your email">
                                </div>
                                <div class="mb-3">
                                    <label for="jobDescription" class="form-label">Message</label>
                                    <textarea class="form-control" id="jobDescription" name="jobDescription" rows="4" placeholder="Enter your message"></textarea>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary" name="sbmt">Send message</button>
                    </form>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>


</body>
</html>