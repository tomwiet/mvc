<!-- Szablon formularza dodawania kategorii -->
<?php include 'templates/header.html.php'; ?>
<?php include 'templates/nav.html.php'; ?>

<div id="content" class="w3-container">
<h3 class="w3-panel w3-light-grey w3-text-grey">Dodaj kategorię</h3>

<form class="w3-container" action="?task=categories&action=insert" method="post">
	<label class="w3-label w3-text-grey"><b>Nazwa kategorii</b></label> 
	<input class="w3-input w3-border" type="text" name="name">
	<a class="w3-btn w3-dark-grey w3-margin-top" href="?task=categories&action=index">Anuluj</a>
	<input class="w3-btn w3-dark-grey w3-margin-top" type="submit" value="Dodaj">
</form>
</div>
<?php include 'templates/footer.html.php'; ?>
