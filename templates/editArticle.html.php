<!-- szablon pliku zawierającego spis kategorii -->
<?php include 'templates/header.html.php'; ?>
<?php include 'templates/nav.html.php'; ?>
<div id="content" class="w3-container">
<?php 
//echo '<pre>';
//var_dump($this->art);
//echo '</pre>';
//exit;
 ?>
<h3 class="w3-panel w3-light-grey w3-text-grey">Edycja artykułu</h3>
<form class="w3-container" method="post" action="?task=articles&action=update&id=<?php echo $_GET['id']; ?>">
	<label class="w3-label">Tytuł</label>
	<input class="w3-input w3-border" type="text" name="name" value="<?php echo $this->art['title'];?>" />
	<label class="w3-label">Autor</label>
	<input class="w3-input w3-border" type="text" name="name" value="<?php echo $this->art['autor'];?>" />
	<label class="w3-label">Zawartość</label>
	<textarea class="w3-input w3-border" name="name" rows="20"><?php echo $this->art['content'];?></textarea>
</form>

</div>
<? include 'templates/footer.html.php'; ?>