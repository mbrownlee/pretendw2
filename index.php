<html>

<body>
    <form method="post">
        <button type=submit name=submit class="btn">Grab it!</button>
    </form>
    <?php
    include_once 'db_sql.php';
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        do {
            $sql = "SELECT * FROM pretendw2 WHERE SSN != 0 LIMIT 5";
            // $result = mysqli_query($init, $sql);
            $num_rows = mysqli_num_rows($result = mysqli_query($init, $sql));
            if ($num_rows > 0) {
                while ($row = $result->fetch_array()) {
                    $unencryptSSN = $row['SSN'];
                    // $year = $data['W2Year'];
                    echo $row['name'] . $row['SSN'] . " " . "hi Mac Daddy" . "</br>";
                    $query = "UPDATE pretendw2 SET SSN=0 WHERE SSN='$unencryptSSN'";
                    $result2 = mysqli_query($init, $query);
                }
                echo $num_rows;
            }
        } while ($num_rows > 0);
    }

    ?>
</body>
<style>
    .btn {
        background-color: lime;
        color: black;
    }
</style>