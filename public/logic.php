<?php
include "../config/config.php";
// session_start();

//if($_SERVER('REQUEST_METHOD') == 'POST'){

    // if(isset($_POST['add_certificate'])){
    //     $certificate_name = htmlspecialchars($_POST['certificate_name']);
    //     $certificate_organisation = htmlspecialchars($_POST['certificate_organisation']);
    //     $certificate_time = htmlspecialchars($_POST['certificate_time']);
    //     $certificate_importance = htmlspecialchars($_POST['certificate_importance']);


    //     $sql = "INSERT INTO certifications(certificate_name, certificate_organisation, certificate_time, certificate_inpertance) 
    //     VALUES ('$certificate_name', '$certificate_organisation', '$certificate_time', '$certificate_importance')";
    //     $result = mysqli_query($conn, $sql);
    //     if(!$result){
    //     echo "erreo";
    // }
    // }


    // if(isset($_POST['add_experince'])){
    //     $role = htmlspecialchars($_POST['role']);
    //     $company_name = htmlspecialchars($_POST['company_name']);
    //     $company_location = htmlspecialchars($_POST['company_location']);
    //     $experience_description = htmlspecialchars($_POST['experince_description']);


    //     $sql = "INSERT INTO experince(role_sompay, campany_name, company_location, experince_description) 
    //     VALUES ('$role', '$company_name', '$company_location', '$experience_description')";
    //     $result = mysqli_query($conn, $sql);
    //     if(!$result){
    //     echo "erreo";
    // }
         
    // }

    // if(isset($_POST['add_education'])){
    //     $edu_title = htmlspecialchars($_POST['edu_title']);
    //     $institution = htmlspecialchars($_POST['institution']);
    //     $time = htmlspecialchars($_POST['time']);


    //     $sql = "INSERT INTO education(title, instution, date) 
    //     VALUES ('$edu_title', '$institution', '$time')";
    //     $result = mysqli_query($conn, $sql);
    //     if(!$result){
    //     echo "erreo";
    // }
    // }

    // if(isset($_POST['add_p'])){
    //     $name = htmlspecialchars($_POST['name']);
    //     $email = htmlspecialchars($_POST['email']);
    //     $number = htmlspecialchars($_POST['number']);
    //     $country = htmlspecialchars($_POST['country']);
 

    //     $sql = "INSERT INTO info(full_name, email, number, country) 
    //     VALUES ('$name', '$email', '$number', '$country')";
    //     $result = mysqli_query($conn, $sql);
    //     if(!$result){
    //     echo "erreo";
    // }else{
    //     header("location:personal.php");
    // }
    // }

    // if(isset($_POST['add_project'])){
    //     $title = htmlspecialchars($_POST['title']);
    //     $organisation = htmlspecialchars($_POST['organisation']);
    //     $project_duration = htmlspecialchars($_POST['project_duration']);
    //     $project_description = htmlspecialchars($_POST['project_description']);

    //     $sql = "INSERT INTO projects(project_title, organistion, project_duration, project_description) 
    //     VALUES ('$title', '$organisation', '$project_duration', $project_description)";
    //     $result = mysqli_query($conn, $sql);
    //     if(!$result){
    //     echo "erreo";
    // }
    // }

    // if(isset($_POST['add_skill'])){
    //     $skill = htmlspecialchars($_POST['skill']);
        
    //     $sql = "INSERT INTO users(skills) 
    //     VALUES ('$skills')";
    //     $result = mysqli_query($conn, $sql);
    //     if(!$result){
    //     echo "erreo";
    // }
    // }

    // if(isset($_POST['add_sum'])){
    //     $summ = htmlspecialchars($_POST['summary']);

    //     $sql = "INSERT INTO users(summ) 
    //     VALUES ('$summ')";
    //     $result = mysqli_query($conn, $sql);
    //     if(!$result){
    //     echo "erreo";
    // }


    // }

    // if(isset($_POST['add_vulun'])){
    //     $vulun_role = htmlspecialchars($_POST['vulun_role']);
    //     $organisation_name = htmlspecialchars($_POST['organisation_name']);
    //     $vulun_duration = htmlspecialchars($_POST['vulun_duration']);
    //     $vulun_location = htmlspecialchars($_POST['vulun_location']) ;
    //     $vulun_description = htmlspecialchars($_POST['vulun_description']);

    //     $sql = "INSERT INTO users(vulun_role, organisation, vulun_duration, vulun_location, vulun_description) 
    //     VALUES ('$vulun_role', '$organisation_name', '$vulun_duration', '$vulun_location' '$vulun_description')";
    //     $result = mysqli_query($conn, $sql);
    //     if(!$result){
    //      echo "erreo";
    // }
    // }



    // if(isset($_POST['submit'])){
    //     $name = htmlspecialchars($_POST['first']);
    //     $email = htmlspecialchars($_POST['email']);
    //     $pass =(($_POST['password']));
    //     $confirm = htmlspecialchars($_POST['confirm']);


    // $hash = password_hash($pass, PASSWORD_DEFAULT);

    // $sql = "INSERT INTO users(username, email, password) 
    //         VALUES ('$name', '$email', '$hash')";
    // $result = mysqli_query($conn, $sql);
    // if(!$result){
    //     echo "erreo";
    // }

    //  }
// }
include "../config/config.php";
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

// Check for various form submissions
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (isset($_POST['add_certificate'])) {
        $certificate_name = htmlspecialchars($_POST['certificate_name']);
        $certificate_organisation = htmlspecialchars($_POST['certificate_organisation']);
        $certificate_time = htmlspecialchars($_POST['certificate_date']);
        $certificate_importance = htmlspecialchars($_POST['certificate_importance']);

        $sql = "INSERT INTO certifications (certification_name, certification_organisation, certification_date, certification_importance, cv_id) 
                VALUES ('$certificate_name', '$certificate_organisation', '$certificate_time', '$certificate_importance', '$_SESSION[cv_id]')";
        executeQuery($conn, $sql);
        header("location:certificate.php");
        exit();
    }

    if (isset($_POST['add_experience'])) { // Fixed 'experince' to 'experience'
        $role = htmlspecialchars($_POST['role']);
        $company_name = htmlspecialchars($_POST['company_name']);
        $company_location = htmlspecialchars($_POST['company_location']);
        $experience_description = htmlspecialchars($_POST['experince_description']); // Fixed variable name

        $sql = "INSERT INTO experience (role_company, company_name, company_location, experience_description, cv_id) 
                VALUES ('$role', '$company_name', '$company_location', '$experience_description', '$_SESSION[cv_id]')";
        executeQuery($conn, $sql);
        header("location:experience.php");
       
    }

    if (isset($_POST['add_education'])) {
        $edu_title = htmlspecialchars($_POST['edu_title']);
        $institution = htmlspecialchars($_POST['institution']);
        $time = htmlspecialchars($_POST['time']);

        $sql = "INSERT INTO education (title, institution, date, cv_id) 
                VALUES ('$edu_title', '$institution', '$time', '$_SESSION[cv_id]')";
        executeQuery($conn, $sql);
        header("location:education.php");
        exit();
    }

    if (isset($_POST['add_p'])) { // Changed 'add_p' to 'add_info' for clarity
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $number = htmlspecialchars($_POST['number']);
        $country = htmlspecialchars($_POST['country']);

        $sql = "INSERT INTO info (full_name, email, phone, country, cv_id) 
                VALUES ('$name', '$email', '$number', '$country', '$_SESSION[cv_id]')";
        executeQuery($conn, $sql);
            header("location:personal.php");
          
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
        header("location:projects.php");
     
    }

    if (isset($_POST['add_skill'])) {
        $skill = htmlspecialchars($_POST['skill']);

        $sql = "INSERT INTO skills (skills, cv_id) 
                VALUES ('$skill', '$_SESSION[cv_id]')";
        executeQuery($conn, $sql);
        header("location:skills.php");
        exit();
    }

    if (isset($_POST['add_sum'])) { // Changed 'add_sum' to 'add_summary' for clarity
        $summary = htmlspecialchars($_POST['summary']);

        $sql = "INSERT INTO summarry (summ, cv_id) 
                VALUES ('$summary', '$_SESSION[cv_id]')";
        executeQuery($conn, $sql);
        header("location:summarry.php");
        exit();
    }

    if (isset($_POST['add_vulun'])) { // Changed 'add_vulun' to 'add_volunteering'
        $volun_role = htmlspecialchars($_POST['vulun_role']);
        $organisation_name = htmlspecialchars($_POST['organisation_name']);
        $volun_duration = htmlspecialchars($_POST['vulun_duration']);
        $volun_location = htmlspecialchars($_POST['vulun_location']);
        $volun_description = htmlspecialchars($_POST['vulun_description']);

        $sql = "INSERT INTO vuluntering (role, vulun_organisation, duration, vulun_lacation, vulun_description, cv_id) 
                VALUES ('$volun_role', '$organisation_name', '$volun_duration', '$volun_location', '$volun_description', '$_SESSION[cv_id]')";
        executeQuery($conn, $sql);
         header("location:vulun.php");
        exit();
    }


    if(isset($_POST['add_lang'])){
        $lang = htmlspecialchars($_POST['lang']);
        $level = $_POST['level'];

        $sql = "INSERT INTO language(lang, level, cv_id)
                VALUES ('$lang', '$level', '$_SESSION[cv_id]')";
     executeQuery($conn, $sql);
     header("location:language.php");
    exit();
    }


  
    if(isset($_POST['add_hob'])){
        $hob = htmlspecialchars($_POST['hob']);
         $sql= "INSERT INTO hobbies(hobby, cv_id)
                 VALUES ('$hob', '$_SESSION[cv_id]')";
              executeQuery($conn, $sql);
              header("location:hobby.php");
             exit();
    

    }

    if (isset($_POST['submit'])) {
        $name = htmlspecialchars($_POST['first']);
        $email = htmlspecialchars($_POST['email']);
        $pass = $_POST['password'];
        $confirm = htmlspecialchars($_POST['confirm']);

        if ($pass === $confirm) {
            $hash = password_hash($pass, PASSWORD_DEFAULT);

            $sql = "INSERT INTO users (username, email, password) 
                    VALUES ('$name', '$email', '$hash')";
            executeQuery($conn, $sql);
        } else {
            echo "Passwords do not match.";
        }



    }



// }

