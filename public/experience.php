<?php
// if (isset($_POST['add_experience'])) { // Fixed 'experince' to 'experience'
//         $role = htmlspecialchars($_POST['role']);
//         $company_name = htmlspecialchars($_POST['company_name']);
//         $company_location = htmlspecialchars($_POST['company_location']);
//         $experience_description = htmlspecialchars($_POST['experience_description']); // Fixed variable name

//         $sql = "INSERT INTO experience (role, company_name, company_location, experience_description, cv_id) 
//                 VALUES ('$role', '$company_name', '$company_location', '$experience_description', '$_SESSION[cv_id]')";
//         $result = mysqli_query($conn, $sql);

        
       
//     }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Experince</title>
    <link rel="stylesheet" href="css\all.min.css">
    <link rel="stylesheet" href="css\fontawesome.min.css">
    <link rel="stylesheet" href="cv.css">
</head>
<body>
    
    <div class="sidebar">
        <div class="logo"></div>
        <ul class="menu">
            <li class="active">
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
                <a href="hobby.php">
                    <i class="fas fa-star"></i>
                    <span>hobby</span>
                </a>
            </li>
            <li>
                <a href="language.php">
                    <i class="fas fa-star"></i>
                    <span>language</span>
                </a>
            </li>
        </ul>
    </div><div class="show">
        <h1>how are you bvgjs</h1>
        
        <form action="logic.php" method="post">
            <div>
                <label for="">what was your role at the company</label>
                <input type="text" name="role">
            </div>
            <div>
                <label for="">what is the name of the company you worked for</label>
                <input type="text" name="company_name">
            </div>
            <div>
                <label for="">How long did you work</label>
                <input type="text" name=" duration">
            </div>
            <div>
                <label for="">where is the company located</label>
                <input type="text" name="company_location">
            </div>
            <div>
                <label for="">what did you do at the company</label>
                <textarea name="experince_description" id=""></textarea>
            </div>
            <button type="submit" name="add_experience">add to cv</button>
            <button type="submit" name=""><a href="projects.php">continue</a></button>

        </form>
    </div>
</body>
</html>