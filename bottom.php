<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer Styling</title>
    <style>
        /* Base styles */
        .footer {
            background-color: rgba(76, 103, 76, 0.7);
            color: #fff;
            padding: 20px 0;
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        }

        .footer .container {
            width: 90%;
            margin: 0 auto;
        }

        .footer-grids {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .footer-left,
        .footer-middle,
        .footer-right {
            width: 30%;
            margin-bottom: 10px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .footer-left p {
            text-align: justify;
            font-size: 13px;
            line-height: 1.5;
            margin-top: 10px;

        }

        .footer-middle h3,
        .footer-right h3 {
            color: #fff;
            margin-bottom: 10px;
            font-size: 20px;
        }

        .footer-list ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
            font-size: 20px;
        }

        .footer-list ul li {
            margin-bottom: 8px;
            font-size: 20px;
        }

        .footer-list ul li a {
            color: #ccc;
            text-decoration: none;
            transition: color 0.3s ease;
            font-size: 20px;
        }

        .footer-list ul li a:hover {
            color: #fff;
            font-size: 20px;
        }

        .social-icons {
            margin-top: 10px;
        }

        .social-icons a {
            display: inline-block;
            margin-right: 10px;
        }

        .social-icons span {
            display: inline-block;
            width: 30px;
            height: 30px;
            background-color: #555;
            border-radius: 50%;
            line-height: 30px;
            text-align: center;
            font-size: 16px;
        }

        .facebook {
            background-color: red;
        }

        .twitter {
            background-color: #55acee;
        }

        .whatsapp {
            background-color: #25D366;
        }

        .pinterest {
            background-color: #BD081C;
        }

        .instagram {
            background: linear-gradient(45deg, #405de6, #5851db, #833ab4, #c13584, #e1306c, #fd1d1d);
        }

        .clearfix {
            clear: both;
        }

        .copyright {
            background-color: #222;
            color: #fff;
            padding: 10px 0;
            text-align: right;
            font-size: 12px;
        }

        .copyright p {
            margin: 0;
            text-align: right;
        }
    </style>
</head>
<body>
    <div class="footer">
        <div class="container">
            <div class="footer-grids">
                <div class="footer-left">
                    <h3>About website</h3>
                    <p>Welcome to our tourism website! Here, we invite you on a journey of exploration, discovery, and adventure. Our website is your gateway to unlocking the treasures of unique destinations, uncovering hidden gems, and creating unforgettable memories.

Whether you're a seasoned traveler or a first-time adventurer, our website is designed to cater to all your needs. From detailed destination guides and travel tips to curated itineraries and insider recommendations, we strive to provide you with everything you need to plan the perfect trip.

But our website is more than just a travel guide; it's a community of passionate travelers, adventurers, and explorers. Join us as we share stories, exchange tips, and connect with like-minded individuals from around the globe.

So, whether you're dreaming of a tropical getaway, a cultural immersion, or an adrenaline-fueled escapade, let our website be your compass as you embark on your next adventure. Welcome aboard, and happy travels!</p>

                </div>
                <div class="footer-middle">
                    <div class="footer-list">
                        <h3>Web page</h3>
                        <ul>
                            <li><a href="index.php#section-1">Home</a></li>
                            <li><a href="index.php#section-2">About</a></li>
                            <li><a href="index.php#section-3">Gallery</a></li>
                            <li><a href="index.php#section-5">Contact</a></li>
                            <li><a href="category.php">category</a></li>
                            <button><a href="admin/loginform.php"  onclick="javascript:window.open('index.php#section-1','_self')">Admin Login</a></button>
                            <li></li>
                           
                        </ul>
                    </div>
                </div>
                <div class="footer-right">
                    <h3>Category</h3>
                    <div class="footer-list">
                        <ul>
                            <li><a href="">Family Tours</a></li>
                            <li><a href="">Religious Tours</a></li>
                            <li><a href="">Adventure Tours</a></li>
                            <li><a href="">Special Event Tours</a></li>
                            <li><a href="">National Parks</a></li>
                            <li><a href="">Themed Vacations</a></li>
                            <li><a href="">Small Group Tours</a></li>
                        </ul>
                    </div>
                </div>
                <div class="social-icons">
                    <a href="https://www.facebook.com/" target="_blank"><span class="facebook" title="Facebook"> </span></a>
                    <a href="https://twitter.com/?lang=en" target="_blank"><span class="twitter" title="Twitter"> </span></a>
                    <a href="https://www.google.com/search?client=firefox-b-d&q=snapchat" target="_blank"><span class="snapchat" title="Snapchat"> </span></a>
                    <a href="https://in.pinterest.com/" target="_blank"><span class="pinterest" title="Pinterest"> </span></a>
                    <a href="https://www.instagram.com/" target="_blank"><span class="instagram" title="Instagram"> </span></a>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    
    </div>
</body>
</html>
