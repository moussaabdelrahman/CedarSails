<html>
	<body>
		<?php
			ini_set('display_errors', 1);
			ini_set('display_startup_errors', 1);
			error_reporting(E_ALL);
			
			$to = "a.moussa@mediaengagers.com";
			$subject = "My subject";
			$txt = "Hello!";
			$headers = "From: polat.baron@live.com" . "\r\n" .
			"CC: baron.polat@live.com";

			mail($to,$subject,$txt,$headers);
		?>
	</body>
</html>