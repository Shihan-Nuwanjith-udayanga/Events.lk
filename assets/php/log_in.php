<?php require_once ('assets/inc/connection.php')

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/login.css">
    <title>Log IN</title>
</head>
<body>
    <section>
        <div>
            <h1>LOG IN</h1>
        </div>
        <form action="../../index.php" method="post">
            <div>
                <label for="email">Email Address</label> <br>
                <input type="email" id="email" name="email" placeholder="Email Address" required>
            </div>
            <div>
                <label for="password">Password</label> <br>
                <input type="password" id="password" name="password" placeholder="Password" required>
            </div>
            <div>
                <button type="submit" name="submit">Log In</button>
            </div>
            <div>
                <a href="registration.php"><p type="submit">haven't account? Register Now</p></a>
            </div>
        </form>
    </section>
</body>
</html>
<?php //mysqli_close($connection); ?>