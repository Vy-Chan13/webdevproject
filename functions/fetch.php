<?php
$query= "<<UPDATE SELECT QUERY>>";
$query = "SELECT * FROM tblsubjects
          LEFT JOIN tblsyllabus ON tblsyllabus.subject_id = tblsubjects.subjectid";

$result = mysqli_query($abc, $query);

if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "Subject ID: " . $row['subject_id'] . "<br>";
        echo "Subject Code"  . $row['subject_code'] . "<br>";
        echo "Subject Name: " . $row['subject_name'] . "<br>";
        echo "Syllabus ID: " . $row['syllabus_id'] . "<br>";
        echo "Syllabus Code: " . $row['syllabus_code'] . "<br>";
        echo "Syllabus Author: " . $row['syllabus_author'] . "<br>";


        echo "<hr>";
    }
} else {

    echo "Error: " . $query . "<br>" . mysqli_error($abc);
}

?>


