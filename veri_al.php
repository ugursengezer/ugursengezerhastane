<?php
require_once('config.php');




$sql = "SELECT id, ad, soyad,tcno, email FROM uyeler";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " / Ad - Soyad: " . $row["ad"]. " " . $row["soyad"]." /"."TC: " . $row["tcno"] ." / "."E-Mail: " . $row["email"] . "<br>";
    }
} else {
    echo "0 results";
}




$conn->close();
?> 