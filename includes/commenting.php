<?php

	
	try
	{
		/*$dbconn = new PDO(
					'mysql:host=quinyung.com;dbname=tempdb',
					'tempuser', 'phpkids!' );*/
		$dbconn = new PDO(
					'mysql:host=localhost;dbname=phptest',
					'quin','assmaster1');
	}
	catch(PDOException $e)
	{
		echo 'Connection error: ' . $e->getMessage();
	}
	
	if(isset($_POST['comment_text']))
	{
		if($_POST['comment_text'] and $_POST['comment_screenname'])
		{
			$query = 'INSERT INTO comment 
						(comment_screenname,
						comment_text,
						comment_url,
						comment_date_add)
						VALUES (:screenname,:text,:url,:date)';
			
			$stmt = $dbconn->prepare($query);
			$result = $stmt->execute(
				array(
					':screenname'=>$_POST['comment_screenname'],
					':text'=>$_POST['comment_text'],
					':url'=>$_SERVER['REQUEST_URI'],
					':date'=> time()
				)
			);
		}
	
		header('Location: ' . $_SERVER['REQUEST_URI']);
	}
	
	function comment_list()
	{
		global $dbconn;
		
		$query = 'SELECT comment_screenname,
						comment_text,
						comment_date_add
						FROM comment
						WHERE comment_url = "' . $_SERVER['REQUEST_URI'] . '"
						ORDER BY comment_date_add';
		$result = $dbconn->query($query);
		
		foreach($result as $record)
		{
			echo '<aside class="comment">' .
					'<div>'. $record['comment_screenname'] . ' says: </div>' .
					'<div>' . date('M j, Y', $record['comment_date_add']) . '</div>' .
					'<div>' . nl2br($record['comment_text']) . '</div>' 
				. '</aside>';
		}
	}
?>	

