 <?php

require_once '../vendor\autoload.php';
use Dotenv\Dotenv;
$dotenv = Dotenv::createImmutable('../vendor');
$dotenv->load();

$conn = mysqli_connect($_ENV["DB_HOST"],  $_ENV["DB_USER"], $_ENV["DB_PASS"], $_ENV["DB_NAME"]);

if(!$conn){
    echo "error" . mysqli_error($conn);
}else{
    // echo "hello";
}

