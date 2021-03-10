<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Login</title>
        <!--<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">-->
        <link rel="stylesheet" href="login.css">
        <?php include 'links.php' ?>
    </head>
    <body>
        <form class="box" action="authenticate.php" method="POST">
            <h1>.</h1>
            <input type="text" placeholder="Username" name="username" id="username" class="form-control" autocomplete="off" required>
            <input type="password" placeholder="Password" name="password" id="password" class="form-control" autocomplete="off" required>
            <input type="submit" class="btn btn-success" id="btn" name="submit" value="Login">            
        </form>
    </body>
</html>