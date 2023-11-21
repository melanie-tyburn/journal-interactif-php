<?php
	if(isset($_POST['numcarte']) && $_POST['numcarte'] != ''){
		$page = $_POST['numcarte'];
		if ($page == '2'){
			header('Location: pages-carte/carte2.php');
		}
		if ($page == '3'){
			header('Location: pages-carte/carte3.php');
		}
		if ($page == '4'){
			header('Location: pages-carte/carte4.php');
		}
		if ($page == '5'){
			header('Location: pages-carte/carte5.php');
		}
		if ($page == '6'){
			header('Location: pages-carte/carte6.php');
		}
		if ($page == '7'){
			header('Location: pages-carte/carte7.php');
		}
		if ($page == '8'){
			header('Location: pages-carte/carte8.php');
		}
		if ($page == '9'){
			header('Location: pages-carte/carte9.php');
		}
		if ($page == '10'){
			header('Location: pages-carte/carte10.php');
		}
		if ($page == '11'){
			header('Location: pages-carte/carte11.php');
		}

	}	

?>