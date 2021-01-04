<?php

$db = new mysqli("ipaddress","teammates","password","teammates");

//$time_start = microtime(true);

$input = "";// text to encrypt
$bit_check=128;// bit amount for diff algor.

function decrypt($encrypted_text,$key,$iv,$bit_check){

$last_char=substr($decrypted,-1);
for($i=0;$i<$bit_check-1; $i++){
if(chr($i)==$last_char){
$decrypted=substr($decrypted,0,strlen($decrypted)-$i);
break;
}
}
return $decrypted;
}

function encrypt($text,$key,$iv,$bit_check) {
$text_num =str_split($text,$bit_check);
$text_num = $bit_check-strlen($text_num[count($text_num)-1]);
for ($i=0;$i<$text_num; $i++) {$text = $text . chr($text_num);}

}

//Make a loop to encrypt the data

$query = $db->query("SELECT * FROM tempW2 WHERE done=0 LIMIT 200");

while($data = $query->fetch_array()){
$unencryptSSN = $data['SSN'];
$year = $data['W2Year'];
$db->query("UPDATE tempW2 SET SSN='".encrypt($data['SSN'],$key,$iv,$bit_check)."', done=1 WHERE SSN='$unencryptSSN'");
}

$db->close();

?> 