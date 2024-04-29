<?php 

$z = date("H") - 3;

echo "<br>";
echo ("São " . $z . "hrs");
echo "<br>";
echo "###############################################################";
echo "<br>";
if($z < 12){
    echo "bom dia";
} 
else if($z > 12 and $z < 18){
    echo "boa tarde";
}
 else {
    echo "boa noite";
}
echo "<br>";
echo "###############################################################";
echo "<br>";
?>