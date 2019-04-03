<?php include_once ('data.php');

$query = "SELECT id, name, number from phonenumber";

$result = mysqli_query( $conn, $query);

?>
<!DOCTYPE html>


<html>


<head>
	

<title> Phone Book Databse </title>

</head>



<body>
<h1> Phone Book Database </h1>

<hr>



<form action ="data.php" method="post">

Name <input type="text" name = "name">

Phone Number <input type="text" name ="number">

<input type="submit" name="submit" value="Add">

</form>


<table>

<p> Contact List </p>

<br>

<tr>

<th> Id </th>
<th> Name </th>
<th> Number </th>

</tr>


</table>


</body>



</html>
