<html>

<body>
    <form method="post">
        <button type=submit name=submit class="btn">Grab it!</button>
    </form>
    <?php
    include_once 'db_sql.php';
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // $sql = "SELECT * FROM pretendw2 WHERE done=0 LIMIT 5;";
    // $result = mysqli_query($init, $sql);
    // $array_size = $result;
    // for ($i=0; $i<$array_size; $i++) {
        // while ($row = $result->fetch_assoc()) {
        //     echo $row['name'] . " " . $row['id'] . "</br>";
        //     $init->$sql("UPDATE pretendw2 SET done=1;");
        //    $query1 = Select crap
        //    if $query1 returns crap then
        //    do {$query2 = select 200 records
        //     while(loop $query2)} {
        //         encrypt each line
        //     } $query3 checks for more crap and
        //     while go through again if $query3 returns stuff
        // $query = $db->query(
        //     do {
        //     $sql = "SELECT name, id FROM pretendw2 LIMIT 5;";
        //     $result = mysqli_query($init, $sql);
        //     // $data = $result->fetch_array();
            
        //     while ($data = $result->fetch_array()) {
        //         echo $data['name'] . " " . $data['id'] . "</br>";
        //     }
        // } while ($data !== null);
        
        // do {
        //     $sql = "SELECT name, id, done FROM pretendw2 WHERE done = 0 LIMIT 5;";
        //     $result = mysqli_query($init, $sql);
        //     $num_rows = mysqli_num_rows($result);
        //     if ($num_rows > 0){
        //         while ($row=$result -> fetch_array()) {
        //             $finished = $row['id'];
        //             $sql = "UPDATE pretendw2 SET done = 1 WHERE id = $finished;";
        //             echo $row['name'] . "</br>";
        //         } 
        //     } } while ($num_rows > 0);
        // do{
            //     $query = $db->query("SELECT * FROM tempW2 WHERE done=0 LIMIT 200");
            //     $result = mysqli_query($init, $sql);
            //     $num_rows = mysqli_num_rows($result);
            //     if ($num_rows > 0){
                //         while($row = $result->fetch_array()){
                    //         $unencryptSSN = $data['SSN'];
                    //         $year = $data['W2Year'];
                    //         $db->query("UPDATE tempW2 SET SSN='".encrypt($data['SSN'],$key,$iv,$bit_check)."', done=1 WHERE SSN='$unencryptSSN'");
                    //     } } } while ($num_rows > 0);
                    
                    do{
                        $sql = "SELECT * FROM pretendw2 WHERE SSN != 0 LIMIT 5";
                        // $result = mysqli_query($init, $sql);
                        $num_rows = mysqli_num_rows($result = mysqli_query($init, $sql));
                        if ($num_rows > 0){
                            while($row = $result->fetch_array()){
                                $unencryptSSN = $row['SSN'];
                                // $year = $data['W2Year'];
                                echo $row['name'] . $row['SSN'] . " " . "hi Mac Daddy" . "</br>";
                                $query = "UPDATE pretendw2 SET SSN=0 WHERE SSN='$unencryptSSN'";
                                $result2 = mysqli_query($init, $query);
                                
                            } echo $num_rows; } } while ($num_rows > 0);
                        }

    ?>
</body>
<style>
    .btn {
        background-color: lime;
        color: black;
    }
</style>