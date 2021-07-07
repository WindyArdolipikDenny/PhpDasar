<?php
    if (isset ($_POST["submit"])) {
        if ($_POST["username"] == "asd" && $_POST["password"] == "asd" )  {
            header("Location: LatihanAdminPOST.php");
        } else {
             $error = true;
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
</head>
<body>
    <h1>Login Admin</h1>
    <?php if (isset($error) ) : ?>
        <p style="color: red; font: italic;"> Username || Password Salah</p>
    <?php endif; ?>
    <ul>
      <form action="" method="POST">
      <li>
        <label for="username">Username :</label>
        <input type="text" id="username" name="username">
    </li>
    <li>
        <label for="password">Password :</label>
        <input type="password" id="password" name="password">
    </li>
    <li>
        <button type="submit" name="submit">Login</button>
    </li>
    </form>
    </ul>
</body>
</html>