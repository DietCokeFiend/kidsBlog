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
					':date'=> mktime()
				)
			);
		}
	
		//header('Location: ' . $_SERVER['REQUEST_URI']);
		unset($_POST);
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
			echo '<div>' . $record['comment_screenname'] . ' says: <br />' .
					date('M j, Y', $record['comment_date_add']) . '<br />' .
					nl2br($record['comment_text']) . '</div><hr />';
		}
	}
?>	

<div>
	<form method="post" action="">
		Screen Name:
		<input type="text" name="comment_screenname" />
		<br />
		Comment:
		<br />
		<textarea name="comment_text"></textarea>
		<br>
		<input type="submit" value="Add Comment" />
	</form>
</div>
	
