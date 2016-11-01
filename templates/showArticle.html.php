<!-- szablon pliku zawierającego artykuł -->
<?php include 'templates/header.html.php'; ?>
<?php include 'templates/nav.html.php'; ?>
<div id="content" class="w3-container">
<h3 class="w3-panel w3-light-grey w3-text-grey"><?php echo $this->artData['title']; ?></h3>
<p>
<span class="w3-tag w3-blue-grey w3-margin">Autor:</span><?php echo $this->artData['autor']?>
<span class="w3-tag w3-blue-grey w3-margin">Kategoria:</span> <?php echo $this->artData['name']?>
<span class="w3-tag w3-blue-grey w3-margin">Data publikacji:</span> <?php echo $this->artData['date_add']?>
</p>
<div>
<?php echo nl2br($this->artData['content']); ?>
<div>
</div>
<? include 'templates/footer.html.php'; ?>