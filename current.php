<?php



//Make a loop to encrypt the data
// BEFORE
$query = $db->query("SELECT * FROM tempW2 WHERE done=0 LIMIT 200");

while($data = $query->fetch_array()){
$unencryptSSN = $data['SSN'];
$year = $data['W2Year'];
$db->query("UPDATE tempW2 SET SSN='".encrypt($data['SSN'],$key,$iv,$bit_check)."', done=1 WHERE SSN='$unencryptSSN'");
}
// AFTER
do{
    $sql = "SELECT * FROM tempW2 WHERE done=0 LIMIT 200";
    $num_rows = mysqli_num_rows($result = mysqli_query($db, $sql));
    if ($num_rows > 0){
        while($row = $result->fetch_array()){
            $unencryptSSN = $row['SSN'];
            $year = $row['W2Year'];
            $query = "UPDATE tempW2 SET SSN='".encrypt($row['SSN'],$key,$iv,$bit_check)."', done=1 WHERE SSN='$unencryptSSN'";
            $result2 = mysqli_query($db, $query);
        } } } while ($num_rows > 0);

$db->close();

?>