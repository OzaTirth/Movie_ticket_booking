<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        font-family: poppins;
        transition: all  ;
    }
    
    /* Full viewport height */
    body, html {
        width: 100%;
        height: 100%;
    }
    
    /* Navigation bar styling */
    nav {
        width: 100%;
        height: 80px;
        background-color: skyblue;
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 0 20px;
    }
    
    /* Logo styling */
    .logo {
        font-size: 25px;
        color: aliceblue;
    }
    
    /* Navigation links styling */
    nav ul {
        list-style: none;
        display: flex;
        align-items: center;
    }
    
    nav ul li {
        margin-left: 20px;
    }
    
    nav ul li a {
        text-decoration: none;
        color: #fff;
        font-size: 18px;
        text-transform: capitalize;
        padding: 8px 20px;
        background-color: transparent;
        border-radius: 16px;
    }
    
    /* Active and hover states */
    nav ul li a.active, nav ul li a:hover {
        background-color: rgb(150, 150, 176);
        border-radius: 16px;
        transition: all 0.5s;
    }
    
    /* Responsive menu button */
    #checkbtn {
        font-size: 30px;
        color: #fff;
        cursor: pointer;
        display: none;
    }
    
    /* Hide checkbox */
    #check {
        display: none;
    }
    
    /* Media Query for responsiveness */
    @media (max-width: 895px) {
        #checkbtn {
            display: block;
        }
    
        /* Navigation links in responsive mode */
        nav ul {
            width: 100%;
            background-color: aqua;
            position: fixed;
            left: -100%;
            top: 80px;
            height: 100vh;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            transition: all 0.5s ease;
        }
    
        nav ul li {
            margin-left: 0;
            margin-bottom: 20px;
        }
    
        /* Toggle the menu */
        #check:checked ~ ul {
            left: 0;
        }
    }
    
/* About Section */
.about-section {
  padding: 50px 20px;
  
}

.container {
  max-width: 1200px;
  margin: 0 auto;
}

h2 {
  text-align: center;
  font-size: 36px;
  margin-bottom: 30px;
  color: #000;
  font-weight: 500;
}

p {
  font-size: 18px;
  line-height: 1.8;
  margin-bottom: 30px;
  
}

h3 {
  font-size: 28px;
  color: rgba(76, 68, 182, 0.808);
  font-weight: 400;
  margin-bottom: 20px;
}

 .about-ul{
    margin-left: 20px;
  list-style-type: disc;
  margin-bottom: 30px;
 }

ul li {
  font-size: 18px;
  margin-bottom: 10px;
}

/* Footer Styling */
footer {
  background-color: #1f1f1f;
  color: #bbb;
  padding: 20px 0;
  text-align: center;
}

.footer-bottom {
  font-size: 14px;
  color: #777;
}
</style>
<body>
    <div class="home-nav ">
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
    <section class="about-section">
        <div class="container">
          <h2>About Us</h2>
          <p>At Just_Movie_Booking, we are dedicated to revolutionizing the way people experience movies. Our platform offers a seamless, user-friendly way to book tickets for the latest movies across cinemas in multiple locations. With a few clicks, you can select your preferred seats, choose from a variety of payment options, and secure your movie night in advance.</p>
    
          <h3>What We Offer</h3>
          <ul class="about-ul">
            <li>Wide Selection of Movies: From Hollywood blockbusters to regional cinema, we ensure you have access to the latest movies.</li>
            <li>Convenient Booking: Avoid long queues by booking tickets online from the comfort of your home.</li>
            <li>Seat Selection: Pick the best seats in the house with our real-time seat selection feature.</li>
            <li>Multiple Payment Options: Pay securely with a range of options like credit cards, digital wallets, and more.</li>
            <li>Promotions & Discounts: Enjoy exclusive deals and promotions available only on our platform.</li>
          </ul>
    
          <h3>Our Mission</h3>
          <p>Our mission is to make movie-going a hassle-free and enjoyable experience for everyone. We are committed to offering you the best choices, fast and secure transactions, and an experience that makes you feel excited about every visit to the theater.</p>
    
          <h3>Why Choose Us?</h3>
          <ul>
            <li>Ease of Use: Our website is designed with you in mind. Navigate easily, book tickets in seconds, and focus on enjoying your movie.</li>
            <li>24/7 Support: Our customer support team is available around the clock to assist you with any queries.</li>
            <li>Reliability: Partnering with trusted cinemas and payment gateways ensures that your booking experience is safe and secure.</li>
            <li>Innovative Features: We are constantly updating our platform with new features, including mobile app integration, booking history tracking, and personalized movie recommendations.</li>
          </ul>
    
          <h3>Our Values</h3>
          <p>At Just_Movie_Booking, we believe in customer satisfaction, innovation, and accessibility. Whether you're a casual moviegoer or a cinema enthusiast, we're here to elevate your movie experience. Join us on this exciting journey!</p>
        </div>
      </section>
    
      <!-- Footer -->
      <footer>
        <div class="footer-bottom">
          &copy; 2024 Just_Movie_Booking | Designed by YourCompanyName
        </div>
      </footer>

</body>
</html>
