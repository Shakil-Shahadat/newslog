<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="src/style.css">
	<title>News Log</title>
</head>
<body>

<main class="container">
	<div class="add-news">
		<input type="text" class="news-title form-control" placeholder="Title">
		<input type="text" class="news-link form-control" placeholder="Link">
		<textarea class="news-comment form-control" rows="3" placeholder="Comment"></textarea>
		<input type="text" class="news-tag form-control" placeholder="Tag(s)">
		<button class="btn btn-primary" onclick="addNews()">Add</button>
	</div>
</main>

<script src="src/script.js"></script>
</body>
</html>
