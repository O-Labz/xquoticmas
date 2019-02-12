<?php
    $day = $_POST['day'];
	$month = $_POST['month'];
	$year = $_POST['year'];
	$current= date("Y");

	if($year == "year" || $month == "month" || $day == "day"){
		header('Location: http://www.xquoticmas.com/');
		echo '<div class="alert alert-danger">';
  		echo '<strong>Danger!</strong> Indicates a dangerous or potentially negative action.';
		echo '</div>';
	}elseif (($current - $year) >= 18) {
		# code...
		header('Location: http://www.xquoticmas.com/Xquoticmas/src/pages/index.php?page=home');
	}else{
		header('Location: http://www.xquoticmas.com/');
	}

?>