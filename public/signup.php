<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup</title>
    <link rel="stylesheet" href="css\all.min.css">
    <link rel="stylesheet" href="css\fontawesome.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="wrap">
        <div class="login">
            <p>sign-up</p>
            <form action="logic.php" method="post">
                <div>
                    <label for=""> name:</label>
                    <input type="text" name="first">
                </div>
              
                <div>
                    <label for="email">email:</label>
                    <input type="email" name="email">
                </div>
              
                <div>
                    <label for="">password:</label>
                    <input type="password" name="password">
                </div>
                <div>
                    <label for="">confirm password:</label>
                    <input type="password" name="confirm">
                </div>
                <div>
                    <button type="submit" name="submit">signup</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>