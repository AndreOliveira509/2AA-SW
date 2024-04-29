<?php 

$car = array("Volvo", "BMW", "Toyota ");
echo "<br>";
echo ("##################################");
echo "<br>";
echo count($car);
echo "<br>";
echo ("##################################");
echo "<br>";
$myArr = array("Volvo", 15, ["apples", "bananas"]);
echo "<br>";
echo ("##################################");
echo "<br>";
echo count($myArr);
echo "<br>";
echo ("##################################");
echo "<br>";
$car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
var_dump($car);
echo "<br>";
echo ("##################################");
echo "<br>";
$car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964, "Professor"=>"Willan");
echo $car["model"];
echo "<br>";
echo ("##################################");
echo "<br>";
foreach ($car as $x => $y){
    echo "$x: $y <br>";
}
?>