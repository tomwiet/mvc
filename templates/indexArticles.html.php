<!-- szablon pliku zawierającego spis artykułów -->
<?php 
//echo '<pre>';
//var_dump($this->artsData);
//echo '</pre>';
//exit;
?>
<?php include 'templates/header.html.php'; ?>
<?php include 'templates/nav.html.php'; ?>
<div id="content" class="w3-container">
<h3 class="w3-panel w3-light-grey w3-text-grey">Lista artykułów</h3>
<table class="w3-table-all w3-hoverable">
<thead>
<tr class="w3-light-grey">
<th>ID</th>
<th>Tytuł</th>
<th>Autor</th>
<th>Kategoria</th>
<th>Data publikacji</th>
<th>Akcja</th>
</tr>
</thead>
<tbody class="w3-text-grey">
<?php 
//var_dump($this->get('catsData'));
foreach($this->artsData as $arts) {
?>
<tr>
<td><?php echo $arts['id']; ?></td>
<td><a href="?task=articles&action=show&id=<?php echo $arts['id']; ?>"><?php echo $arts['title']; ?></td>
<td><?php echo $arts['autor']; ?></td>
<td><?php echo $arts['name']; ?></td>
<td><?php echo $arts['date_add']; ?></td>

<td>
<a href="?task=articles&action=edit&id=<?php echo $arts['id']; ?>&name=<?php echo $cats['name']; ?>">
<i class="fa fa-edit" style="font-size:20px;color:black"></i></a>
<a onclick="return confirm('Jesteś pewien?')" href="?task=articles&action=delete&id=<?php echo $arts['id']; ?>">
<i class="fa fa-close" style="font-size:20px;color:red"></i></a>

</td>
</tr>
<?php };?>

</tbody>
</table>
</div>
<? include 'templates/footer.html.php'; ?>