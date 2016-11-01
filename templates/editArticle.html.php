<!-- szablon edycji artykułu -->
<?php include 'templates/header.html.php'; ?>
<?php include 'templates/nav.html.php'; ?>
<div id="content" class="w3-container">
<h3 class="w3-panel w3-light-grey w3-text-grey">Edycja artykułu</h3>
<form class="w3-container" action="?task=articles&action=update" method="post">

	<input class="w3-input w3-border" type="hidden" name="id" value="<?php echo $this->artData['id']?>" >
	<label class="w3-label"><b>Tytuł</b></label>
	<input class="w3-input w3-border" type="text" name="title" value="<?php echo $this->artData['title']?>" >
	<label class="w3-label"><b>Autor</b></label>
	<input class="w3-input w3-border" type="text" name="autor" value="<?php echo $this->artData['autor']?>" >
	<label class="w3-label"><b>Kategoria</b></label>
	<select class="w3-select" name="category">
	<?php foreach($this->catsData as $cats) {?>
		
	<option value="<?php echo $cats['id'];?>" 
					<?php if($this->artData['name']==$cats['name']) echo ' selected '; ?>>
					<?php echo $cats['name']; ?></option>
		
	<?php };?>
	
	</select>
	<label class="w3-label"><b>Data utworzenia</b></label>
	<input class="w3-input w3-border" type="text" name="date_add" value="<?php echo $this->artData['date_add']?>" >
	<label class="w3-label"><b>Treść</b></label>
	<textarea class="w3-input w3-border" rows="15" name="content" ><?php echo html_entity_decode($this->artData['content'])?></textarea>
	<a  class= "w3-btn w3-dark-grey w3-margin-top" href="?task=articles&action=index">Anuluj</a>
	<input class="w3-btn w3-dark-grey w3-margin-top" type="submit" value="Zapisz" />

</form>

</div>
<? include 'templates/footer.html.php'; ?>