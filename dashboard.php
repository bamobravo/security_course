
<?php 

@session_start();
if (!isset($_SESSION['user_login'])) {
	header("Location:login.php");
	exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Security Course | Assignment</title>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <meta name="description" content="" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
  <link href="assets/style/style.css" rel="stylesheet" crossorigin="anonymous">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato:wght@700&family=Roboto:wght@400&display=swap" rel="stylesheet">  <link rel="icon" href="assets/images/logo1.png">
</head>
<body>
  <header>
	  <nav class="navbar navbar-expand-lg p-0 navbar-dark bg-dark">
	  	<a class="navbar-brand" href="#"><img src="assets/images/logo.png" alt="logo" style="width:100px"></a>
	  	<div class="container-fluid p-3 d-flex justify-content-end text-light">
	  		<span class="d-inline-block greeting">Welcome <?php echo $_SESSION['user_login'] ?></span> | <a class="logout" href="logout.php">Logout</a>
	  	</div>
	  </nav>
  </header>
<main class="container-fluid home-container browser-height">
	<section class="bg-white pt-4 p-3 shadow w-75 mx-auto">
		<h4 class="underline">List of Student and Scores</h4>
		<?php 
			require_once "db.php";
			$query="SELECT * FROM student";
			$result = $con->query($query);
			$result = $result->fetch_all(MYSQLI_ASSOC);
		 ?>
		 <?php if ($result): ?>
		 	<div class="mb-5">
				<table class="table table-responsive">
					<thead>
						<tr>
							<th>S/N</th>
							<th>Firstname</th>
							<th>Lastname</th>
							<th>Email</th>
							<th>Phone Number</th>
							<th>Company</th>
							<th>Role in Company</th>
							<th>Assessment Score</th>
							<th>Date Created</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($result as $key => $value): ?>
							<tr>
								<td><?=$key+1?></td>
								<td><?=$value['firstname']?></td>
								<td><?=$value['lastname']?></td>
								<td><?=$value['email']?></td>
								<td><?=$value['phone']?></td>
								<td><?=$value['company']?></td>
								<td><?=$value['role_in_company']?></td>
								<td><?=$value['score']?$value['score']:'NA'?></td>
								<td><?=$value['date_created']?></td>
							</tr>
							
						<?php endforeach ?>
					</tbody>
				</table>
			</div>
		 <?php else: ?>
		 	<div>
		 		No Score found
		 	</div>
		 <?php endif ?>
		
	</section>
	
</main>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
  <script type="text/javascript" src="assets/js/script.js"></script>
</body>
</html>