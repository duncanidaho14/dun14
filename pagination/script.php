<?php 

	$perPage = 5;

	$req = $db->query('SELECT COUNT(*) AS total FROM articles');
	$result = $req->fetch();
	$total = $result['total'];

	$nbPage = ceil($total/$perPage);// fonction ceil arrondie au supérieur
	
	if (isset($_GET['p']) && !empty($_GET['p']) && ctype_digit($_GET['p']) == 1) {
		if($_GET['p'] > $nbPage){
			$current = $nbPage;
		} else{
			$current = $_GET['p'];
		}
	} else{
		$current = 1;
	}


	$firstOfPage = ($current-1) * $perPage;

	$reqProducts = $db->query("SELECT * FROM articles ORDER BY id ASC LIMIT $firstOfPage, $perPage");