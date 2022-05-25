<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="style.css">
        <script src="https://www.w3schools.com/lib/w3.js"></script>
        <title>MyTutor</title>
    </head>

    <body>
        <div id="navlist" class="w3-bar w3-top w3-large w3-text-white">
            <span class="w3-bar-item w3-padding-16">MyTutor</span>
            <div class="navlist-right">
                <a href="register.php" class="w3-bar-item w3-button w3-padding-16">Create Account</a>
                <a href="login.php" class="w3-bar-item w3-button w3-padding-16">Login</a>
            </div>
        </div>
        <br><br>

        <form name="loginForm" action="login.php" method="POST">
            <div class="container">
                <h1>Login Form</h1>
                <hr>
                <label for="email"><b>Email</b></label>
                <input type="email" placeholder="Enter Email" name="email" style="width: 100%; padding: 15px; margin: 5px 0 22px 0; display: inline-block; border: none; background: #f1f1f1; outline: none;" required>

                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="psw" required>

                <label><input type="checkbox" checked="checked" name="remember"> Remember me</label>
                <br><br>
                <button type="submit">Login</button>
            </div>

            <div class="container" style="background-color: #f1f1f1">
                <button type="button" class="cancelbtn">Cancel</button>
                <span class="psw">Forgot <a href="#">password?</a></span>
            </div>
        </form>

        <p class="w3-center w3-text-white">Copyright&copy; MyTutor-Erma 281299<p>
    </body>
</html>