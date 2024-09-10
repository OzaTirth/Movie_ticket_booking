<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register-Movie</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
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
            <li><a href="login.php">Log in</a></li>
        </ul>
    </nav>
    </div>
    <div class="container" style="border: none;">
        <div class="form-box">
            <center><header>Sign Up</header></center>
            <form action="view.php" method="post">
                <div class="field input">
                    <label for="name">Username</label>
                    <input type="text" name="name" id="name" required placeholder="Enter Name">
                </div>
                <div class="field input">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" required placeholder="Enter Email"  autocomplete="off">
                </div>
                <div class="field input">
                    <label for="city">City</label>
                    <input type="text" name="city" id="city" required placeholder="Enter City" autocomplete="off">
                </div>
                <div class="field input">
                    <label for="pass">Password</label>
                    <input type="password" name="pass" id="pass" required placeholder="Enter Password"  autocomplete="off">
                </div>
                <div class="field">
                    <input type="submit" class="btn" name="submit" value="Login">
                </div>
                <div class="links">
                    Already a member ? <a href="login.php">Sign in</a>
                </div>
            </form>
        </div>
    </div>
    <?php
    // include("db_connect.php");

    // if(isset($_POST["submit"]))
    // {
        // $name = $_POST["name"];
        // $email = $_POST["email"];
        // $city = $_POST["city"];
        // $pass = $_POST["pass"];
        // $sql = "INSERT INTO register(rname , remail , rcity , rpass)VALUES('$name' , '$email' , '$city' , '$pass')";
        // if(mysqli_query($conn , $sql))
        // {
        //     echo "";
        // }
    // }
    ?>
</body>
</html>

