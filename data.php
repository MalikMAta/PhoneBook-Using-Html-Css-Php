<?php
//Step1

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "phonebook";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

/*// Create database
$sql = "CREATE DATABASE phonebook";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}
*/

/*id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
name VARCHAR(30) NOT NULL,
number VARCHAR(30) NOT NULL,
reg_date TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}    
*/

if (isset($_POST['name'])) {
    $name = $_POST['name'];
}




if (isset($_POST['number'])) {
    $number = $_POST['number'];
}







  if(isset($_POST['submit']))
{
    $query = "INSERT INTO phonenumber (name, number)
    VALUES ('$name', '$number')";


$result = mysqli_query($conn, $query);
  
}








$queryRow = "SELECT  name, number, reg_date FROM phonenumber";

$resultRow = mysqli_query( $conn, $queryRow);

if ($resultRow === 'TRUE' ){
		echo "true";

	
}




if (isset($_POST['removename'])) {
    $remove = (int)$_POST['removename'];
}





if(isset($_POST['remove']))
{
$sql = "DELETE FROM phonenumber WHERE name = 
$remove";

$resultRemove = mysqli_query( $conn, $sql);
}

?>








<!DOCTYPE html>


<html>


<head>

	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel =" stylesheet" type="text/css" href="style.css">
<title> Phone Book Databse </title>

</head>



<body>


<div class="container">

<div class ="row">
<div class ="col-sm-12" style="background-color: white; font-size: 100px; text-align: center;">
Phone Book Database 
</div>
</div>
<hr>



<div id="form">

<form action ="data.php" method="post">
<input  type="text" name = "name" placeholder="Name">
<input  type="text" name ="number" placeholder="Phone Number">

<input type="submit" name="submit" value="Add">

</form>

</div>

<div id="form2">

<form action ="data.php" method="post">
<input  type="text" name = "removename" placeholder="Name">
<input type="submit" name="remove" value="Remove">

</form>

</div>





<hr>



<p> Contact List </p>

<br>

<table class="table">
	<thead>
	  <tr>
    <th>Name</th>
    <th>Number</th> 
    <th>Date Registered</th> 
      </tr>
      </thead>


<?php
if (mysqli_num_rows($resultRow) > 0) {
while ($row = mysqli_fetch_assoc($resultRow)){
?>

<tr>
		<td> <?php echo $row["name"] ?> </td>

		<td> <?php echo $row["number"] ?> </td>

		<td> <?php echo $row["reg_date"] ?> </td>
</tr>

	<?php
}}


$conn->close();

	?>




</table>
</div>

</body>
</html>




