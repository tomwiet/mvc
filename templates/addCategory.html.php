<?php include 'templates/header.html.php'; ?></pre>

<h3 class="w3-panel w3-light-grey">Dodaj kategorię</h3>

<form class="w3-container" action="?task=categories&action=insert" method="post">
	<label class="w3-label"><b>Nazwa kategorii</b></label> 
	<input class="w3-input w3-border" type="text" name="name">
	<input class="w3-btn w3-dark-grey w3-margin-top" type="submit" value="Dodaj">
</form>

<?php include 'templates/footer.html.php'; ?>