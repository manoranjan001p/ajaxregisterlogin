<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <form action="" method="post">
        <input type="hidden" id="action" value="login">
        <label for="">Username</label>
        <input type="text" id="username" value=""><br><br>
        <label for="">Password</label>
        <input type="password" id="password" value=""><br><br>
        <button type="button" onclick="submitData();">Login</button>

    </form>
    <br>
    <a href="register.php"> Go To Register</a>
    <?php require "script.php";?>
</body>
</html>