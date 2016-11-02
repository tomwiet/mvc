<!-- szablon formularza edycji kategorii -->
<?php include 'templates/header.html.php'; ?>
<?php include 'templates/nav.html.php'; ?>

<div id="content" class="w3-container">
<h3 class="w3-panel w3-light-grey w3-text-grey">Edycja kategorii</h3>

<form class="w3-container" action="?task=categories&action=update" method="post">

	<label class="w3-label"><b>Nazwa kategorii</b></label>
	<input class="w3-input w3-border" type="text" name="name" value="<?php echo $_GET['name']?>" />
	<input class="w3-input w3-border" type="hidden" name="id" value="<?php echo $_GET['id']?>" />
	<input class="w3-btn w3-dark-grey w3-margin-top" type="submit" value="Zapisz" />

</form>
</div>
<?php include 'templates/footer.html.php'; ?>