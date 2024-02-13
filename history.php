<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tic-Tac-Toe Match History</title>
    <link rel="stylesheet" href="design.css">
</head>
<body>

<h1 class="history">Match History</h1>
<canvas id="canvas"></canvas>
<table>
    <thead>
        <tr>
            <th>Date</th>
            <th>Opponent</th>
            <th>Result</th>
        </tr>
    </thead>
    <tbody>
        <?php
        // Replace this with actual database connection and query
        $db_host = "localhost";
        $db_user = "root";
        $db_password = "";
        $db_name = "login_register";
        
        $conn = new mysqli($db_host, $db_user, $db_password, $db_name);
        
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        
        $user_id = 1; // Replace with the actual user ID
        
        // Fetch match history data from the database
        $query = "SELECT match_id, date, opponent, result FROM match_history WHERE user_id = $user_id";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr class='details'>";
            echo "<td>" . $row['date'] . "</td>";
            echo "<td>" . $row['opponent'] . "</td>";
            echo "<td>" . $row['result'] . "</td>";
            echo "</tr>";
        }
    } else {
        echo "<tr class='details'><td colspan='3'>No match history available</td></tr>";
    }    
        $conn->close();
        ?>
        <button class="back_history" onclick="location.href='indexIn.php'">Back</button>
    </tbody>
</table>

<script src="starbg.js" type="module"></script>
</body>
</html>
