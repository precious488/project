<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>language</title>
</head>
<body>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
            <li>
                <a href="language.php">
                    <i class="fas fa-star"></i>
                    <span>language</span>
                </a>
            </li>
        </ul>
    </div>
    
    <div class="show">
        <h1>
            
        </h1>

        <form action="logic.php" method="post">
            <div>
                <label for="language">language</label>
                    <input type="text" name="lang">
                
            </div>
            <div>
                <label for="level">level</label>
                <select name="level" id="">
                    <option>Advanced</option>
                    <option>Intermediary</option>
                    <option>Beginner</option>



                </select>
            </div>
            <button type="submit" name="add_lang">add to cv</button>
            <button type="submit" name=""><a href="../templates\template1.php">next</a></button>
          
        </form>
    </div>

</body>
</html>