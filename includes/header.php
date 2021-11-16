
<?php @session_start() ?>
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
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php"><img src="assets/images/logo.png" alt="logo" style="width:100px"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class=" d-flex justify-content-end pl-md-5 p-2 collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mb-2 mb-lg-0 ml-md-5" style="color;white">
        
        <?php if (!(@$_SESSION['visited'] || @$_SESSION['firstname'])): ?>
          <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link btn btn-primary" href="course.php">Proceed To Course</a>
          </li>
        <?php else: ?>
          <?php if (isset($_SESSION['firstname']) && $_SESSION['firstname']): ?>
            <div class="container-fluid p-3 d-flex justify-content-end text-light">
              <span class="d-inline-block greeting">Welcome <?php echo $_SESSION['firstname'].' '.$_SESSION['lastname'].' !'?></span> 
            </div>
          <?php endif ?>
         
        <?php endif ?>
        

      </ul>
    </div>
  </div>
</nav>
</header>