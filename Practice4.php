<!DOCTYPE html>
<html>
<head>
    <title>Multiplication Table</title>
</head>
<body>
    <form method="post">
        <label for="number">Enter a number:</label>
        <input type="number" name="number" id="number" required>
        <button type="submit">Generate Table</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num = intval($_POST["number"]);

        echo "<h2>Multiplication Table for $num</h2>";
        echo "<table border='1'>";

        // Print header row
        echo "<tr><th>*</th>";
        for ($i = 1; $i <= $num; $i++) {
            echo "<th>$i</th>";
        }
        echo "</tr>";

        // Print the table rows
        for ($i = 1; $i <= $num; $i++) {
            echo "<tr>";
            echo "<th>$i</th>";  // Print the row index
            for ($j = 1; $j <= $num; $j++) {
                echo "<td>" . $i * $j . "</td>";
            }
            echo "</tr>";
        }

        echo "</table>";
    }
    ?>
</body>
</html>
