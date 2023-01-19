<div class="product-list">
    <?php
        include 'db.php'; // Include the database connection file

        $sql = "SELECT * FROM products1";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            echo "<table>";
            echo "<thead>";
            echo "<tr>";
            echo "<th>Added by</th>";
            echo "<th>Quantity</th>";
            echo "<th>Price</th>";
            echo "</tr>";
            echo "</thead>";
            echo "<tbody>";
            // Output data of each row
            while($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
           
           
                echo "<td>" . $row["added_by"] . "</td>";
                echo "<td>" . $row["quantity"] . "</td>";
                echo "<td>" . $row["price"] . "</td>";
                echo "</tr>";
            }
            echo "</tbody>";
            echo "</table>";
        } else {
            echo "0 results";
        }
        mysqli_close($conn);
    ?>
</div>