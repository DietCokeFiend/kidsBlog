<?php

	try
	{
		$dbconn = new PDO(
					'mysql:host=quinyung.com;dbname=tempdb',
					'tempuser', 'phpkids!' );
	}
	catch(PDOException $e)
	{
		echo 'Connection error: ' . $e->getMessage();
	}
	
	if(isset($_POST['comment_text']))
	{
	}
	
	header('Location: ' . $_SERVER['REQUEST_URI']);
}
?>