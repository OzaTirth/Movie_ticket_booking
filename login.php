<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login-Movie</title>
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
            <li><a href="register.php">Sign up</a></li>
        </ul>
    </nav>
    </div>
    <div class="container" style="border:none">
        <div class="box form-box">
           <center> <header>Login</header></center>
            <form action="login.php" method="post">
                <div class="field input">
                    <label for="">Username or Email</label>
                    <input type="text" name="name" id="name" required placeholder="Enter Name or Email"  autocomplete="off">
                </div>
                <div class="field input">
                    <label for="">Password</label>
                    <input type="password" name="pass" id="pass" required placeholder="Enter Password"  autocomplete="off">
                </div>
                <div class="field">
                    <input type="submit" class="btn" name="submit" value="Login">
                </div>
                <div class="links">
                    Don't have account ? <a href="register.php">Sign up</a>
                </div>

            </form>
        </div>
    </div>
</body>
</html>
