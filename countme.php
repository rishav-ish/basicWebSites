<!DOCTYPE html>
<html>
<head>
	<title>Your Word Count</title>
	<meta name = "viewport" content = "width=device-width,initial-scale=1.0">
	<link type = "text/css" rel = "stylesheet" href = "countme.css">
	
</head>

<body>
	
	<div id = "container">
		<h2><?php echo str_word_count($_POST["word"]); ?> words</h2>
	</div>
</body>
</html>