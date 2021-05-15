<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <nav>
        <div class="wrapper ">
            <div class="logo"><a href="Landing.html">Form Login</a></div>
        </div>
    </nav>

    <fieldset>
        <h1>ISI DATA DENGAN BENAR</h1>
        <div class="kotak_login">
            <p class="tulisan_login">Silahkan login</p>
         
            <form action="LOGIN.php" method="POST">
                <label>Username</label>
                <input type="text" name="username" class="form_login" placeholder="Username atau email ..">
         
                <label>Password</label>
                <input type="text" name="password" class="form_login" placeholder="Password ..">
                
                <input class="tombol_login" type="submit" name="submit" value="Login">
            </form>
            
        </div>
    </fieldset>    
</body>
</html>