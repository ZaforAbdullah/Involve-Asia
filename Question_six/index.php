<!DOCTYPE html>
<html>
<body>

<?php
function swap(&$val1, &$val2) {
    $tmp = $val1;
    $val1 = $val2;
    $val2 = $tmp;
}


function sort_array(&$data) {
    $len = sizeof($data);
    $i = 0;
    
    while( $i < $len-1 ) {
        if($data[$i] > $data[$i+1] ) {
            swap($data[$i], $data[$i+1]);
        }
        $i++;
        
        foreach($data as $value){
            echo $value . " ";
        } 
        echo "</br>";
    }
    
    return $data;
}

$data = [9, 7, 5, 3, 0];

$n = sizeof($data) - 1;

for ( $i=1; $i<=$n; $i++ ) {
	sort_array($data);
    echo "<br>";
}

?>

</body>
</html>