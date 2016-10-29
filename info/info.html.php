<!doctype html5>
<!-- Strona z informacjami -->
<html>
<head>
<meta charset="utf-8">
<title>Aplikacja oparta o wzorzec MVC</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<style>
.w3-btn {width:150px;}
</style>
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="w3-brown w3-center"><h1>Aplikacja oparta o wzorzec MVC</h1></div>

<div class="w3-container w3-text-darh-grey">
<h2 class="w3-panel w3-light-grey w3-text-grey">1. Założenia</h2>
</div>
<div class="w3-container">
<h3 class="w3-text-grey">Struktura katalogów aplikacji</h3>
<p class="w3-text-grey">
<b>model</b> – pliki opisujące model dla danej funkcjonalności<br>
<b>controller</b> – pliki zawierające kod kontrolerów poszczególnych funkcjonalności<br>
<b>views</b> – pliki szablonów widoków np. categoryView<br>
<b>templates</b> – pliki z szablonami stron widoków np. categoryIndex.php<br>
</p>
<h3 class="w3-text-grey">Nazewnictwo plików oraz klas</h3>
<p class="w3-text-grey">
Nazwa modelu, widoku i kontrolera oparta jest o nazwę tabeli którą te warstwy obsługują.<br>
<b>Przykład:</b> 
<div class="w3-panel w3-leftbar w3-light-grey w3-margin-left">
Tabela przechowujące kategorie ma nazwę ‘categories’. Z tego wynika następujące nazewnictwo:<br>
	<ul>
	<li>Plik z kodem kontrolera: <i>controller/CategoriesController.php</i>
	<li>Nazwa klasy kontrolera: <i>CategoriesController</i></li>
	<li>Plik z kodem modelu: <i>model/CategoriesModel.php</i></li>
	<li>Nazwa klasy modelu: <i>CategoriesModel</i></li>
	<li>Plik z kodem widoku: <i>views/CategoriesView.php</i></li>
	<li>Nazwa klasy widoku: <i>CategoriesView</i></li>
	<li>Pliki szablonów widoków: <i>templates/indexCategory; templates/addCategory; templates/editCategory</i></li>
</ul>
</div>
</p>
<h2 class="w3-panel w3-light-grey w3-text-grey">Schemat działania aplikacji</h2>
</div>

<div class="w3-container w3-navbar w3-margin w3-center">
<button class="w3-btn w3-blue-grey"><a href="../index.php?task=categories&action=index">Powrót</a></button>
</div>

<?php include '../templates/footer.html.php' ?>


</body>
</html>
