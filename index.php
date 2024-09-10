<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home-Movie</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="home_css.css"> <!-- External CSS -->
</head>
<style>
    .out-slide {
        width: 100%;
        height: 300px;
        display: flex;
    }

    .slide {
        width: 80%;
        height: 300px;
        margin: 0 auto;
        background: url(image_html/1717082518448_playcardweb.avif);
        background-size: 100% 100%;
        box-shadow: 0 -5px 30px -3px skyblue, 0 5px 3px -3px;
        border-radius: 20px;
        animation: slider 20s linear infinite;
    }

    @keyframes slider {
        0% {
            background: url(image_html/1717082518448_playcardweb.avif);
        }

        50% {
            background: url(image_html/1724934697468_despicableme4previewweb.avif);
        }

        100% {
            background: url(image_html/1725020797147_mirajwebbanner.avif);
        }
    }
</style>

<body>
    <div class="home-nav">
        <nav>
            <input type="checkbox" id="check">
            <label for="check" id="checkbtn"><i class="fa fa-bars"></i></label>
            <label class="logo">Just_Movie_Booking</label>
            <ul>
                <li><a href="#" class="active">Home</a></li>
                <li><a href="home.php">Movie_Booking</a></li>
                <li><a href="about.php" target="_blank">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="login.php">Log in</a></li>
            </ul>
        </nav>
    </div>
    <br><br>
    <div class="out-slide">
        <div class="slide"></div>
    </div>
    <br>
    <br>
    <!----------------------------------- holly bolly button--------------------------->

    <!--------------------------box 1----------------------------------------->
    <div class="start-movie-section">
        <p style="font-size: 35px;">Now Showing</p>
    </div>
    <div class="movie-box">
        <div class="movie-box1">
            <div class="m-box1"> <img src="image_html/infinitywar.jpg" alt="" width="80%" height="300px"></div>
            <div class="m-box-info">
                <p style="text-align: center;">Avengers: Infinity War</p>
                <div class="movie-info">
                    <p>relese date : 2024-08-31</p>
                    <p>Industry : Hollywood</p>
                    <p>Language : Hindi/English</p>
                    <p>Genere : Super hero , Action , Adventure</p>
                    <p>price(Rs.) : 150</p>
                </div>
            </div>
            <br>
              <div class="m-ticket-btn">
        <form action="booking.php" method="get">
            <input type="hidden" name="name" value="Avengers: Infinity War">
            <input type="hidden" name="image" value="image_html/infinitywar.jpg">
            <input type="hidden" name="release_date" value="2024-08-31">
            <input type="hidden" name="industry" value="Hollywood">
            <input type="hidden" name="language" value="Hindi/English">
            <input type="hidden" name="genre" value="Super hero,Action,Adventure">
            <input type="hidden" name="price" value="150">
            <button type="submit" class="book-btn">Now Book Ticket</button>
        </form>
    </div>
        </div>
        <!-- <-------------- box 2---------------------->
        <div class="movie-box1">
            <div class="m-box1"> <img src="image_html/spiderman no way home.png" alt="" width="80%" height="300px"></div>
            <div class="m-box-info">
                <p style="text-align: center;">spider-man no way home</p>
                <div class="movie-info">
                    <p>relese date : 2024-08-29</p>
                    <p>Industry : Hollywood</p>
                    <p>Language : Hindi/English</p>
                    <p>Genere : Super hero , Action , Adventure</p>
                    <p>price(Rs.) : 170</p>
                </div>
            </div>
            <br>
            <div class="m-ticket-btn">
        <form action="booking.php" method="get">
            <input type="hidden" name="name" value="Spider-man no way home">
            <input type="hidden" name="image" value="image_html/spiderman no way home.png">
            <input type="hidden" name="release_date" value="2024-08-29">
            <input type="hidden" name="industry" value="Hollywood">
            <input type="hidden" name="language" value="Hindi/English">
            <input type="hidden" name="genre" value="Super hero,Action,Adventure">
            <input type="hidden" name="price" value="170">
            <button type="submit" class="book-btn">Now Book Ticket</button>
        </form>
    </div>
        </div>
        <!------------------------box 3 ------------------------->
        <div class="movie-box1">
            <div class="m-box1"> <img src="image_html/black-adam.jpg" alt="" width="80%" height="300px"></div>
            <div class="m-box-info">
                <p style="text-align:center;">Black Adam</p>
                <div class="movie-info">
                    <p>relese date : 2024-08-22</p>
                    <p>Industry : Hollywood</p>
                    <p>Language : Hindi/English</p>
                    <p>Genere : super hero , Action , Adventure</p>
                    <p>price(Rs.) : 180</p>
                </div>
            </div>
            <br>
            <div class="m-ticket-btn">
        <form action="booking.php" method="get">
            <input type="hidden" name="name" value="Black Adam">
            <input type="hidden" name="image" value="image_html/black-adam.jpg">
            <input type="hidden" name="release_date" value="2024-08-22">
            <input type="hidden" name="industry" value="Hollywood">
            <input type="hidden" name="language" value="Hindi/English">
            <input type="hidden" name="genre" value="Super hero,Action,Adventure">
            <input type="hidden" name="price" value="180">
            <button type="submit" class="book-btn">Now Book Ticket</button>
        </form>
    </div>
        </div>

    </div>
    <!--------------------------------box 4----------------------------->
    <div class="movie-box">
        <div class="movie-box1">
            <div class="m-box1"> <img src="image_html/ironman.avif" alt="" width="80%" height="300px"></div>
            <div class="m-box-info">
                <p style="text-align: center;">Iron man </p>
                <div class="movie-info">
                    <p>relese date : 2024-08-28</p>
                    <p>Industry : Hollywood</p>
                    <p>Language : Hindi/English</p>
                    <p>Genere : Super hero , Action , Adventure</p>
                    <p>price(Rs.) : 200</p>
                </div>
            </div>
            <br>
            <div class="m-ticket-btn">
        <form action="booking.php" method="get">
            <input type="hidden" name="name" value="Iron man">
            <input type="hidden" name="image" value="image_html/ironman.avif">
            <input type="hidden" name="release_date" value="2024-08-28">
            <input type="hidden" name="industry" value="Hollywood">
            <input type="hidden" name="language" value="Hindi/English">
            <input type="hidden" name="genre" value="Super hero,Action,Adventure">
            <input type="hidden" name="price" value="200">
            <button type="submit" class="book-btn">Now Book Ticket</button>
        </form>
    </div>
        </div>
        <!-- <-------------- box 5---------------------->
        <div class="movie-box1">
            <div class="m-box1"> <img src="image_html/thalapathy-is-the-goat-et00401441-1725014881.avif" alt="" width="80%" height="300px"></div>
            <div class="m-box-info">
                <p style="text-align: center;">The Greatest of All Time</p>
                <div class="movie-info">
                    <p>relese date : 2024-09-05</p>
                    <p>Industry : Tamil film industry</p>
                    <p>Language : Tmail</p>
                    <p>Genere : Drama , Action , Adventure</p>
                    <p>price(Rs.) : 220</p>
                </div>
            </div>
            <br>
            <div class="m-ticket-btn">
        <form action="booking.php" method="get">
            <input type="hidden" name="name" value="The Greatest of All Time">
            <input type="hidden" name="image" value="image_html/thalapathy-is-the-goat-et00401441-1725014881.avif">
            <input type="hidden" name="release_date" value="2024-08-05">
            <input type="hidden" name="industry" value="Hollywood">
            <input type="hidden" name="language" value="Tmail">
            <input type="hidden" name="genre" value="Drama , Action,Adventure">
            <input type="hidden" name="price" value="220">
            <button type="submit" class="book-btn">Now Book Ticket</button>
        </form>
    </div>
        </div>
        <!------------------------box 6------------------------->
        <div class="movie-box1">
            <div class="m-box1"> <img src="image_html/stree-2-et00364249-1721725490.avif" alt="" width="80%" height="300px"></div>
            <div class="m-box-info">
                <p style="text-align:center;">Stree-2</p>
                <div class="movie-info">
                    <p>relese date : 2024-08-15</p>
                    <p>Industry : Bollywood</p>
                    <p>Language : Hindi</p>
                    <p>Genere : Horror , Comedy , Comedy horror</p>
                    <p>price(Rs.) : 120</p>
                </div>
            </div>
            <br>
            <div class="m-ticket-btn">
        <form action="booking.php" method="get">
            <input type="hidden" name="name" value="Stree-2">
            <input type="hidden" name="image" value="image_html/stree-2-et00364249-1721725490.avif">
            <input type="hidden" name="release_date" value="2024-08-15">
            <input type="hidden" name="industry" value="Bollywood">
            <input type="hidden" name="language" value="Hindi">
            <input type="hidden" name="genre" value="Horror , comedy , comedy horror">
            <input type="hidden" name="price" value="120">
            <button type="submit" class="book-btn">Now Book Ticket</button>
        </form>
    </div>
        </div>
    </div>
    <!--------------------------------box 7----------------------------->
    <div class="movie-box">
        <div class="movie-box1">
            <div class="m-box1"> <img src="image_html/suzume.png" alt="" width="80%" height="300px"></div>
            <div class="m-box-info">
                <p style="text-align: center;">Suzume (2024) </p>
                <div class="movie-info">
                    <p>relese date : 2024-09-07</p>
                    <p>Industry : CoMix Wave Films</p>
                    <p>Language : Hindi/English</p>
                    <p>Genere : Action , Adventure , Animation </p>
                    <p>price(Rs.) : 250</p>
                </div>
            </div>
            <br>
            <div class="m-ticket-btn">
        <form action="booking.php" method="get">
            <input type="hidden" name="name" value="Suzume (2024)">
            <input type="hidden" name="image" value="image_html/suzume.png">
            <input type="hidden" name="release_date" value="2024-09-07">
            <input type="hidden" name="industry" value="CoMix Wave Films">
            <input type="hidden" name="language" value="Hindi/English">
            <input type="hidden" name="genre" value="Action , Adventure , Animation">
            <input type="hidden" name="price" value="250">
            <button type="submit" class="book-btn">Now Book Ticket</button>
        </form>
    </div>
        </div>
        <!-- <-------------- box 8---------------------->
        <div class="movie-box1">
            <div class="m-box1"> <img src="image_html/demonslayer.png" alt="" width="80%" height="300px"></div>
            <div class="m-box-info">
                <p style="text-align: center;">Demon Slayer: Kimetsu no Yaiba</p>
                <div class="movie-info">
                    <p>relese date : 2024-09-09</p>
                    <p>Industry : Ufotable Japan</p>
                    <p>Language : japanese</p>
                    <p>Genere : Action , Animation , Demons</p>
                    <p>price(Rs.) : 320</p>
                </div>
            </div>
            <br>
            <div class="m-ticket-btn">
        <form action="booking.php" method="get">
            <input type="hidden" name="name" value="Demon Slayer: Kimetsu no Yaiba">
            <input type="hidden" name="image" value="image_html/demonslayer.png">
            <input type="hidden" name="release_date" value="2024-09-09">
            <input type="hidden" name="industry" value="Ufotable Japan">
            <input type="hidden" name="language" value="japanese">
            <input type="hidden" name="genre" value="Action , Animation , Demons">
            <input type="hidden" name="price" value="320">
            <button type="submit" class="book-btn">Now Book Ticket</button>
        </form>
    </div>
        </div>
        <!------------------------box 9------------------------->
        <div class="movie-box1">
            <div class="m-box1"> <img src="image_html/naruto.png" alt="" width="80%" height="300px"></div>
            <div class="m-box-info">
                <p style="text-align:center;">Naruto</p>
                <div class="movie-info">
                    <p>relese date : 2024-09-15</p>
                    <p>Industry : Japanese studio Pierrot</p>
                    <p>Language : Hindi/English/japanese</p>
                    <p>Genere : Action , Adventure , Animation </p>
                    <p>price(Rs.) : 320</p>
                </div>
            </div>
            <br>
            <div class="m-ticket-btn">
        <form action="booking.php" method="get">
            <input type="hidden" name="name" value="Naruto">
            <input type="hidden" name="image" value="image_html/naruto.png">
            <input type="hidden" name="release_date" value="2024-09-15">
            <input type="hidden" name="industry" value="Japanese studio Pierrot">
            <input type="hidden" name="language" value="Hindi/English/japanese">
            <input type="hidden" name="genre" value="Action , Adventure , Animation">
            <input type="hidden" name="price" value="320">
            <button type="submit" class="book-btn">Now Book Ticket</button>
        </form>
    </div>
        </div>
    </div>
<br><br>
<!--------------------------------footer - home - page ---------------------->
<footer>
  <div class="footer-container">
    <div class="footer-section about">
      <h3>About Us</h3>
      <p>We offer a seamless movie ticket booking experience. Browse movies, choose your seats, and enjoy your movie night!</p>
    </div>
    <div class="footer-section links">
      <h3>Quick Links</h3>
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">Movies</a></li>
        <li><a href="#">Contact Us</a></li>
        <li><a href="#">Terms & Conditions</a></li>
        <li><a href="#">Privacy Policy</a></li>
      </ul>
    </div>
    <div class="footer-section contact">
      <h3>Contact Us</h3>
      <p>Email: support@movietickets.com</p>
      <p>Phone: +123 456 7890</p>
      <div class="socials">
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-youtube"></i></a>
      </div>
    </div>
  </div>
  <div class="footer-bottom">
    &copy; 2024 MovieTickets.com | Designed by YourCompanyName
  </div>
</footer>
</body>
</html>
