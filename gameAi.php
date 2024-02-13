<!DOCTYPE html>

<html>
	<head>
	<meta charset="UTF-8">
	<title>Tic Tac Toe</title>
	
	<link rel="stylesheet" href="pvp_design.css">

	</head>

	<body>
		<canvas id="canvas"></canvas>
		<div class="score_board">
			<h2 class="gri" id="player_n">Player</h2>
			<h1 class="gri" id="vs">VS</h1>
			<h2 class="gri" id="ai_n">AI</h2>
			<h1 class="gri" id="player_score">0</h1>
			<h1 class="gri" id="vs2">|</h1>
			<h1 class="gri" id="ai_score">0</h1>
		</div>
		<table>
			<tr>
				<td class="cell" id="0"></td>
				<td class="cell" id="1"></td>
				<td class="cell" id="2"></td>
				<td class="cell" id="3"></td>
				<td class="cell" id="4"></td>
				<td class="cell" id="5"></td>
			</tr>
			<tr>
				<td class="cell" id="6"></td>
				<td class="cell" id="7"></td>
				<td class="cell" id="8"></td>
				<td class="cell" id="9"></td>
				<td class="cell" id="10"></td>
				<td class="cell" id="11"></td>
			</tr>
			<tr>
				<td class="cell" id="12"></td>
				<td class="cell" id="13"></td>
				<td class="cell" id="14"></td>
				<td class="cell" id="15"></td>
				<td class="cell" id="16"></td>
				<td class="cell" id="17"></td>
			</tr>
			<tr>
				<td class="cell" id="18"></td>
				<td class="cell" id="19"></td>
				<td class="cell" id="20"></td>
				<td class="cell" id="21"></td>
				<td class="cell" id="22"></td>
				<td class="cell" id="23"></td>
			</tr>
			<tr>
				<td class="cell" id="24"></td>
				<td class="cell" id="25"></td>
				<td class="cell" id="26"></td>
				<td class="cell" id="27"></td>
				<td class="cell" id="28"></td>
				<td class="cell" id="29"></td>
			</tr>
		</table>

		<div class="endgame">
			<div class="text"></div>
		</div>

		<button class="back" onclick="location.href='choose.php'">Back</button>

		<script src="baseAI.js"></script>
		<script src="starbg.js" type="module"></script>
	</body>
</html>
