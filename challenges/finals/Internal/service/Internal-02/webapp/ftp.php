<?php
	$file = $_GET["file"];

	if($file!==null) {

		if (substr($file, -4) == '.txt') {
			
			$path = "/var/www/html/ftp/";
			//chech for possibilities of null bytes
			$pos1 = strpos($file, "\\0");
			$pos2 = strpos($file, chr(0));
			$pos3 = strpos($file, "%0");
			if ($pos1 !== false) {
				$path .= substr($file, 0, $pos1);
			} else if ($pos2 !== false) {
				$path .= substr($file, 0, $pos2);
			} else if ($pos3 !== false) {
				$path .= substr($file, 0, $pos3);
			} else {
				$path .= $file;
			}

			include($path);

		} else {
	?>
		<h1>ERROR!: Only .txt files are allowed</h1>
	<?php
		}
	} else {
?>
<html>
<h1>Directory Listing of /ftp</h1>
<a href="ftp.php?file=Binomial_Theorem_Practice_Questions.pdf" target="_blank">Binomial_Theorem_Practice_Questions.pdf</a>
<a href="ftp.php?file=Darude-Sandstorm.mp4" target="_blank">Darude-Sandstorm.mp4</a>
<a href="ftp.php?file=ehd_intro.pptx" target="_blank">ehd_intro.pptx</a>
<a href="ftp.php?file=ehd_pract01a_protocols.doc" target="_blank">ehd_pract01a_protocols.doc</a>
<a href="ftp.php?file=password.bck" target="_blank">password.bck</a>
<a href="ftp.php?file=timetable.PNG" target="_blank">timetable.PNG</a>
<a href="ftp.php?file=tnc.txt" target="_blank">tnc.txt</a>
<a href="ftp.php?file=users" target="_blank">users</a>
<a href="ftp.php?file=welcome.info" target="_blank">welcome.info</a>
</html>
<?php
}
?>