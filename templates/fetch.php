<?php
include "../config/config.php";
session_start();


$cv_id = $_SESSION['cv_id']; 


function fetchData($conn, $table, $cv_id) {
    
    $stmt = $conn->prepare("SELECT * FROM $table WHERE cv_id = ?");
    
   
    $stmt->bind_param("s", $cv_id); 
    if ($stmt->execute()) {
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    } else {
        return ["error" => "Query execution failed: " . $stmt->error];
    }
}



$info = fetchData($conn, 'info', $cv_id);
$experience = fetchData($conn, 'experience', $cv_id);
$education = fetchData($conn, 'education', $cv_id);
$skills = fetchData($conn, 'skills', $cv_id);
$languages = fetchData($conn, 'language', $cv_id);
$certifications = fetchData($conn, 'certifications', $cv_id);
$projects = fetchData($conn, 'projects', $cv_id);
$hobbies = fetchData($conn, 'hobbies', $cv_id);
$volunteering = fetchData($conn, 'vuluntering', $cv_id);
$summary = fetchData($conn, 'summarry', $cv_id);
?>