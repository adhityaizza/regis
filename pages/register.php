<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<div class="container">
    <h1 class="title">Azin</h1>
    <div class="card">
        <form action="./process/register_process.php" method="post">
            <input type="text" name="name" placeholder="name">
            <input type="text" name="username" placeholder="Username">
            <input type="password" name="password" placeholder="Password">

            <div class="buttons">
                <button type="submit" class="login-button">Register</button>
            </div>
        </form>
    </div>
</div>
</body>
</html>