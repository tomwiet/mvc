<!-- szablon pliku zawierającego spis kategorii -->
<?php include 'templates/header.html.php'; ?>
<?php include 'templates/nav.html.php'; ?>
<div id="content" class="w3-container">
<?php 
//echo '<pre>';
//var_dump($this->artData);
//echo '</pre>';
//exit;
 ?>
<h3 class="w3-panel w3-light-grey w3-text-grey">
<?php echo $this->artData['title']?></h3>
<div class="w3-tag w3-round w3-green w3-border w3-border-white w3-margin">
Autor: </div><?php echo $this->artData['title']?>
<div class="w3-tag w3-round w3-green w3-border w3-border-white w3-margin">
Kategoria:</div><?php echo $this->artData['name']?>
<div class="w3-tag w3-round w3-green w3-border w3-border-black w3-margin">
Data publikacji:</div><?php echo $this->artData['date_add']?>
</div>
<div class="w3-container">
<?php echo nl2br($this->artData['content'])?>
</div>

</div>
<? include 'templates/footer.html.php'; ?>