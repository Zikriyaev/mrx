<?php
//include auth.php file on all secure pages
include("auth.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Welcome Home</title>
<link rel="stylesheet" href="style/calc.css.css">
</head>
<p>Welcome <?php echo $_SESSION['username']; ?>!</p>
<script src="js/calc.js.js"></script>
<body class="contai">

<h1>Алгоритмы умножения больших чисел</h1>
<p>Алгоритм представляет собой набор упорядоченных правил, где вы указываете последовательность 
операций и шагов, необходимых для решения любой проблемы. После этого начальное состояние и вход и применение 
последовательных шагов будет достигнуто в состоянии finally с этим мы найдем решение.
Алгоритмы-это способы решения проблем, важно уточнить, что они применимы не только к интеллектуальной 
деятельности, но и ко всем видам связанных с этим проблем в повседневной жизни, например, к руководствам 
пользователя, которые показывают алгоритмы использования устройства. В математике мы можем ссылаться на некоторые алгоритмы, такие 
как метод Гаусса для решения линейных задач уравнений или алгоритм Евклида, чтобы получить наибольший общий делитель, среди других.</p>

    
</body>
<body>
<div>
		<header id="screen"></header>
		<table>
		
      			<tbody>
				<tr class="orange">
					<td onclick="clearScr()">AC</td>
          				<td onclick="sendNum('*0.01')">%</td>
          				<td onclick="sendNum('/')">/</td>
				</tr>
				<tr class="orange">
					<td onclick="sendNum('+')">+</td>
					<td onclick="sendNum('-')">-</td>
					<td onclick="sendNum('*')">x</td>
				</tr>
				<tr>
			    		<td onclick="sendNum('7')">7</td>
			    		<td onclick="sendNum('8')">8</td>
			    		<td onclick="sendNum('9')">9</td>
				</tr>
				<tr>
					<td onclick="sendNum('4')">4</td>
					<td onclick="sendNum('5')">5</td>
					<td onclick="sendNum('6')">6</td>
				</tr>
				<tr>
      					<td onclick="sendNum('1')">1</td>
					<td onclick="sendNum('2')">2</td>
					<td onclick="sendNum('3')">3</td>
				</tr>
				<tr>
      					<td onclick="sendNum('.')">.</td>
					<td onclick="sendNum('0')">0</td>
					<td onclick="equalTo()">=</td>
				</tr>	
			</tbody>
		</table>
	</div>
    </div>
</body>
<footer class="leba">
<a href="logout.php">Logout</a>
</footer>

</html>