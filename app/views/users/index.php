<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MVC template - Users</title>
</head>
<body>
    <ul>
        <li><a href="home">Back</a></li>
    </ul>
    <table>
        <tr>
            <th>Id</th>
            <th>Username</th>
            <th>Password</th>
            <th>Active</th>
        </tr>
        <?php foreach ($data['users_list'] as $row){
            echo '<tr><td>'.$row['id'].'</td><td>'.$row['username'].'</td><td>'.$row['password'].'</td><td>'.$row['active'].'</td>';
        } ?>
    </table>
</body>
</html>
