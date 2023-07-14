<?php
echo "The original array is :<br>";
$a = array("name1"=>"neel","name3"=>"swetneel","name2"=>"devanshi","name5"=>"rajvi","name4"=>"krutik","name6"=>"jaimil");
echo"<pre>";
print_r($a);
echo "After sorting Arary..<br>";
ksort($a);
echo "<pre>";
print_r($a);
?>
