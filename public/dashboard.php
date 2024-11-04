<?php 
include '../config/config.php';
session_start();

if(isset($_POST['create_cv'])){
    $title = htmlspecialchars($_POST['title']);
    $date = htmlspecialchars($_POST['date']);

    $id = rand(1, 10000);
    $_SESSION['cv_id']=$id;

    $sql = "INSERT INTO cvs (cv_id, cv_title, created_at, user_id)
           VALUES ('$id', '$title', '$date', '$_SESSION[id]') ";
    $result = mysqli_query($conn, $sql);
    if(!$result){
        echo "errer" . mysqli_error($conn);
    }else{
        header("location: personal.php");
    }


}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashbaord</title>
    <link rel="stylesheet" href="css\all.min.css">
    <link rel="stylesheet" href="css\fontawesome.min.css">
    <link rel="stylesheet" href="cv.css">
    <script scr="app.js" defer></script>
</head>
<body>
   
    
    <div class="sidebar">
        <div class="logo"></div>

        <ul class="menu">
            <li>
                <a href="dashboard.php" >
                    <i class="fas fa-tachometer-alt"></i>
                    <span>dashboard</span>
                </a>
            </li>
            <li>
                <a href="personal.php">
                    <i class="fas fa-user"></i>
                    <span>personal info</span>
                </a>
            </li>
            <li>
                <a href="experience.php">
                    <i class="fas fa-chart-bar"></i>
                    <span>Experince</span>
                </a>
            </li>
            <li>
                <a href="projects.php">
                    <i class="fas fa-briefcase"></i>
                    <span>projects</span>
                </a>
            </li>
            <li>
                <a href="education.php">
                    <i class="fas fa-question-circle"></i>
                    <span>Education</span>
                </a>
            </li>
            <li>
                <a href="certificate.php">
                    <i class="fas fa-star"></i>
                    <span>Certifications</span>
                </a>
            </li>
            <li>
                <a href="vulun.php">
                    <i class="fas fa-cog"></i>
                    <span>vuluntering</span>
                </a>
            </li>
            <li>
                <a href="skills.php">
                    <i class="fas fa-question-circle"></i>
                    <span>skills</span>
                </a>
            </li>
            <li>
                <a href="summarry.php">
                    <i class="fas fa-star"></i>
                    <span>summary</span>
                </a>
            </li>
           <li>
                <a href="langauge.php">
                    <i class="fas fa-star"></i>
                    <span>langauge</span>
                </a>
            </li>
         
            
        </ul>
    </div>


<div class="create">
<div class="logo">
  
    <p>MY CV</p>
  </div>  

  
  <nav class="nav-links">
    <ul>
        <li><a href="#">feedback</a></li>
       <li><a href="">logout</a></li> 
        
    </ul>
  </nav>

  
</div>

<div class="c">
    <div class="createCv">
    <form action="" method="post" class="title">
        
        <div>
            <label for="Title">Title</label>
            <input type="text" name="title" placeholder="Enter your title">
        </div>
        <div>
            <label for="date">Date</label>
            <input type="date" name="date" placeholder="Date">
        </div>
            
        <div>
            <button type="submit" name="create_cv">create cv</button>
        </div>
        
        </form>
</div>
</div>



</body>
</html>