<!DOCTYPE html>
<html len>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <meta name="description" content="" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
  <link href="assets/style/style.css" rel="stylesheet" crossorigin="anonymous">
  <title>Login | Security Course</title>
</head>
<body>

	<div class="container-fluid home-container browser-height login-container">
		<div class="login-form mx-auto shadow">
			<form method="post" id="login-form">
				<div class="login-icon text-center mb-3">
					<!-- cite -->
					<img src="assets/images/lock-icon.png" alt="padlock icon">
					<!-- cite -->
				</div>
				<div id="notification"></div>
				<div class="form-group mt-3 mb-3">
					<label>Username:</label>
					<input type="text" required class="form-control" name="user_login" id="user_login" placeholder="Enter username">
				</div>
				<div class="form-group mt-3 mb-3">
					<label>Password:</label>
					<input type="password" required class="form-control" name="user_key" id="user_key" placeholder="Enter password">
				</div>
				<div class="d-flex justify-content-end">
					<button type="submit" name="login-btn" class="btn btn-primary">Login</button>
				</div>
				
			</form>
		</div>
	</div>

</body>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" crossorigin="anonymous"></script>
  <script type="text/javascript" src="assets/js/login.js"></script>
</html>