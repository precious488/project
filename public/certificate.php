<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>certificate</title>
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
    <form action="logic.php" method="post">
        <div>
            <label for="">what is the name of your certification</label>
            <input type="text" name="certificate_name">
        </div>
        <div>
            <label for="">where did you get your certification</label>
            <input type="text" name="certificate_organisation">
        </div>
        <div>
            <label for="">when did you obtain your certification</label>
            <input type="date" name="certificate_date">
        </div>
        <div>
            <label for="">How is certificate important</label>
            <textarea name="certificate_importance" id=""></textarea>
        </div>
        <button type="submit" name="add_certificate">add to cv</button>
        <button type="submit" name=""><a href="vulun.php">continue</a></button>

    </form>
</div>
</body>
</html>