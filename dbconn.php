<?php
  
define("HOSTNAME",
define("USERNAME",
define("PASSWORD",
define("DATABASE", "crud_operation");
$connection = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DATABASE);
if(!$connection) {
}
"localhost");
"root");
"");
else{
}
die("Connection Failed");
echo "yesss";
?>