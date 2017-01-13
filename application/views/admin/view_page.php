<?php
	header('Cache-Control: no-cache, no-store, must-revalidate'); // HTTP 1.1.		
	header('Pragma: no-cache'); // HTTP 1.0.
	header('Expires: 0'); // Proxies
?>
<!DOCTYPE html>

<?php 

	require_once('header.php');
	require_once('sidebar.php');
	require_once($load_page.'.php');
	require_once('footer.php');


?>


