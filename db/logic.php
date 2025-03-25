<?php
include "../config/config.php";
// include "../config/config.php";
session_start();

// Function to safely execute SQL queries
function executeQuery($conn, $sql) {
    if (mysqli_query($conn, $sql)) {
        return true;
    } else {
        echo "Error: " . mysqli_error($conn);
        return false;
    }
}


if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (isset($_POST['add_certificate'])) {
        $certificate_name = htmlspecialchars($_POST['certificate_name']);
        $certificate_organisation = htmlspecialchars($_POST['certificate_organisation']);
        $certificate_time = htmlspecialchars($_POST['certificate_date']);
        $certificate_importance = htmlspecialchars($_POST['certificate_importance']);

        $sql = "INSERT INTO certifications (certification_name, certification_organisation, certification_date, certification_importance, cv_id) 
                VALUES ('$certificate_name', '$certificate_organisation', '$certificate_time', '$certificate_importance', '$_SESSION[cv_id]')";
        executeQuery($conn, $sql);
        $_SESSION['add_certification']="succesfully added, add another or continue";
        header("location:certifications.php");
        exit();
    }

    if (isset($_POST['add_experience'])) { // Fixed 'experince' to 'experience'
        $role = htmlspecialchars($_POST['role']);
        $company_name = htmlspecialchars($_POST['company_name']);
        $company_duration = htmlspecialchars($_POST['company_duration']);
        $company_location = htmlspecialchars($_POST['company_location']);
        $experience_description = htmlspecialchars($_POST['experince_description']); // Fixed variable name

        $sql = "INSERT INTO experience (role_company, company_name, company_duration, company_location, experience_description, cv_id) 
                VALUES ('$role', '$company_name', '$company_location', '$company_duration', '$experience_description', '$_SESSION[cv_id]')";
        executeQuery($conn, $sql);
        $_SESSION['experience']="succesfully added, add another or continue";

        header("location:experience.php");
       
    }

    if (isset($_POST['add_education'])) {
        $edu_title = htmlspecialchars($_POST['edu_title']);
        $institution = htmlspecialchars($_POST['institution']);
        $time = htmlspecialchars($_POST['time']);

        $sql = "INSERT INTO education (title, institution, date, cv_id) 
                VALUES ('$edu_title', '$institution', '$time', '$_SESSION[cv_id]')";
        executeQuery($conn, $sql);
        $_SESSION['add_education']="succesfully added, add another or continue";

        header("location:education.php");
        exit();
    }

    if (isset($_POST['add_infor'])) { 
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $number = htmlspecialchars($_POST['number']);
        $country = htmlspecialchars($_POST['country']);

        $sql = "INSERT INTO info (full_name, email, phone, country, cv_id) 
                VALUES ('$name', '$email', '$number', '$country', '$_SESSION[cv_id]')";
        executeQuery($conn, $sql);
        $_SESSION['add_info']="succesfully added, add another or continue";

        
            header("location:certifications.php");
          
        }
    }

    if (isset($_POST['add_project'])) {
        $title = htmlspecialchars($_POST['title']);
        $organisation = htmlspecialchars($_POST['organisation']);
        $project_duration = htmlspecialchars($_POST['project_duration']);
        $project_description = htmlspecialchars($_POST['project_description']);

        $sql = "INSERT INTO projects (project_title, organisation, project_duration, project_description, cv_id) 
                VALUES ('$title', '$organisation', '$project_duration', '$project_description', '$_SESSION[cv_id]')";
        executeQuery($conn, $sql);
        $_SESSION['add_project']="succesfully added, add another or continue";

        header("location:projects.php");
     
    }

    if (isset($_POST['add_skill'])) {
        $skill = htmlspecialchars($_POST['skill']);

        $sql = "INSERT INTO skills (skills, cv_id) 
                VALUES ('$skill', '$_SESSION[cv_id]')";
        executeQuery($conn, $sql);
        $_SESSION['add_skill']="succesfully added, add another or continue";

        header("location:skill.php");
        exit();
    }

    if (isset($_POST['add_summary'])) {
        $summary = htmlspecialchars($_POST['summary']);

        $sql = "INSERT INTO summarry (summ, cv_id) 
                VALUES ('$summary', '$_SESSION[cv_id]')";
        executeQuery($conn, $sql);
        $_SESSION['add_sum']="succesfully added, add another or continue";

        header("location:summary.php");
        exit();
    }

    if (isset($_POST['add_volunteering'])) { // Changed 'add_vulun' to 'add_volunteering'
        $volun_role = htmlspecialchars($_POST['vulun_role']);
        $organisation_name = htmlspecialchars($_POST['organisation_name']);
        $volun_duration = htmlspecialchars($_POST['vulun_duration']);
        $volun_location = htmlspecialchars($_POST['vulun_location']);
        $volun_description = htmlspecialchars($_POST['vulun_description']);

        $sql = "INSERT INTO vuluntering (role, vulun_organisation, duration, vulun_lacation, vulun_description, cv_id) 
                VALUES ('$volun_role', '$organisation_name', '$volun_duration', '$volun_location', '$volun_description', '$_SESSION[cv_id]')";
        executeQuery($conn, $sql);
        $_SESSION['add_vulun']="succesfully added, add another or continue";

         header("location:volunteering.php");
        exit();
    }


    if(isset($_POST['add_language'])){
        $lang = htmlspecialchars($_POST['language']);
        $level = $_POST['level'];

        $sql = "INSERT INTO language(lang, level, cv_id)
                VALUES ('$lang', '$level', '$_SESSION[cv_id]')";
     executeQuery($conn, $sql);
     $_SESSION['add_lang']="succesfully added, add another or continue";

     header("location:language.php");
    exit();
    }


  
    if(isset($_POST['add_hobby'])){
        $hob = htmlspecialchars($_POST['hobby']);
         $sql= "INSERT INTO hobbies(hobby, cv_id)
                 VALUES ('$hob', '$_SESSION[cv_id]')";
              executeQuery($conn, $sql);
        $_SESSION['add_hob']="succesfully added, add another or continue";

              header("location:hobby.php");
             exit();
    

    }

    if (isset($_POST['submit'])) {
        $name = htmlspecialchars($_POST['first']);
        $email = htmlspecialchars($_POST['email']);
        $pass = $_POST['password'];
        $confirm = htmlspecialchars($_POST['confirm']);

        
            $hash = password_hash($pass, PASSWORD_DEFAULT);

            function handleExistingUsernameOrEmailL($name, $email) {
                $sql = "SELECT * FROM users WHERE username = '$name' OR email = '$email'";
                global $conn;
                $result = mysqli_query($conn, $sql);
            
                if (mysqli_num_rows($result) > 0) {
                    header("location: signup.php?username__or_email_exist");
                }
            }
            handleExistingUsernameOrEmailL($name, $email);

            $sql = "INSERT INTO users (username, email, password) 
                    VALUES ('$name', '$email', '$hash')";
            executeQuery($conn, $sql);

            header('location:login.php');
        } else {
            echo "Passwords do not match.";
        }



    


// }

