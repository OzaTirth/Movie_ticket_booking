<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Contant-Movie</title>
</head>
<body>
<div class="contact-nav">
    <nav>
        <input type="checkbox" id="check">
        <label for="check" id="checkbtn"><i class="fa fa-bars"></i></label>
        <label class="logo">Just_Movie_Booking</label>
        <ul>
            <li><a href="home.php" class="active">Home</a></li>
            <li><a href="home.php">Movie_Booking</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="login.php">Log in</a></li>
        </ul>
    </nav>
    </div>
    <br>
    <center><header class="con-header">Contact Us</header><br>
        <p>GET IN TOUCH</p><br>
    <p class="inside-con-header-p1">We'd love to talk about how we can work together. Send us a message below and we'll respond as soon as
         possible</p></center>
<div class="container" style="border: none; margin-top:-50px">
        <div class="form-box">
            <form action="contact.php" method="post">
                <div class="field input">
                    <label for="name">Your Name</label>
                    <input type="text" name="name" id="name" required placeholder="Enter Name">
                </div>
                <div class="field input">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" required placeholder="Enter Email"  autocomplete="off">
                </div>
                <div class="field input">
                    <label for="message">Message</label>
                    <textarea name="message" id="message" rows="10" style="border-radius: 8px;"></textarea>
                </div>
                <div class="field">
                    <input type="submit" class="btn" name="submit" value="Send message" fixed>
                </div>
                <div class="links">
                    Already a member ? <a href="login.php">Sign in</a>
                </div>
            </form>
        </div>
    </div>
    <div class="con-footer">
        <div class="con-info">
            <p class="con-footer-p">Contact Information</p>
            <p class="con-footer-p1">Our team will get back to you with in 24 hours</p>
        </div>
        <br>
        <div class="con-footer-info-icon">
            <img src="image_html/icons8-phone-50.png" alt="" width="30px"><p>+91 300 123456</p><p>|</p>
            <img src="image_html/email.png" alt="" width="30px"><p>Moviebooking@gamil.com</p><p>|</p>
            <img src="image_html/icons8-location-50.png" alt="" width="30px"><p>vadodara , Gujrat 352689</p>
        </div>
        <br>
        <div class="con-info-lastpart">
            <p>Join Us</p>
            
        </div>
        <div class="con-info-social-icon">
            <img src="image_html/icons8-facebook-50.png" alt="" width="30px">
            <img src="image_html/icons8-instagram-50 (1).png" alt=""width="30px">
            <img src="image_html/icons8-twitter-48.png" alt=""  width="30px">
            <img src="image_html/icons8-linked-in-50.png" alt=""width="30px">
        </div>
    </div>
</body>
</html>
