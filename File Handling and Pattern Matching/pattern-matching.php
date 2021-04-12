<?php
preg_match('/(real)(madrid)(top)/', 'realmadridtop', $matches, PREG_OFFSET_CAPTURE);

echo "<br>";
foreach ($matches as $index => $match) {
	echo "$index match ";
	echo "<br>";
	echo "'$match[0]' matched at $match[1] index.";
	echo "<br><br>";
}
?>