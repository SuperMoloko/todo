<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/registration.css">
    <link rel="stylesheet" href="css/reset.css">
    <title>Document</title>
</head>
<body>

    <header>
        <div class="logo">
            <img src="img/logo.svg" alt="">
        </div>
    </header>
<form action="new_user_process.php" method="POST">
        <div class="form-text">
            <h1>Registration</h1>
            <p>We are collecting this information <br> to keep you safe.</p>
        </div>
            <div class="form-block">
                <p>Login</p>
                <input type="text" placeholder="Enter your login" required  name="login">
            </div>
            <div class="form-block">
                <p>Email</p>
                <input type="text" placeholder="Enter your email with @gmail.com" required  name="email">
            </div>
            <div class="form-block">
                <p>Number</p>
                <input type="text" placeholder="Enter your telephone number" required  name="tele">
            </div>
            <div class="form-block">
                <p>Password</p>
                <input type="password" placeholder="Enter your password" required  name="password" >
            </div>
            <div class="form-block">
                <p>Password confirm</p>
                <input type="password" placeholder="Enter your password again" required  name="password_confirm">
            </div>
            <button class="log_button">Submit</button>
    </form>    


</body>
</html>