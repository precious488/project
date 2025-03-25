<?php 
include 'midleware.php';
include '../config/config.php';


if(isset($_POST['create_cv'])){
    $title = htmlspecialchars($_POST['title']);
    $date = htmlspecialchars($_POST['date']);

    $id = rand(1, 10000);
    $_SESSION['cv_id']=$id;
    $_SESSION['create_cv']=true;

    $sql = "INSERT INTO cvs (cv_id, cv_title, created_at, user_id)
           VALUES ('$id', '', '$date', '$_SESSION[id]') ";
    $result = mysqli_query($conn, $sql);
    echo($result);
    
    if(!$result){
        echo "error" . mysqli_error($conn);
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
    <title>User Dashboard</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="fontawesome/css/all.css">
  
   
</head>
<body>
    <div class="container">
        <div class="dashboard">
            <div class="dash-left">
                <div class="logo">
                    <img src="/images/logo.png" alt="">
                    <div class="logoname link-name">
                        <p> MY CV</p>
                    </div>
                </div>
                <ul>
                <li><a href="dashboard.php"  class="links show "><i class="fas fa-home" data-tooltip="Home"></i><span class="link-name">Home</span></a></li>
                    <li><a href="personal.php"  class="links"><i class="fas fa-id-card"></i><span class="link-name">Personal Information</span></a></li>
                    <li><a href="certifications.php"  class="links"><i class="fas fa-certificate"></i><span class="link-name">Certificate</span></a></li>
                    <li><a href="education.php"  class="links"><i class="fas fa-graduation-cap"></i><span class="link-name">Education</span></a></li>
                    <li><a href="experience.php"  class="links"><i class="fas fa-briefcase"></i><span class="link-name">Experience</span></a></li>
                    <li><a href="projects.php"  class="links"><i class="fas fa-project-diagram"></i><span class="link-name">Project</span></a></li>
                    <li><a href="skill.php"  class="links"><i class="fas fa-tools"></i><span class="link-name">Skill</span></a></li>
                    <li><a href="language.php"  class="links"><i class="fas fa-language"></i><span class="link-name">Language</span></a></li>
                    <li><a href="hobby.php"  class="links"><i class="fas fa-palette"></i><span class="link-name">Hobby</span></a></li>
                    <li><a href="volunteering.php"  class="links"><i class="fas fa-hand-holding-heart"></i><span class="link-name">Volunteering</span></a></li>
                    <li><a href="summary.php"  class="links"><i class="fas fa-file-alt"></i><span class="link-name">Summary</span></a></li>

                </ul>
                <div class="dash-footer">
                    <a href="#" class="links"><i class="fas fa-sign-out-alt"></i><span class="link-name">Log Out</span></a>
                </div>
            </div>
            <div class="dash-right">

                <!-- dasshboard section -->
                <div class="link-content active show" id="Home">                                   
                    <div class="dash-hero">
                        <i class="fas fa-home"></i><span>Home</span>
                    <button type="submit" name="add_feedback" class="feedback">feedback</button>

                    </div>
                    <div class="prof-form">
                        
                    <h1>Create Your cv in minutes</h1>
                    

                    <form action="" method="post" class="Prof-forn-input" onsubmit="return validateCv() ">
        
                       
                            <label >Name <input type="text"  name="title" id="title" required></label>
                            <span class="error" id="titleError">Field is required.</span>

                            <label >Date <input type="date" name="date" id="date" required></label>
                            <span class="error" id="dateError">Field is required.</span>

                            <button class="prof-btn" type="submit" name="create_cv" > create cv</button>
                     </form>


                    </div>

           
            </div>



                

            </div>
        </div>
    </div>
    
    
    
    <script>

function validateCv(){
    const field = document.getElementById('title').value.trim();
    const date = document.getElementById('date').value.trim();



    const titleError = document.getElementById('titleError');
    const dateError = document.getElementById('dateError');

    let isValid = true;

           
    if (field === "") {
        fieldError.style.display = "block";
        isValid = false;
    } else {
        fieldError.style.display = "none";
    }


    if (date === "") {
        dateError.style.display = "block";
        isValid = false;
    } else {
        fieldError.style.display = "none";
    }
    return isValid; 

    

}
    
    </script>
</body>
</html>
