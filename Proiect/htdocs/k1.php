<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>
<?php
//Oracle DB user name
$username = 'student';

// Oracle DB user password
$password = 'STUDENT';

// Oracle DB connection string
$connection_string = 'localhost/xe';

//Connect to an Oracle database
$connection = oci_connect( $username, $password, $connection_string);

If (!$connection)
echo 'Connection Failed';
else
echo 'Connection Succesfull';

$IDerr = $ID = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["ID"])) {
    $IDerr = "ID is required";
  } else {
    $ID = test_input($_POST["ID"]);
  }
  //echo $ID;
 }
 
 function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>Tema 7</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Question ID: <input type="text" name="ID">

  <span class="error">* <?php echo $IDerr;?></span>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php

//echo $ID;
$sql = oci_parse($connection, "SELECT 1 FROM questions where id='$ID'");
if(oci_execute($sql) !== false)
	$row=oci_fetch_all($sql,$rez);

$sql1 = oci_parse($connection, "SELECT question FROM questions where id='$ID'");
if(oci_execute($sql1) !== false)
  $row1=oci_fetch_all($sql1,$rez1);


$sql2 = oci_parse($connection, "SELECT answer FROM questions where id='$ID'");
if(oci_execute($sql2) !== false);
  $row2=oci_fetch_all($sql2,$rez2);


if($rez == 'array(1) { [\"QUESTION\"]=> array(0) { } } ')
     echo "ORA-20321 Intrebarea cu ID-ul '$ID' nu se afla in baza de date";
else
	{ echo 'Intrebarea este: ';
      var_dump($rez1);
      echo '<br><br> Raspunsul corect este: ';
      var_dump($rez2);
	}



// Close connection 
oci_close($connection);

?>
</body>
</html>

