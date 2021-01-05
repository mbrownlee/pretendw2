<?php



$query = $db->query("SELECT * FROM tempW2 WHERE done=0 LIMIT 200");

while($data = $query->fetch_array()){
$unencryptSSN = $data['SSN'];
$year = $data['W2Year'];
$db->query("UPDATE tempW2 SET SSN='".encrypt($data['SSN'],$key,$iv,$bit_check)."', done=1 WHERE SSN='$unencryptSSN'");
}

$db->close();

?>