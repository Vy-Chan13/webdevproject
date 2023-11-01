<?php

    include_once("../dbConnection/mysqlconfig_connection.php");

    if(isset($_GET['id'])) {
        $id = $_GET['id'];

        $delete_query = "DELETE FROM tblsubject WHERE subject_id = '$id'";
        if (mysqli_query($dbc, $delete_query)) {

            header("Location: ../index.php");
            exit(); 
        } else {

            echo "Error: " . mysqli_error($dbc);
        }
    } else {

        echo "ID not provided in the URL.";
    }
?>
