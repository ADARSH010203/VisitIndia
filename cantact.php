he
<div class="contact section" id="section-6" style="background-color: #f9f9f9; padding: 50px 0;">
    <div class="contact-head text-center">
        <h3 style="color: #624038; font-size: 36px; font-weight: 700;">Contact Us</h3>
        <br>
        <h4 style="color: #000; font-size: 24px;">Plan Your Trip</h4>
        <br>
        <h5 style="color: #000; font-size: 18px;">Our travel experts can help you book now</h5>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4 address" style="color: #09F;">
                <h4 style="font-size: 24px;">Address</h4>
                <p style="color: #000; font-size: 18px;">Rajkot <br>Gujrat, India</p>
            </div>
            <div class="col-md-8 contact">
                <?php
                if(isset($_POST["sbmt"])) {
                    $cn=makeconnection();
                    $s="insert into contactus(Name,Phno,Email,Message) values('" . $_POST["t1"] ."','" . $_POST["t2"] ."','" . $_POST["t3"] ."','" . $_POST["t4"] ."')";
                    mysqli_query($cn,$s);
                    mysqli_close($cn);
                    echo "<script>alert('Record Saved');</script>";
                }
                ?>
                <form method="post">
                    <table border="0" width="100%">
                        <tr>
                            <td>
                                <input type="text" class="form-control" style="font-size: 18px; padding: 10px; border-radius: 5px;" placeholder="Name" name="t1" required pattern="[a-zA-z1 _]{1,50}" title="Please Enter Only Characters and numbers between 1 to 50 for Name">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" class="form-control" style="font-size: 18px; padding: 10px; border-radius: 5px;" placeholder="Contact No" name="t2" required pattern="[0-9]{10,12}" title="Please Enter Only numbers between 10 to 12 for Contact no">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" class="form-control" style="font-size: 18px; padding: 10px; border-radius: 5px;" placeholder="Email" name="t3" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <textarea class="form-control" rows="4" style="font-size: 18px; padding: 10px; border-radius: 5px;" placeholder="Message" name="t4" required></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <button type="submit" class="btn btn-primary" style="font-size: 18px; padding: 10px 20px; border-radius: 5px; background-color: #624038; border: none;">Send message</button>
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>
</div>
