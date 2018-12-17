<?php
	$str = "$_SERVER[REQUEST_URI]";  //$_SERVER[HTTP_HOST]
	$last = explode("?",$str);
	$url = $last[1];

	$myfile = fopen("url.txt", "r") or die("Unable to open file!");
	// Output one line until end-of-file
	while(!feof($myfile)) {

		$test = fgets($myfile);
		$test2 = explode(" ",$test);
		if ($test2[0] == $url){
			//fclose($myfile);
			header( 'Location: '.$test2[1] ) ;
			echo "<script> window.location.replace('".$test2[1]."');</script>";
		}
	}
	fclose($myfile);
	echo "I'm sorry, that link seems to not work or you did not add one or you have headers and Javscript turned of or...";
?>
<html>
	<head>
		
	</head>
	<body>
		
		<?php
			$str = "$_SERVER[REQUEST_URI]";  //$_SERVER[HTTP_HOST]
       			$last = explode("?",$str);
       			$url = $last[1];
       			
			$myfile = fopen("url.txt", "r") or die("Unable to open file!");
			// Output one line until end-of-file
			while(!feof($myfile)) {
				
			  	$test = fgets($myfile);
			  	$test2 = explode(" ",$test);
			  	if ($test2[0] == $url){
			  		//fclose($myfile);
			  		header( 'Location: '.$test2[1] ) ;
			  		echo "<script> window.location.replace('".$test2[1]."');</script>";
			  	}
			}
			fclose($myfile);
			echo "I'm sorry, that link seems to not work or you did not add one or you have headers and Javscript turned of or...";
		?>
		
		
		
	</body>
</html>
