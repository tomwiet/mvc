<?php include 'templates/header.html.php'; ?>
<h3 class="w3-panel w3-light-grey">Lista kategorii</h3>
<table class="w3-table-all w3-hoverable">
<thead>
<tr class="w3-light-grey"><th>ID</th><th>Nazwa</th><th>Akcja</th></tr>
</thead>
<tbody>
<?php 
//var_dump($this->get('catsData'));
foreach($this->get('catsData') as $cats) {
?>
<tr>
<td><?php echo $cats['id']; ?></td>
<td><?php echo $cats['name']; ?></td>
<td>
<a href="?task=categories&action=delete&id=<?php echo $cats['id']; ?>">
<i class="fa fa-close" style="font-size:20px;color:red"></i></a>
<a href="?task=categories&action=edit&id=<?php echo $cats['id']; ?>&name=<?php echo $cats['name']; ?>">
<i class="fa fa-edit" style="font-size:20px;color:black"></i></a>
</td>
</tr>
<?php };?>

</tbody>
</table>
<? include 'templates/footer.html.php'; ?>