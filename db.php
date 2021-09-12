<?php 
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
// setup database information here
// development
// $host='localhost';
// $username='root';
// $password='change';
// $dbname='security_course';

// deployment

$host='dcrhg4kh56j13bnu.cbetxkdyhwsb.us-east-1.rds.amazonaws.com';
$username='y44jvnk4jhyz7w07';
$password='tcumajg8kww5qexo';
$dbname='pdb7m1dklcvea3pf';
	

$con = new mysqli($host,$username,$password,$dbname);
 ?>