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

$IDerr = $ID = $IDT = "";

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
  Question ID: <input type="number" name="ID">

  <span class="error">* <?php echo $IDerr;?></span>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php

//echo $ID;

$sql = oci_parse($connection, "begin :res := existOrNot(:qid); end;");

  oci_bind_by_name($sql,":qid",$ID);
  oci_bind_by_name($sql,":res",$rez,4000);

if(oci_execute($sql) !== false){
 echo $ID." : ".$rez;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["IDT"])) {
    $IDTerr = "ID is required";
  } else {
    $IDT = test_input($_POST["IDT"]);
  }
  //echo $ID;
 }
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Question ID: <input type="text" name="IDT">

  <span class="error">* <?php echo $IDerr;?></span>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
  
  $sqlT = oci_parse($connection, "begin :res := existOrNot(:qid); end;");

  oci_bind_by_name($sqlT,":qid",$IDT);
  oci_bind_by_name($sqlT,":res",$rezT,4000);

oci_execute($sqlT);
 echo $IDT." : ".$rezT;


// Close connection 
oci_close($connection);

?>
</body>
</html>

