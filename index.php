<!DOCTYPE html>
<html>

<head>
    <title></title>
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);
        //function hideURLbar(){ window.scrollTo(0,1); } 
    </script>
    <!--js-->
    <script src="js/jquery.min.js"></script>

</head>

<body>
    <!--header-->
    <!--sticky-->
    <?php include('function.php'); ?>

    <?php include('top.php'); ?>
    <!--/sticky-->
    <?php include('slider.php'); ?>
    <!--About-->
    <div class="about section" id="section-2" style="background-color: #333;padding: 20px;">
        <div class="about-head text-center">
            <h3>About Us</h3>
        </div>
        <div class="container">
            <div class="col-md-4 about-grids">
                <h4>Our Vision</h4>
                <p>Tourism which is ethical, fair, and a positive experience for both travelers and the people and places they visit.</p>
                <p>We envision a world where tourism contributes positively to local communities, respects the environment, and fosters cultural exchange.</p>
            </div>
            <div class="col-md-4 about-grids grid2">
                <h4>Our Mission</h4>
                <p>To ensure tourism always benefits local people by challenging bad practices and promoting sustainable, responsible travel.</p>
                <p>We strive to create awareness about the impact of tourism on communities and environments, and advocate for ethical tourism practices.</p>
            </div>
            <div class="col-md-4 about-grids">
                <h4>Who We Are</h4>
                <p>We are a passionate team of travelers, advocates, and professionals dedicated to making a positive difference in the world of tourism.</p>
                <p>Our diverse backgrounds and experiences allow us to approach the challenges of sustainable tourism from multiple perspectives.</p>
            </div>
        </div>
    </div>


    <!--/About-->
    <!--top-tours-->
    <div class="section" id="section-3">
        <div id="portfolio" class="portfolio">
            <div class="top-tours-head text-center">
                <h3>Gallery</h3>
            </div>
            <ul id="filters" class="clearfix wow bounceIn" data-wow-delay="0.4s">
                <li><span class="filter active" data-filter="app card icon logo fun">ALL</span></li>
                <li><span class="filter" data-filter="app">Domestic Travel</span></li>
                <li><span class="filter" data-filter="card">Foreign Travel</span></li>
                <li><span class="filter" data-filter="icon">Short Date Tour</span></li>
                <li><span class="filter" data-filter="fun">Long Date Tour</span></li>
            </ul>
            <div id="portfoliolist">
                <div class="portfolio card mix_all" data-cat="card" style="display: inline-block; opacity: 1;">
                    <div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">
                        <a href="https://en.wikipedia.org/wiki/Kerala" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
                            <img src="images/t1.jpg" class="img-responsive" alt="" /></a>
                    </div>

                </div>
                <div class="portfolio app mix_all" data-cat="app" style="display: inline-block; opacity: 1;">
                    <div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">
                        <a href="https://en.wikipedia.org/wiki/Delhi" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
                            <img src="images/t2.jpg" class="img-responsive" alt="" /></a>
                    </div>
                </div>
                <div class="portfolio card mix_all" data-cat="card" style="display: inline-block; opacity: 1;">
                    <div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">
                        <a href="https://en.wikipedia.org/wiki/Golden_Temple" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
                            <img src="images/t3.jpg" class="img-responsive" alt="" /></a>

                    </div>
                </div>
                <div class="portfolio icon mix_all" data-cat="icon" style="display: inline-block; opacity: 1;">
                    <div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">
                        <a href="https://en.wikipedia.org/wiki/Leh" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
                            <img src="images/t4.jpg" class="img-responsive" alt="" /></a>

                    </div>
                </div>
                <div class="portfolio card mix_all" data-cat="card" style="display: inline-block; opacity: 1;">
                    <div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">
                        <a href="https://en.wikipedia.org/wiki/Assam" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
                            <img src="images/t5.jpg" class="img-responsive" alt="" /></a>

                    </div>
                </div>
                <div class="portfolio fun mix_all" data-cat="fun" style="display: inline-block; opacity: 1;">
                    <div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">
                        <a href="https://en.wikipedia.org/wiki/Haridwar" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
                            <img src="images/14.jpg" class="img-responsive" alt="" /></a>

                    </div>
                </div>
                <div class="portfolio fun mix_all" data-cat="fun" style="display: inline-block; opacity: 1;">
                    <div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">
                        <a href="https://en.wikipedia.org/wiki/Mahabodhi_Temple" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
                            <img src="images/16.jpg" class="img-responsive" alt="" /></a>
                    </div>
                </div>
                <div class="portfolio icon mix_all" data-cat="fun" style="display: inline-block; opacity: 1;">
                    <div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">
                        <a href="https://en.wikipedia.org/wiki/Hampi" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
                            <img src="images/17.jpg" class="img-responsive" alt="" /></a>

                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>

    <!--/top-tours-->
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
                    <iframe class="shadow" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3692.9940859421017!2d70.89827431059766!3d22.240303179645252!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3959b4a660019ee9%3A0x3d6254f36ed0e794!2sRK%20University%20Main%20Campus!5e0!3m2!1sen!2sin!4v1713953521875!5m2!1sen!2sin" width="350" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="col-md-8 contact">
                    <?php
                    if (isset($_POST["sbmt"])) {
                        $cn = makeconnection();
                        $s = "insert into contactus(Name,Phno,Email,Message) values('" . $_POST["t1"] . "','" . $_POST["t2"] . "','" . $_POST["t3"] . "','" . $_POST["t4"] . "')";
                        mysqli_query($cn, $s);
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

    <?php include('bottom.php'); ?>
</body>

</html>