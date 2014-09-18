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
    <?php $g = 3;
    $h = 3;
    $i = 4;
    $j = 5;

    if (($g==$h) && ($i>$j)) {
      echo "Kui a on väiksem kui b ning b on suurem kui c, siis käivitatakse see koodiplokk.";
      // üks komponentlause oli tõene, kuid teine oli väär. Kood ei käivitunud, sest mõlemad pidid õiged olema - JA.
    } 
    echo "<br>";
    if (($g==$h) || ($i>$j)) {
      echo "Kui väheamlt üks komponentlausetest on tõene, siis käivitatakse see koodiplokk.";
      //Üks komponentlause on tõene, kood käivitus
    }
    ?><br>
    <?php
    if (!isset($nothing)) {
      echo "Kosmos kutsub!";
    }
    ?><br>

    <h3>Switch</h3>
    <?php $current_language = 'fi';
    switch($current_language) {
      case 'et':
    echo "Tere! Kuidas sul läheb?";
      break;
      case 'ru':
    echo "Здравствуйте! Как вы делаете?";
      break;  
      case 'fi':
    echo "Hei! Miten menee?";
      break;
    }
    ?>


  </body>
 </html>