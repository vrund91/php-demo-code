<?php
$string="php is a good language";
$exp=preg_match_all("/PHP/i",$string,$a);
if($exp) echo "match found";
else echo "match not found";
echo "<pre>";
print_r($a);
echo "<pre>";
?>