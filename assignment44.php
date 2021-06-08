<!------
Salma Mobasher
8120214
Due March 24,2021
--->
<?php

if (!EMPTY($_POST['courseName']) && !EMPTY($_POST['courseGrade'])&& !EMPTY($_POST['studentID'])) //iff all filled, insert values in table
{
$db = new SQLite3('./assignment44.db');
$stmt= $db->prepare("INSERT INTO assignment44(courseName, courseGrade, studentID) VALUES(:courseName, :courseGrade, :studentID);");
$stmt->bindValue(":courseName", $_POST['courseName']); //bindvalue used to save the post value to the array value!
$stmt->bindValue(":courseGrade", $_POST['courseGrade']); //dbexec did not work in this case!
$stmt->bindValue(":studentID", $_POST['studentID']);
$stmt->execute();
$stmt-> close();
$db->close();
header('Location: assignment4.php'); //this makes it open up th the page with the table :D
}

elseif(EMPTY($_POST['courseName']) && EMPTY($_POST['courseGrade']) && !EMPTY($_POST['studentID'])) //student id filled
{
    $db = new SQLite3('./assignment44.db');
    $table = $db->prepare('SELECT student.lastName, student.firstName, coursegrade.courseGrade, course.courseName, course.courseHours FROM ((courseGrade INNER JOIN student ON  student.studentID = courseGrade.studentID) INNER JOIN course ON courseGrade.courseID=course.courseID) WHERE student.studentID = :studentID;');

    $table->bindValue(':studentID', $_POST['studentID']);
    $result = $table->execute();
	
	echo"<table><tr><th>First Name</th><th>Last Name</th><th>Grade</th><th>Course</th><th>Hours</th></tr>";
while($row=$result->fetchArray(SQLITE3_ASSOC))
{
    echo"<tr><td>'".$row['firstName']."'</td><td>'".$row['lastName']."'</td><td>'".$row['courseGrade']."'</td><td>'".$row['courseName']."'</td><td>'".$row['courseHours']."'</td></tr>";
}
Echo"</table>";
}

elseif(EMPTY($_POST['courseName']) && EMPTY($_POST['courseGrade']) && EMPTY($_POST['studentID'])) //all empty
{
    $db = new SQLite3('./assignment44.db');
    $table = $db->prepare('SELECT student.lastName, student.firstName, coursegrade.courseGrade, course.courseName, course.courseHours FROM ((courseGrade INNER JOIN student ON  student.studentID = courseGrade.studentID) INNER JOIN course ON courseGrade.courseID=course.courseID);');
    $result = $table->execute();
	
	echo"<table><tr><th>Last Name</th><th>Grade</th><th>Course</th><th>Hours</th></tr>";
while($row=$result->fetchArray(SQLITE3_ASSOC))
{
    echo"<tr><td>'".$row['lastName']."'</td><td>'".$row['courseGrade']."'</td><td>'".$row['courseName']."'</td><td>'".$row['courseHours']."'</td></tr>";
}
Echo"</table>";
}

elseif(EMPTY($_POST['courseName']) && !EMPTY($_POST['courseGrade']) && EMPTY($_POST['studentID'])) //only grade
{
    $db = new SQLite3('./assignment44.db');
    $table = $db->prepare('SELECT student.lastName, student.firstName, coursegrade.courseGrade, course.courseName, course.courseHours FROM ((courseGrade INNER JOIN student ON  student.studentID = courseGrade.studentID) INNER JOIN course ON courseGrade.courseID=course.courseID)WHERE coursegrade.courseGrade = :courseGrade;');
    $table->bindValue(':courseGrade', $_POST['courseGrade']);   
   $result = $table->execute();
	
	echo"<table><tr><th>Last Name</th><th>Grade</th><th>Course</th><th>Hours</th></tr>";
while($row=$result->fetchArray(SQLITE3_ASSOC))
{
    echo"<tr><td>'".$row['lastName']."'</td><td>'".$row['courseGrade']."'</td><td>'".$row['courseName']."'</td><td>'".$row['courseHours']."'</td></tr>";
}
Echo"</table>";
}


elseif(!EMPTY($_POST['courseName']) && EMPTY($_POST['courseGrade']) && EMPTY($_POST['studentID'])) //only grade
{
    $db = new SQLite3('./assignment44.db');
    $table = $db->prepare('SELECT student.lastName, student.firstName, coursegrade.courseGrade, course.courseName, course.courseHours FROM ((courseGrade INNER JOIN student ON  student.studentID = courseGrade.studentID) INNER JOIN course ON courseGrade.courseID=course.courseID)WHERE course.courseName = :courseName;');
    $table->bindValue(':courseName', $_POST['courseName']);   
   $result = $table->execute();
	
	echo"<table><tr><th>Last Name</th><th>Grade</th><th>Course</th><th>Hours</th></tr>";
while($row=$result->fetchArray(SQLITE3_ASSOC))
{
    echo"<tr><td>'".$row['lastName']."'</td><td>'".$row['courseGrade']."'</td><td>'".$row['courseName']."'</td><td>'".$row['courseHours']."'</td></tr>";
}
Echo"</table>";
}

else
{
	echo '<script type="text/javascript">';
echo ' alert("You must only pick 1 option, or leave empty!! Please go back!")';  //not showing an alert box.
echo '</script>';
}
?>





