<?php
function fetchDataFromDatabase() {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "moviedb";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM movie ORDER BY price ASC LIMIT 3";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table>";
        echo "<tr><th>Nama Film</th><th>Stock DVD</th><th>Harga</th></tr>";
        

        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["name"]. "</td>";
            echo "<td>" . $row["stock_dvd"]. "</td>";
            echo "<td>" . $row["price"]. "</td>";
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "Tidak ada data.";
    }

    $conn->close();
}
fetchDataFromDatabase();
?>
