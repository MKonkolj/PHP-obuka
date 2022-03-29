<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Dela+Gothic+One&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="main.css">
    <title>Login Task</title>
</head>
<body>
    <header>
        <h3>MK</h3>
        <ul class="navbar">
            <li href="index.php">Home</li>
            <li href="#">About</li>
            <li href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">Secret</li>
        </ul>
        <div class="login-btns">
            <button>Sign up</button>
            <button>Login</button>
        </div>
    </header>
</body>
    <main>
        <div class="forms-container">
            <div class="form-wrapper signup">
                <div>
                    <h3>SIGN UP</h3>
                    <p>Don't have an account yet? Sign up below!</p>
                </div>
                <form action="includes/signup.php" method="post">
                    <input type="text" name="uid" placeholder="Username">
                    <input type="password" name="pwd" placeholder="Password">
                    <input type="password" name="pwdrepeat" placeholder="Repeat password">
                    <input type="text" name="email" placeholder="Email">
                    <button type="submit" name="submit">SIGN UP</button>
                </form>
            </div>
            <div class="form-wrapper login">
                <div>
                    <h3>LOGIN</h3>
                    <p>Log in to access the magic!</p>
                </div>
                <form action="includes/login.php" method="post">
                    <input type="text" name="uid" placeholder="Username">
                    <input type="password" name="pwd" placeholder="Password">
                    <button type="submit" name="submit">LOGIN</button>
                </form>
            </div>
        </div>
    </main>
</html>