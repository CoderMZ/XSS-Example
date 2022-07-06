<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Meine Seite</title>
    <link rel="stylesheet" href="public/css/app.css">
</head>
<body>

	<div class="guestbook-list">
		<?php foreach ($entries as $entry) {?>
			<div class="guestbook-entry">
				<h3><?php echo htmlspecialchars($entry['name']) ?></h3>
				<div><?php echo htmlspecialchars($entry['message']) ?></div>
			</div>
		<?php } ?>
	</div>

	<form action="add" method="POST">

		<h4>Neuen Eintrag erstellen</h4>
		
		<div class="form-field">
			<label for="name">Name</label>
			<input type="text" id="name" name="name">
		</div>
		<div class="form-field">
			<label for="message">Nachricht</label>
			<textarea type="text" id="message" name="message"></textarea>
		</div>

		<input type="submit" value="Speichern">

	</form>


</body>
</html>