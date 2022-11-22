{include file="header.tpl"}
	  <h2 class="w3-xxxlarge w3-text-red">error! CPM</h2>
    <hr style="width:50px;border:5px solid red" class="w3-round">
  	<p>Wynik dla podanych przez użytkownika liczb. Szukamy wartości dla X: <b>{$podane['punkt']}</b></p>
    <p>Podane wartości X: <b>{$podane['x']}</b> </br>
       Podane wartości Y: <b>{$podane['y']}</b> </br> </p>
    <p>Obliczony wynik: {$wynik}</p>
  </div>

  <!---<div class="w3-container" id="contact" style="margin-top:35px">
    <h2 class="w3-xxxlarge w3-text-red">Wykresy</h2>
    <hr style="width:50px;border:5px solid red" class="w3-round">
    <p>tutaj bym chciał narysowany wykres do podanych danych :) ciekawe jak coś takiego można osiągnąć :D</p>
  </div>
--->

<!-- End page content -->
{include file="footer.tpl"}