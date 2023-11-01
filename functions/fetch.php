<?php
    include_once("../dbConnection/mysqlconfig_connection.php");

    $query = "SELECT * FROM tblsubject";
    $result = mysqli_query($dbc, $query);

    if ($result) {
        if (mysqli_num_rows($result) > 0) {

            while ($row = mysqli_fetch_assoc($result)) {
                echo "Subject ID: " . $row['subject_id'] . "<br>";
                echo "Subject Code: " . $row['subject_code'] . "<br>";
                echo "Subject Name: " . $row['subject_name'] . "<br><br>";
            }
        } else {
            echo "No records found in the table.";
        }
    } else {

        echo "Error: " . mysqli_error($dbc);
    }
    mysqli_close($dbc);
?>

