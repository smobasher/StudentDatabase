<!------
Salma Mobasher
8120214
Due March 24,2021 
--->
<div>
<table class = "courseGrade">
<?php
$db=new SQLite3('./assignment44.db');
$stmt = $db->prepare('SELECT * FROM courseGrade');
$result = $stmt->execute(); 
echo"<td style=background-color:yellow >"."Student ID"."</td>"; 
echo"<td style=background-color:yellow>"." Course ID"."</td>";
echo"<td style=background-color:yellow>"."Grade"."</td>";
while($row=$result->fetchArray(SQLITE3_ASSOC)){
	echo"<tr>";
	foreach($row as $key => $val) //creating a row on the table for each new entry
	{
		echo"<td>".$val."</td>"; //note from CCS the ID# will be in orange
		
	}
	echo"<tr>";
}

$stmt->close();
$db->close();
?>
</div>
</table>
