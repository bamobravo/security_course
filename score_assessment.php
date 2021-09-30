<?php 
session_start();
if (!(@$_SESSION['view_lessons'] && @$_SESSION['firstname'])) {
  header("Location:index.php");exit;
}

if ($_SERVER['REQUEST_METHOD']=='POST') {
	$questionSize = 15;
	$maxScore = 20;
	$score = 0;
	$correctAnswers = array(3,4,4,1,2,2,3,3,1,2,2,2,3,2,3);
	for ($i=0; $i < $questionSize; $i++) { 
		$field = "question".($i+1);
		$response = $_POST[$field];
		if ($response == $correctAnswers[$i]) {
			$score+= $i < $maxScore -1 && $i > 8 && $i!==12 ?2:1;
		}

	}
	// update the database for the score
	$percent = number_format(($score/$maxScore) * 100,2);
	require_once "db.php";
	$query = "update student set score=? where email=?";
	$statement = $con->prepare($query);
	$statement->bind_param('ds',$percent,$_SESSION['email']);
	if(!$statement->execute()){
		echo "An error occured, please go back and try again";exit;
	}
	$con->close();
	$_SESSION['score']=$score;
	$_SESSION['total_score']= $maxScore;
}

include 'includes/header.php' ;
?>
<main class="container-fluid home-container p-5">
	<section class="bg-white show w-50 mx-auto">
		<?php if ($_SESSION['score'] < 10): ?>
			<div class="alert alert-danger pt-4">
				Hi <b><?=@$_SESSION['firstname']?></b>, you scored below the average score <br> <br>
				Your total score is <?=$_SESSION['score']?> of <?=$_SESSION['total_score']?>
			</div>
			
		<?php else: ?>
			<div class="alert alert-success p-4">
				Hi <b><?=@$_SESSION['firstname']?></b>, you scored above the average score <br> <br>
				Your total score is <?=@$_SESSION['score']?> of <?=@$_SESSION['total_score']?>
			</div>
		<?php endif ?>
		
	</section>

</main>

 <?php include 'includes/footer.php' ?>



