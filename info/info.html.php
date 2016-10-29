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
<div id="content" class="w3-text-grey">
	
	<div class="w3-brown w3-center"><h1>Aplikacja oparta o wzorzec MVC</h1></div>

	<div class="w3-container">
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
			<div class="w3-panel w3-leftbar w3-light-grey w3-text-dark-grey w3-margin-left">
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
		<p>
		Główny plik aplikacji index.php pełni rolę głównego kontrolera (tzw. front controller). Jego zadaniem jest odczytać parametry 
		z adresu żądanej strony i uruchomić odpowiedni kontroler obsługujący konkretny obszar działanie aplikacji.<br>
		<b>Przykład:</b> 
			<div class="w3-panel w3-leftbar w3-light-grey w3-text-dark-grey w3-margin-left">
			Został wywołany następujący adres: <i>index.php?task=categories&action=index</i>, poprzez kliknięcie w menu odnośnika 
			„Lista kategorii”. Front controller odczytuje z tablicy <pre>$_GET</pre> parametry przekazane w adresie, tj:<br>
			<i>task=categories</i><br>
			<i>action=index</i><br>
			Zostanie zatem wywołany kontroler obsługi kategorii artykułów (utworzony obiekt na podstawie klasy kontrolera obsługującego 
			kategorie: obiekt klasy <i>CategoriesControler</i>). Kontroler kategorii na podstawie parametru <i>action</i> wywoła metodę 
			tworzącą obiekt widoku (na podstawie klasy <i>CategoriesView</i>), następnie zostanie na nim wykonana metoda przypisana do 
			akcji <i>index</i>. W naszym przykładzie akcja <i>index</i> ma spowodować pokazanie wszystkich kategorii zapisanych w bazie 
			danych. Tak więc wynikiem działania tej metody będzie utworzenie obiektu modelu (na podstawie klasy <i>CategoriesModel</i>), 
			na którym zostanie wywołana metoda wykonująca odpowiednie operacje na tabeli w bazie danych. W naszym przykładzie będzie to 
			SELECT pokazujący wszystkie rekordy z tabeli ‘categories’. Metoda zwróci dane wybrane z tabeli. Obiekt widoku może więc teraz
			te dane zaprezentować: wywoła metodę ładującą odpowiedni szablon z katalogu templates (plik <i>indexCategory.html.php</i>). 
			Dzięki temu użytkownik zobaczy stronę prezentującą spis kategorii artykułów naszej aplikacji

			<div class="w3-center"><img src="mvc.svg" width="50%" border="1"></div>

			</div>
		</p>
	</div>
</div>

<div class="w3-container w3-navbar w3-margin w3-center">
<button class="w3-btn w3-blue-grey"><a href="../index.php?task=categories&action=index">Powrót</a></button>
</div>

<?php include '../templates/footer.html.php' ?>


</body>
</html>
