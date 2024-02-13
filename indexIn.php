<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="design.css">
</head>
<body>
    <canvas id="canvas"></canvas>
    <main class="menu">
        <h2>GALACTIC GRID</h2>

        <div class="user-dropdown">
            <?php
                if (isset($_SESSION['fullname'])) {
                    $fullName = $_SESSION['fullname'];
                    echo '<p>Hello, <b style="color: rgb(25, 0, 255);">' . $fullName . '!</b></p>';
                }
            ?>
        </div>

        <div class="play">
            <button class="start" onclick="location.href='chooseIn.php'"><b>Start</b></button>
            <button class="history" onclick="location.href='history.php'"><b>History</b></button>
        </div>
        <button class="logout" onclick="location.href='logout.php'">Log Out</button>
    </main>

    <footer class="footer">
        <p>Made by: Barallas, Limpin, Manlagnit, Miki, Oclares</p>
    </footer>
    <script src="starbg.js" type="module"></script>
</body>
</html>