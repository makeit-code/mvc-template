<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MVC template - Add user</title>
</head>
<body>
<?php if (isset($_SESSION['info'])) { echo $_SESSION['info']; unset($_SESSION['info']); } ?>
    <form action="add_user" method="post">
        <label for="username">Username</label>
        <input type="text" name="username" id="username"><br>
        <label for="password">Password</label>
        <input type="password" name="password" id="password"><br>
        <button type="submit">Add user</button>
    </form>
    <ul>
        <li><a href="../users">Back</a></li>
    </ul>
</body>
</html>