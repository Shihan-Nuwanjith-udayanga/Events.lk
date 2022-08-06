<?php session_start(); ?>
<?php require_once('assets/inc/connection.php'); ?>
<?php

// check for form submission
if (isset($_POST['submit'])) {

    $errors = array();

    // check if the username and password has been entered
    if (!isset($_POST['email']) || strlen(trim($_POST['email'])) < 1 ) {
        $errors[] = 'Username is Missing / Invalid';
    }

    if (!isset($_POST['password']) || strlen(trim($_POST['password'])) < 1 ) {
        $errors[] = 'Password is Missing / Invalid';
    }

    // check if there are any errors in the form
    if (empty($errors)) {
        // save username and password into variables
        $email 		= mysqli_real_escape_string($connection, $_POST['email']);
        $password 	= mysqli_real_escape_string($connection, $_POST['password']);
        $hashed_password = sha1($password);

        // prepare database query
        $query = "SELECT * FROM user 
						WHERE email = '{$email}' 
						AND password = '{$hashed_password}' 
						LIMIT 1";

        $result_set = mysqli_query($connection, $query);

        if ($result_set) {
            // query succesfful

            if (mysqli_num_rows($result_set) == 1) {
                // valid user found
                // redirect to users.php
                header('Location: users.php');
            } else {
                // user name and password invalid
                $errors[] = 'Invalid Username / Password';
            }
        } else {
            $errors[] = 'Database query failed';
        }
    }
}
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
<?php mysqli_close($connection); ?>