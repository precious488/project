<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>projects</title>
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


                <!-- project section -->

                <div class="link-content" id="Project">
                    <div class="dash-hero">
                        <i class="fas fa-project-diagram"></i><span>Project</span>
                    </div>
                    <div class="prof-form">
                        <h3>project Form</h3>
                        <p>Please fill the form and Submit</p>
                        <form class="Prof-forn-input" method="post" action="logic.php">
                            <label>what is the title of the project you worked on? <input type="text" name="title" required></label>
                            <label>what is the name of the organisation in which carried out your project <input type="text" name="organisation" required></label>
                            <label>what was the duration of the project <input type="text" name="project_duration" required></label>
                            <label>Describe your project <textarea name="project_description" id="" required></textarea></label>
                            <div class="btn">
                                <button class="prof-btn" type="submit" name="add_project">add to cv</button>
                                <a href="skill.php"  class="links next"><span>Next</span></a>
                              

                            </div>

                        </form>
                </div>

                </div> 
            </div>
        </div>
</body>
</html>