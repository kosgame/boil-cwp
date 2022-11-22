{include file="header.tpl"}
	  <h2 class="w3-xxxlarge w3-text-red">Wyniki</h2>
    <hr style="width:50px;border:5px solid red" class="w3-round">
  	<p>Wynik dla podanych przez użytkownika liczb. Szukamy wartości dla X: <b>{$podane['punkt']}</b></p>
    <p>Podane wartości X: <b>{$podane['x']}</b> </br>
       Podane wartości Y: <b>{$podane['y']}</b> </br> </p>
    <p>Obliczony wynik: {$wynik}</p>
    <p>Ilorazy różnicowe: <br> {$wynik_zadanie} </p>
    <p>Współczynniki: <br> {$zadanie2}</p>
    <p>Wynik dla {$podane['punkt']}: {$zadanie3}</p>
</div>

<!-- End page content -->
{include file="footer.tpl"}