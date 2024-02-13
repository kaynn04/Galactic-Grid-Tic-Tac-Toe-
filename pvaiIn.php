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
        <h2>SELECT DIFFICULTY</h2>

        <div class="user-dropdown">
            <?php
                session_start();

                // Check if the user is logged in
                if (!isset($_SESSION["user"])) {
                    header("Location: login.php");
                    exit();
                }

                // Access user information including full name
                $fullName = isset($_SESSION["full_name"]) ? $_SESSION["full_name"] : '';
                ?>
                <p style="font-size: 20px;">Hello, <b style="color: rgb(25, 0, 255);font-size: 20px;"><?php echo htmlspecialchars($fullName); ?></b><span class="arrow" style="margin-left: 10px;">▼</span></p>
            <div class="user-dropdown-content">
                <a href="logout.php" class="logout-box">Log Out</a>
            </div>
        </div>

        <div class="play">
            <b>
                <button class="easy" onclick="location.href='gameAiIn.php?difficulty=easy'">Easy</button>
                <button class="diff" onclick="location.href='gameAiIn.php?difficulty=medium'">Difficult</button>
                <button class="expert" onclick="location.href='gameAiIn.php?difficulty=hard'">Expert</button>
            </b>
        </div>
        <button class="back" onclick="location.href='chooseIn.php'">Back</button>
    </main>

    <footer class="footer">
        <p>Made by: Barallas, Limpin, Manlagnit, Miki, Oclares</p>
    </footer>


    <script src="starbg.js" type="module"></script>
</body>
</html>
