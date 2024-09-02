<?php
$string="php is good language123";
// $exp=preg_match_all("/PHP/i",$string,$a);
// $exp=preg_match_all("/PHP|good|is|language/i",$string,$a);
// $exp=preg_match_all("/[^a-p]/i",$string,$a);
// $exp=preg_match_all("/[A-Da-d]/",$string,$a);
// $exp=preg_match_all("/[0-9]/",$string,$a);
 $exp=preg_match_all("/[a-z0-9]/",$string,$a);
if($exp) echo "match found";
else echo "match found";
echo "<pre>";
print_r($a);
echo "</pre>";
?>
