<!------
Salma Mobasher
8120214
Due March 24,2021 
--->

<?php
$db = new SQLite3('./assignment44.db');

$table = $db->prepare('SELECT student.lastName, student.firstName, coursegrade.courseGrade FROM courseGrade INNER JOIN student ON  student.studentID = courseGrade.studentID WHERE student.studentID = :studentID;');

$table->bindValue(':studentID', $_POST['studentID']);
$result = $table->execute();
//course.courseName, course.courseHours,
?>


