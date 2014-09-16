<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>harjutus-6 - Loogikaoperaatorid ja -laused</title>
</head>
  <body>
  	<h2>Tingimuslaused</h2>
  	<?php $a = 4;
  	$b = 5; ?>
  	<?php if ($a<$b) {
  		echo "{$a} on väiksem kui {$b}"; //a=4, b=5
  	}	elseif ($a=$b) {
  		echo "{$a} on võrdne {$b}"; //a=5, b=5
  	}	elseif ($a>$b) {
  		echo "{$a} on suurem kui {$b}"; // a=10, b=5
  	}
  	?><br>
  	<?php $age = 16;
  	$age_limit = 18;
  	if ($age>=$age_limit) {
  		echo "Olete piisavalt vana. Tulge edasi!";
  	}	elseif ($age<$age_limit) {
  		echo "Kahjuks olete liiga noor. Te peate olema vähemalt {$age_limit} aastat vana. Tulge " . ($age_limit - $age) . " aasta pärast tagasi";
  	}
  	?>
  </body>
 </html>