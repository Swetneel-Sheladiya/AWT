<?php
echo "the original array is :<br>";
$a = array("name5"=>"Neel","name4"=>"Swetneel","name3"=>"Devanshi","name2"=>"Jaimil","name1"=>"Jeel");
echo "<pre>";
print_r($a);
echo "After sorting.....<br>";
ksort($a);
echo "<pre>";
print_r($a);
?>