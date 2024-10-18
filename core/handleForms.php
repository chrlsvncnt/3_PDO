<?php

require_once 'dbConfig.php';
require_once 'models.php';

if (isset($_POST['insertBtn'])) {
    $firstName = trim($_POST['firstName']);
    $lastName = trim($_POST['lastName']);
    $yearGraduated = trim($_POST['yearGraduated']);
    $yearsOfExperience = trim($_POST['yearsOfExperience']);
    $skills = trim($_POST['skills']);
    $projects = trim($_POST['projects']);
    $dateRegistered = date("Y-m-d H:i:s");

    if (!empty($firstName) && !empty($lastName)  && !empty($yearGraduated)  && !empty($yearsOfExperience) && !empty($skills) && !empty($projects) && !empty($dateRegistered)) {

            $query = insertIntoDeveloperRecords($pdo, $firstName, $lastName, $yearGraduated, $yearsOfExperience, $skills, $projects, $dateRegistered);

        if ($query) {
            header("Location: ../index.php");
        }

        else {
            echo "Insertion failed";
        }
    }

    else {
        echo "Make sure that no fields are empty";
    }
   
}


if (isset($_POST['editBtn'])) {
    $ID = isset($_POST['ID']) ? $_POST['ID'] : '';
    $firstName = trim($_POST['firstName']);
    $lastName = trim($_POST['lastName']);
    $yearGraduated = trim($_POST['yearGraduated']);
    $yearsOfExperience = trim($_POST['yearsOfExperience']);
    $skills = trim($_POST['skills']);
    $projects = trim($_POST['projects']);
    $dateRegistered = date("Y-m-d H:i:s");

    var_dump($_POST);
    
    if (!empty($firstName) && !empty($lastName)  && !empty($yearGraduated)  && !empty($yearsOfExperience) && !empty($skills) && !empty($projects) && !empty($dateRegistered)) {
        
        $query = updateADev($pdo, $ID, $firstName, $lastName, $yearGraduated, $yearsOfExperience, $skills, $projects, $dateRegistered);

        if ($query) {
            header("Location: ../index.php");
        }
        else {
            echo "Update failed";
        }

    }

    else {
        echo "Make sure that no fields are empty";
    }

}





if (isset($_POST['deleteBtn'])) {

    $query = deleteADev($pdo, $_GET['ID']);

    if ($query) {
        header("Location: ../index.php");
    }
    else {
        echo "Deletion failed";
    }
}

?>
