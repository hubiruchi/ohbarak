<!doctype html>
<html>
<head>
	<title>Oh, barak!</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="styles.css">
</head>
<body>
	<div class="center">
		<div class="button" id="ohbarak">oh barak</div>
	</div>

	<script>
	var ohbaraks = <?php json_dumps(array_diff(scandir("audio"), array("..", "."))); ?>;
	document.getElementById("ohbarak").addEventListener("click", function() {
		var ohbarak = ohbaraks[Math.floor(Math.random()*ohbaraks.length)];
		new Audio("audio/" + ohbarak).play();
	});
	</script>
</body>
</html>