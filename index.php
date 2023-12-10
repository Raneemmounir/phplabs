<?php
 
echo "Welcome to PHP<br>";
print("Welcome to PHP<br>");
 
$x = 5;
$y = 'Welcome ';
$z = true;

echo "$y<br>$x<br>$z<br>";
 
echo "Type of x: " . gettype($x) . "<br>";
echo "Type of y: " . gettype($y) . "<br>";
echo "Type of z: " . gettype($z) . "<br>";
  
echo "Numbers using for loop: ";
for ($i = 0; $i <= 15; $i++) {
    echo "$i ";
}
echo "<br>";
echo "Numbers using while loop: ";
$i = 0;
while ($i <= 15) {
    echo "$i ";
    $i++;
}
echo "<br>";
 
define("CON1", "ITI");
const CON2 = "ITI";
 
$m = 30;
$n = 25;
$result = $m + $n;

if ($result > 50) {
    echo "Accepted<br>";
} else {
    echo "Not accepted<br>";
}
 
function anyToString(&$val)
{
    settype($val, "string");
}

$intVar = 55;
echo gettype($intVar)."<br>";
anyToString($intVar)."<br>";
echo gettype($intVar)."<br>";
 
echo "<table border='1'>
        <tr>
            <td>salary of mr a is </td>
            <td>1000$</td>
        </tr>
        <tr>
            <td>salary of mr b is </td>
            <td>1200$</td>
        </tr>
        <tr>
            <td>salary of mr c is </td>
            <td>1400$</td>
        </tr>
            </table>";

?>
