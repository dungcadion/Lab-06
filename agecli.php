<?php
$bday = new DateTime('11.4.1950');
$today = new Datetime(date('m.d.y'));
$diff = $today->diff($bday);
printf(' Your age : %d years, %d month, %d days', $diff->y, $diff->m, $diff->d);
printf(" \n");
?>

