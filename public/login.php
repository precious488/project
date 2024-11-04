 
<?php
session_start();
include "../config/config.php";

if (isset($_POST['login'])) {
    $email = htmlspecialchars($_POST['email']);
    $pass = $_POST['password'];

    
    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        
        if (password_verify($pass, $user['password'])) {
            $_SESSION['username'] = $user['username']; 
            $_SESSION['authenticated'] = true;
            $_SESSION['id'] = $user['id'];
            header('location:dashboard.php');
            exit();
        } else {
            $_SESSION['login_error'] = "Incorrect password.";
        }
    } else {
        $_SESSION['login_error'] = "User not found. Please register.";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="css\all.min.css">
    <link rel="stylesheet" href="css\fontawesome.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="wrap">
        <div class="login">
            <p>login</p>
            <?php
            if (isset($_SESSION['login_error'])) {
                echo "<p style='color:red;'>".$_SESSION['login_error']."</p>";
                unset($_SESSION['login_error']); 
            }
            ?>
            <form action="" method="post">
                <div>
                    <label for="">Email:</label>
                    <input type="email" name="email">
                </div>
                <div>
                    <label for="">password:</label>
                    <input type="password" name="password">
                </div>
                <div>
                    <a href="">forgot password?</a><br>
                </div>

                <div><button type="submit" name="login">Login</button></div>
            </form>
        </div>
    </div>
</body>
</html> 


