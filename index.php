<html>

<body>
    <form method="post">
        <button type=submit name=submit class="btn">Grab it!</button>
    </form>
    <?php
    include_once 'db_sql.php';
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $sql = "SELECT * FROM pretendw2 WHERE done=0 LIMIT 5;";
    $result = mysqli_query($init, $sql);
    // $array_size = $result;
    // for ($i=0; $i<$array_size; $i++) {
        while ($row = $result->fetch_assoc()) {
            echo $row['name'] . " " . $row['id'] . "</br>";
            $init->$sql("UPDATE pretendw2 SET done=1;");
            if there are more records, do this again.
    
}
}
    

    ?>
</body>
<style>
    .btn {
        background-color: lime;
        color: black;
    }
</style>