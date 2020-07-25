<!DOCTYPE html>
<html>
<body>

<?php

for ($x = 1; $x <= 180; $x++) {
	
	if ($x % 5 == 0 and $x % 3 == 0) {
		echo "Involve Asia";
		echo "<br>";
	} elseif ($x % 5 == 0) {
		echo "Asia";
		echo "<br>";
	} elseif ($x % 3 == 0) {
		echo "Involve";
		echo "<br>";
	} else {
		echo $x;
		echo "<br>";
	}
}

?>

</body>
</html>