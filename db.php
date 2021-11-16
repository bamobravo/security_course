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

// main site configuration
// $host='localhost';
// $dbuser='c2021799_security_user ';
// $dbpass='Cb89x3D5PxexLG4';
// $dbname='c2021799_security_course';

$con = new mysqli($host,$dbuser,$dbpass,$dbname);
$con->autocommit(true);
 ?>