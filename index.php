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
		<div class="button" id="ohbarak">oh barak</div><br><br>
		<label><input type="checkbox" id="nsfw" checked> Include NSFW</label>
	</div>

	<script>
	var ohbaraks = <?=json_encode(array_values(array_diff(scandir("audio"), array("..", "."))))?>;
	var all_ohbaraks = ohbaraks;
	
	document.getElementById("ohbarak").addEventListener("click", function() {
		var ohbarak = ohbaraks[Math.floor(Math.random()*ohbaraks.length)];
		new Audio("audio/" + ohbarak).play();
	});

	document.getElementById("nsfw").addEventListener("change", function() {
		if (this.checked)
			ohbaraks = all_ohbaraks;
		else
			ohbaraks = ohbaraks.filter(name => !name.includes("nsfw"));
	});
	</script>
</body>
</html>