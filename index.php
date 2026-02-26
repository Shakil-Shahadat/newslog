<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>News Log</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
	<link rel="stylesheet" href="src/style.css">
	<link rel="icon" href="src/award.svg" type="image/svg+xml">
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
