<?php

require_once 'phpmysql.php';

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM ENTRIES";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $tul1 = "<table id='customers'><tbody><tr><th>Id</th><th>Id</th><th>User_id</th><th>Date</th><th>Type</th><th>Category</th><th>Time</th><th>Notes</th><th>Tags</th></tr>";
    // output data of each row
    $tul2;
    while($row = $result->fetch_assoc()) {
        $tul2.="<tr><td>".$row["entry_id"]."</td><td>".$row["user_id"]."</td><td>".$row["date"]."</td><td>".$row["category"]."</td><td>".$row["spent_time"]."</td><td>".$row["notes"]."</td><td>".$row["tags"]."</td></tr>";
    }
    $tul3 = "</tbody></table>";
    $tulemus = $tul1.$tul2.$tul3;
    echo $tulemus;
} else {
    echo "0 results";
}

$conn->close();
    
?>
