<!------
Salma Mobasher
8120214
Due March 24,2021 
--->
<div>
<link rel="stylesheet" href="mystyle.css">
<table class = "assignment44">
<?php
$db=new SQLite3('./assignment44.db');
$stmt = $db->prepare('SELECT * FROM assignment44');
$result = $stmt->execute(); 
echo"<td style=background-color:yellow >"."Course Name"."</td>"; 
echo"<td style=background-color:yellow>"."Grade"."</td>";
echo"<td style=background-color:yellow>"."Student ID"."</td>";
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
