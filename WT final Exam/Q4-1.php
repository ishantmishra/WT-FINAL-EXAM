<html>
<head>
<title>Gross salary of an Employee</title>
</head>
<body>
<form method="post">
<table border="0">
<tr>
<td> <input type="text" name="salary" value="" placeholder="Enter basic salary"/>
</td>
</tr>
<tr>
<td> <input type="submit" name="submit" value="Submit"/>
</td>
</tr>
</table>
</form>
<?php
if(isset($_POST['submit']))
{
$basic_salary = $_POST['salary'];
$gross_salary = $basic_salary + $DA + $HRA;
echo "Gross Salary : " .$gross_salary ."/-";
return 0;
}
?>
</body>
</html>