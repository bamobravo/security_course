<?php 
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
// setup database information here
// development
$host='localhost';
$dbuser='root';
$dbpass='change';
$dbname='security_course';

// deployment

// $host='dcrhg4kh56j13bnu.cbetxkdyhwsb.us-east-1.rds.amazonaws.com';
// $dbuser='y44jvnk4jhyz7w07';
// $dbpass='tcumajg8kww5qexo';
// $dbname='pdb7m1dklcvea3pf';
	

$con = new mysqli($host,$dbuser,$dbpass,$dbname);
 ?>