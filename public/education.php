<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Education</title>
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
    </div>
    <div class="show">
        <form action="" method="post">
            <div>
                <label for="">what is the name of the certificate</label>
                <input type="text" name="edu_title">
            </div>
            <div>
                <label for="">which institition did you obtain your cerificate</label>
                <input type="text" name="institution">
            </div>
            <div>
                <label for="">when did you obtain certificate</label>
                <input type="date" name="time">
            </div>
            <button type="submit" name="add_education">add to cv</button>
        </form>
    </div>
</body>
</html>