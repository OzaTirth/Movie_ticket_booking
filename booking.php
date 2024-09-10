<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking-Movie</title>
</head>
<style>
    /* General Reset */
    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        font-family: poppins;
    }
    /* Full viewport height */
    body,
    html {
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
    nav ul li a.active,
    nav ul li a:hover {
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
        #check:checked~ul {
            left: 0;
        }
    }
/* <--!------movie booking css-----------------> */
    .main-booking-continer {
        width: 100%;
        height: 100vh;
        display: flex;
    }

    .booking-right {

        width: 75%;
        height: 100vh;
    }

    .booking-main-box {

        width: 25%;
        height: 100vh;
        display: flex;
        flex-direction: column;
        text-align: center;
        color: #000;
        padding-top: 50px;
    }

    .booking-main-box img {
        width: 60%;
        height: 300px;
        border-radius: 15px;
    }

    .booking-main-box h1 {
        font-size: 30px;
        font-weight: 300;
        padding-bottom: 20px;
    }

    .booking-main-box h2 {
        font-size: 22px;
        font-weight: 300;
        padding-bottom: 15px;
    }

    .booking-main-box p strong {
        font-size: 15px;
        font-weight: 200;
    }

    .booking-right {
        display: flex;
    }

    .left-seat {
        width: 50%;
        height: 90vh;
        margin-top: 30px;
        border-radius: 45px;
    }

    .right-ticket {
        width: 50%;
        display: flex;
        justify-content: center;
        align-content: center;
        margin-top: 60px;
    }

    .row1,
    .row2,
    .row3,
    .row4,
    .row5,
    .row6 {
        border-radius: 15px;
        width: 100%;
        height: 60px;
        display: flex;
        justify-content: space-around;
        align-items: center;
    }

    .row1 .seat,
    .row2 .seat,
    .row3 .seat,
    .row4 .seat,
    .row5 .seat,
    .row6 .seat {

        display: flex;
        width: 60px;
        height: 30px;
    }

    .booking-h1 h4 {
        font-size: 30px;
        font-weight: 300;
        padding: 20px 0;
        text-align: center;
    }

    .seat {

        border-radius: 8px;
    }

    #submitbtn {
        background-color: rgba(76, 68, 182, 0.808);
        color: #fff;
        width: 60px;
        height: 30px;
        cursor: pointer;
        border-radius: 8px;
        border: none;
    }

    #mycheckbox:checked~#submitbtn {
        background-color: green;
    }

    /* <----------------------- detailes form----------------->*/
   


.container {
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 90vh;
    border: 2px solid;
}

.box {
    background: #fff;
    display: flex;
    flex-direction: column;
    padding: 25px 25px;
    border-radius: 20px;
    box-shadow: 0 0 128px 0 rgba(0, 0, 0, 0.1), 0 32px 64px -48px rgba(0, 0, 0, 0.5);
    font-size: 100;
}

.form-box {
    width: 450px;
    margin: 0 10px;
}

.form-box header {
    font-size: 30px;
    font-weight: 600;
    font-weight: 300;
    padding-bottom: 10px;
    border-bottom: 1px solid #e6e6e6;
    margin-bottom: 10px;
}

.form-box .field {
    display: flex;
    margin-bottom: 10px;
    flex-direction: column;

}

.form-box form .input input {
    height: 40px;
    width: 100%;
    font-size: 16px;
    padding: 0 10px;
    border-radius: 5px;
    border: 1px solid #ccc;
    outline: none;
}

.btn {
    height: 35px;
    background-color: rgba(76, 68, 182, 0.808);
    border: none;
    border-radius: 5px;
    color: #e4e9f7;
    font-size: 15px;
    cursor: pointer;
    transition: all 0.3s;
    margin-top: 10px;
    padding: 0 10px;
}

.btn:hover {
    opacity: 0.82;
}

.submit {
    width: 100%;
}

.links {
    display: flex;
    justify-content: space-between;
    margin: 0 10px;
}
/** <---------------------------footer ticket booking page ---------------------------------> */
/* Footer Styles */
.footer {
    background-color: #333;
    color: white;
    padding: 20px 0;
}

.footer-container {
    display: flex;
    justify-content: space-around;
    align-items: flex-start;
    flex-wrap: wrap;
    padding: 20px;
    max-width: 1200px;
    margin: 0 auto;
}

.footer h3, .footer h4 {
    margin-bottom: 10px;
}

.footer-left, .footer-center, .footer-right {
    width: 30%;
    padding: 10px;
}

.footer-left p, .footer-right p {
    margin: 5px 0;
}

.footer-center ul {
    list-style-type: none;
    padding: 0;
}

.footer-center ul li {
    margin-bottom: 10px;
}

.footer-center ul li a {
    color: white;
    text-decoration: none;
}

.footer-center ul li a:hover {
    text-decoration: underline;
}

.footer-right .social-icons {
    margin-top: 10px;
}

.footer-right .social-icons a {
    color: white;
    margin-right: 10px;
    font-size: 1.2em;
    font-weight: 300;
}

.footer-bottom {
    background-color: #222;
    text-align: center;
    padding: 10px;
}

.footer-bottom p {
    margin: 0;
}

/* Responsive Footer */
@media (max-width: 768px) {
    .footer-container {
        flex-direction: column;
        align-items: center;
    }

    .footer-left, .footer-center, .footer-right {
        width: 100%;
        text-align: center;
        margin-bottom: 20px;
    }

    .footer-right .social-icons {
        justify-content: center;
    }
}

</style>

<body>
    <!-----------------------------nav - bar - booking - pade ------------------------------------>
    <div class="login-nav">
        <nav>
            <input type="checkbox" id="check">
            <label for="check" id="checkbtn"><i class="fa fa-bars"></i></label>
            <label class="logo">Just_Movie_Booking</label>
            <ul>
                <li><a href="home.php" class="active">Home</a></li>
                <li><a href="home.php">Movie_Booking</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="register.php">Sign up</a></li>
            </ul>
        </nav>
    </div>
    <?php
    // Retrieve movie details from the query parameters
    $name = $_GET['name'];
    $image = $_GET['image'];
    $release_date = $_GET['release_date'];
    $industry = $_GET['industry'];
    $language = $_GET['language'];
    $genre = $_GET['genre'];
    $price = $_GET['price'];
    ?>
    <div class="main-booking-continer">
        <div class="booking-main-box">
            <h1>Booking Details</h1>
            <div class="movie-details">
                <img src="<?php echo htmlspecialchars($image); ?>" alt="<?php echo htmlspecialchars($name); ?>" width="300" height="450">
                <h2><?php echo htmlspecialchars($name); ?></h2>
                <p><strong>Release Date:</strong> <?php echo htmlspecialchars($release_date); ?></p>
                <p><strong>Industry:</strong> <?php echo htmlspecialchars($industry); ?></p>
                <p><strong>Language:</strong> <?php echo htmlspecialchars($language); ?></p>
                <p><strong>Genre:</strong> <?php echo htmlspecialchars($genre); ?></p>
                <p><strong>Price:</strong><?php echo htmlspecialchars($price);?></p>
            </div>
        </div>
        <div class="booking-right">
            <div class="left-seat">
                <div class="booking-h1">
                    <h4>Now Select Seat</h4>
                </div>
                <div class="row1">
                    <div class="seat"><input type="checkbox" for="submit" name="row1-seat" id="mycheckbox">&nbsp;<input type="submit" id="submitbtn" value="R1C1"></div>
                    <div class="seat"><input type="checkbox" for="submit" name="row1-seat" id="mycheckbox">&nbsp;<input type="submit" id="submitbtn" value="R1C2"></div>
                    <div class="seat"><input type="checkbox" for="submit" name="row1-seat" id="mycheckbox">&nbsp;<input type="submit" id="submitbtn" value="R1C3"></div>
                    <div class="seat"><input type="checkbox" for="submit" name="row1-seat" id="mycheckbox">&nbsp;<input type="submit" id="submitbtn" value="R1C4"></div>
                    <div class="seat"><input type="checkbox" for="submit" name="row1-seat" id="mycheckbox">&nbsp;<input type="submit" id="submitbtn" value="R1C5"></div>
                    <div class="seat"><input type="checkbox" for="submit" name="row1-seat" id="mycheckbox">&nbsp;<input type="submit" id="submitbtn" value="R1C6"></div>
                    <div class="seat"><input type="checkbox" for="submit" name="row1-seat" id="mycheckbox">&nbsp;<input type="submit" id="submitbtn" value="R1C7"></div>
                    <div class="seat"><input type="checkbox" for="submit" name="row1-seat" id="mycheckbox">&nbsp;<input type="submit" id="submitbtn" value="R1C8"></div>
                </div>
                <div class="row2">
                    <div class="seat"><input type="checkbox" for="submit" name="row1-seat" id="mycheckbox">&nbsp;<input type="submit" id="submitbtn" value="R2C1"></div>
                    <div class="seat"><input type="checkbox" for="submit" name="row1-seat" id="mycheckbox">&nbsp;<input type="submit" id="submitbtn" value="R2C2"></div>
                    <div class="seat"><input type="checkbox" for="submit" name="row1-seat" id="mycheckbox">&nbsp;<input type="submit" id="submitbtn" value="R2C3"></div>
                    <div class="seat"><input type="checkbox" for="submit" name="row1-seat" id="mycheckbox">&nbsp;<input type="submit" id="submitbtn" value="R2C4"></div>
                    <div class="seat"><input type="checkbox" for="submit" name="row1-seat" id="mycheckbox">&nbsp;<input type="submit" id="submitbtn" value="R2C5"></div>
                    <div class="seat"><input type="checkbox" for="submit" name="row1-seat" id="mycheckbox">&nbsp;<input type="submit" id="submitbtn" value="R2C6"></div>
                    <div class="seat"><input type="checkbox" for="submit" name="row1-seat" id="mycheckbox">&nbsp;<input type="submit" id="submitbtn" value="R2C7"></div>
                    <div class="seat"><input type="checkbox" for="submit" name="row1-seat" id="mycheckbox">&nbsp;<input type="submit" id="submitbtn" value="R2C8"></div>
                </div>
                <div class="row3">
                    <div class="seat"><input type="checkbox" for="submit" name="row1-seat" id="mycheckbox">&nbsp;<input type="submit" id="submitbtn" value="R3C1"></div>
                    <div class="seat"><input type="checkbox" for="submit" name="row1-seat" id="mycheckbox">&nbsp;<input type="submit" id="submitbtn" value="R3C2"></div>
                    <div class="seat"><input type="checkbox" for="submit" name="row1-seat" id="mycheckbox">&nbsp;<input type="submit" id="submitbtn" value="R3C3"></div>
                    <div class="seat"><input type="checkbox" for="submit" name="row1-seat" id="mycheckbox">&nbsp;<input type="submit" id="submitbtn" value="R3C4"></div>
                    <div class="seat"><input type="checkbox" for="submit" name="row1-seat" id="mycheckbox">&nbsp;<input type="submit" id="submitbtn" value="R3C5"></div>
                    <div class="seat"><input type="checkbox" for="submit" name="row1-seat" id="mycheckbox">&nbsp;<input type="submit" id="submitbtn" value="R3C6"></div>
                    <div class="seat"><input type="checkbox" for="submit" name="row1-seat" id="mycheckbox">&nbsp;<input type="submit" id="submitbtn" value="R3C7"></div>
                    <div class="seat"><input type="checkbox" for="submit" name="row1-seat" id="mycheckbox">&nbsp;<input type="submit" id="submitbtn" value="R3C8"></div>
                </div>
                <div class="row4">
                    <div class="seat"><input type="checkbox" for="submit" name="row1-seat" id="mycheckbox">&nbsp;<input type="submit" id="submitbtn" value="R4C1"></div>
                    <div class="seat"><input type="checkbox" for="submit" name="row1-seat" id="mycheckbox">&nbsp;<input type="submit" id="submitbtn" value="R4C2"></div>
                    <div class="seat"><input type="checkbox" for="submit" name="row1-seat" id="mycheckbox">&nbsp;<input type="submit" id="submitbtn" value="R4C3"></div>
                    <div class="seat"><input type="checkbox" for="submit" name="row1-seat" id="mycheckbox">&nbsp;<input type="submit" id="submitbtn" value="R4C4"></div>
                    <div class="seat"><input type="checkbox" for="submit" name="row1-seat" id="mycheckbox">&nbsp;<input type="submit" id="submitbtn" value="R4C5"></div>
                    <div class="seat"><input type="checkbox" for="submit" name="row1-seat" id="mycheckbox">&nbsp;<input type="submit" id="submitbtn" value="R4C6"></div>
                    <div class="seat"><input type="checkbox" for="submit" name="row1-seat" id="mycheckbox">&nbsp;<input type="submit" id="submitbtn" value="R4C7"></div>
                    <div class="seat"><input type="checkbox" for="submit" name="row1-seat" id="mycheckbox">&nbsp;<input type="submit" id="submitbtn" value="R4C8"></div>
                </div>
                <div class="row5">
                    <div class="seat"><input type="checkbox" for="submit" name="row1-seat" id="mycheckbox">&nbsp;<input type="submit" id="submitbtn" value="R5C1"></div>
                    <div class="seat"><input type="checkbox" for="submit" name="row1-seat" id="mycheckbox">&nbsp;<input type="submit" id="submitbtn" value="R5C2"></div>
                    <div class="seat"><input type="checkbox" for="submit" name="row1-seat" id="mycheckbox">&nbsp;<input type="submit" id="submitbtn" value="R5C3"></div>
                    <div class="seat"><input type="checkbox" for="submit" name="row1-seat" id="mycheckbox">&nbsp;<input type="submit" id="submitbtn" value="R5C4"></div>
                    <div class="seat"><input type="checkbox" for="submit" name="row1-seat" id="mycheckbox">&nbsp;<input type="submit" id="submitbtn" value="R5C5"></div>
                    <div class="seat"><input type="checkbox" for="submit" name="row1-seat" id="mycheckbox">&nbsp;<input type="submit" id="submitbtn" value="R5C6"></div>
                    <div class="seat"><input type="checkbox" for="submit" name="row1-seat" id="mycheckbox">&nbsp;<input type="submit" id="submitbtn" value="R5C7"></div>
                    <div class="seat"><input type="checkbox" for="submit" name="row1-seat" id="mycheckbox">&nbsp;<input type="submit" id="submitbtn" value="R5C8"></div>
                </div>
                <div class="row6">
                    <div class="seat"><input type="checkbox" for="submit" name="row1-seat" id="mycheckbox">&nbsp;<input type="submit" id="submitbtn" value="R6C1"></div>
                    <div class="seat"><input type="checkbox" for="submit" name="row1-seat" id="mycheckbox">&nbsp;<input type="submit" id="submitbtn" value="R6C2"></div>
                    <div class="seat"><input type="checkbox" for="submit" name="row1-seat" id="mycheckbox">&nbsp;<input type="submit" id="submitbtn" value="R6C3"></div>
                    <div class="seat"><input type="checkbox" for="submit" name="row1-seat" id="mycheckbox">&nbsp;<input type="submit" id="submitbtn" value="R6C4"></div>
                    <div class="seat"><input type="checkbox" for="submit" name="row1-seat" id="mycheckbox">&nbsp;<input type="submit" id="submitbtn" value="R6C5"></div>
                    <div class="seat"><input type="checkbox" for="submit" name="row1-seat" id="mycheckbox">&nbsp;<input type="submit" id="submitbtn" value="R6C6"></div>
                    <div class="seat"><input type="checkbox" for="submit" name="row1-seat" id="mycheckbox">&nbsp;<input type="submit" id="submitbtn" value="R6C7"></div>
                    <div class="seat"><input type="checkbox" for="submit" name="row1-seat" id="mycheckbox">&nbsp;<input type="submit" id="submitbtn" value="R6C8"></div>
                </div>     
                <div class="row6">
                    <div class="seat"><input type="checkbox" for="submit" name="row1-seat" id="mycheckbox">&nbsp;<input type="submit" id="submitbtn" value="R7C1"></div>
                    <div class="seat"><input type="checkbox" for="submit" name="row1-seat" id="mycheckbox">&nbsp;<input type="submit" id="submitbtn" value="R7C2"></div>
                    <div class="seat"><input type="checkbox" for="submit" name="row1-seat" id="mycheckbox">&nbsp;<input type="submit" id="submitbtn" value="R7C3"></div>
                    <div class="seat"><input type="checkbox" for="submit" name="row1-seat" id="mycheckbox">&nbsp;<input type="submit" id="submitbtn" value="R7C4"></div>
                    <div class="seat"><input type="checkbox" for="submit" name="row1-seat" id="mycheckbox">&nbsp;<input type="submit" id="submitbtn" value="R7C5"></div>
                    <div class="seat"><input type="checkbox" for="submit" name="row1-seat" id="mycheckbox">&nbsp;<input type="submit" id="submitbtn" value="R7C6"></div>
                    <div class="seat"><input type="checkbox" for="submit" name="row1-seat" id="mycheckbox">&nbsp;<input type="submit" id="submitbtn" value="R7C7"></div>
                    <div class="seat"><input type="checkbox" for="submit" name="row1-seat" id="mycheckbox">&nbsp;<input type="submit" id="submitbtn" value="R7C8"></div>
                </div> 
                <div class="row6">
                    <div class="seat"><input type="checkbox" for="submit" name="row1-seat" id="mycheckbox">&nbsp;<input type="submit" id="submitbtn" value="R8C1"></div>
                    <div class="seat"><input type="checkbox" for="submit" name="row1-seat" id="mycheckbox">&nbsp;<input type="submit" id="submitbtn" value="R8C2"></div>
                    <div class="seat"><input type="checkbox" for="submit" name="row1-seat" id="mycheckbox">&nbsp;<input type="submit" id="submitbtn" value="R8C3"></div>
                    <div class="seat"><input type="checkbox" for="submit" name="row1-seat" id="mycheckbox">&nbsp;<input type="submit" id="submitbtn" value="R8C4"></div>
                    <div class="seat"><input type="checkbox" for="submit" name="row1-seat" id="mycheckbox">&nbsp;<input type="submit" id="submitbtn" value="R8C5"></div>
                    <div class="seat"><input type="checkbox" for="submit" name="row1-seat" id="mycheckbox">&nbsp;<input type="submit" id="submitbtn" value="R8C6"></div>
                    <div class="seat"><input type="checkbox" for="submit" name="row1-seat" id="mycheckbox">&nbsp;<input type="submit" id="submitbtn" value="R8C7"></div>
                    <div class="seat"><input type="checkbox" for="submit" name="row1-seat" id="mycheckbox">&nbsp;<input type="submit" id="submitbtn" value="R8C8"></div>
                </div>
                <br>
                <p class="text" style="text-align: center;">
                    You have selected <span id="count">0</span> seat for a price of RS.<span
                        id="total">0</span>
                </p>
            </div>
            <div class="right-ticket">
            <div class="form-box">
            <center><header>Ticket Details</header></center>
            <form action="" method="post">
                <div class="field input">
                    <label for="name">Username</label>
                    <input type="text" name="name" id="name" required placeholder="Enter Name">
                </div>
                <div class="field input">
                    <label for="phone_no">Phone_num</label>
                    <input type="text" name="phone_no" id="phone_no" required placeholder="Enter Number" autocomplete="off">
                </div>
                <div class="field input">
                    <label for="time">Movie_Time</label>
                    <select name="time" id="time" style="height: 40px; border-radius:8px; padding:0 10px">
                        <option value="9:00am">9:00 AM</option>
                        <option value="12:00pm">12:00 AM</option>
                        <option value="3:00pm">3:00 PM</option>
                        <option value="6:00pm">6:00 PM</option>
                        <option value="9:00pm">9:00 PM</option>
                    </select>
                </div>
                <div class="field inpu" >
                    <label for="date">Date</label>
                    <input type="date" name="date" id="date" required placeholder="Enter date" style="height: 40px; border-radius:8px; padding:0 10px" >
                </div>
                <div class="field input">
                    <label for="seat_no">Seat_num</label>
                    <input type="text" name="seat_no" id="seat_no" required placeholder="Enter Seat number">
                </div>
                <div class="field input">
                    <label for="price">Total Price</label>
                    <input type="price" name="price" id="price" required placeholder="Enter Total price"  autocomplete="off">
                </div>
                <div class="field">
                    <input type="submit" class="btn" name="submit" value="Booked">
                </div>
            </form>
        </div>
            </div>
        </div>
    </div>
    <div class="ticket-footer">
    <footer class="footer">
    <div class="footer-container">
        <div class="footer-left">
            <h3 style="font-weight: 300;">Just Movie Booking</h3>
            <p>Book your favorite movies anytime, anywhere!</p>
        </div>
        <div class="footer-center">
            <h4 style="font-weight: 300;">Quick Links</h4>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Contact Us</a></li>
                <li><a href="#">Privacy Policy</a></li>
            </ul>
        </div>
        <div class="footer-right">
            <h4 style="font-weight: 300;">Contact Us</h4>
            <p>Email: support@justmoviebooking.com</p>
            <p>Phone: +123 456 7890</p>
            <div class="social-icons">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <p>&copy; 2024 Just Movie Booking. All Rights Reserved.</p>
    </div>
</footer>
    </div>
</body>
</html>
