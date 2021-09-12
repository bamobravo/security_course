<?php 
error_reporting(E_ALL);
	session_start();
	if (!(@$_SESSION['visited'] || isset($_POST['start-button']))) {
		header("Location:".$_SERVER['HTTP_REFERER']);
		exit();
	}
	//start session and save a recored there, then use that to show that the user has visited the necessary pages before now
	$_SESSION['visited']=true;
	//redirect to this page
	if (isset($_POST['start-button'])) {
		header("Location:".$_SERVER['REQUEST_URI']);
		exit;
	}
	if (isset($_POST['reg-button'])) {
		require_once 'db.php';
		$firstname = trim(@$_POST['firstname']);
		$lastname = trim(@$_POST['lastname']);
		$email = trim(@$_POST['email']);
		$phone = trim(@$_POST['phone']);
		$company = trim(@$_POST['organisation']);
		$role = trim(@$_POST['role']);

		if ($firstname && $lastname && $email && $phone && $company && $role) {
			$query="INSERT INTO student(firstname,lastname,phone,email,company,role_in_company) VALUES (?,?,?,?,?,?)";
			$statement = $con->prepare($query);
			$statement->bind_param('ssssss',$firstname,$lastname,$email,$phone,$company,$role);
			$res =$statement->execute();
			$_SESSION['firstname']=$firstname;
			$_SESSION['lastname']= $lastname;
			$_SESSION['email']=$email;
			$_SESSION['phone']=$phone;
			header("Location:lessons.php");

		}
		else{
			echo "error side";exit;
			$_SESSION['error']='Please provide information for all the fields';
		}
	}
		

 ?>


 <?php include 'includes/header.php' ?>

  <div class="container-fluid home-container">
     <br>
     <br>
     <br>
     <div class="w-50 mx-auto">
          <h3 class="mb-5">Kindly fill the form below</h3>
          <div class="mb-5 reg-form-container p-3" >
          	<?php if (@$_SESSION['error']): ?>
          		<div>
          			<?php echo $_SESSION['error']; ?>
          		</div>
          	<?php endif ?>
          	<?php $_SESSION['error']=''; ?>
            <form method="post" >
            	<div>
            		<div class="row mt-3">
            			<div class="form-group col-md-6">
            				<label>Firstname <span>*</span></label>
            				<input type="text" name="firstname" id="firstname" class="form-control" required="">
            			</div>
            			<div class="form-group col-md-6">
            				<label>Lastname <span>*</span></label>
            				<input type="text" name="lastname" id="lastname" class="form-control" required="">
            			</div>
            		</div> 
            		<div class="row mt-3">
            			<div class="form-group col-md-6">
            				<label>Email Address <span>*</span></label>
            				<input type="email" name="email" required="" class="form-control">
            			</div>
            			<div class="form-group col-md-6">
            				<label>Phone number <span>*</span></label>
            				<input type="text" name="phone" required class="form-control">
            			</div>
            		</div>
            		<div class="row mt-3">
            			<div class="form-group col-md-6">
            				<label>Name of Organization <span>*</span></label>
            				<input type="text" name="organisation" class="form-control">
            			</div>
            			<div class="form-group col-md-6">
            				<label>Role in Organization <span>*</span></label>
            				<input type="text" name="role" class="form-control">
            			</div>
            		</div>
            		
            	</div>
            	<div class="mt-3 d-flex justify-content-end mb-3">
            		<button type="submit" name="reg-button"  class="btn btn-primary">Proceed</button>
            	</div>
            </form>

          </div>
     </div>
  </div>
  <?php include 'includes/footer.php' ?>