{include file="header.tpl"}
	<h2 class="w3-xxxlarge w3-text-red">Wyniki</h2>
    <hr style="width:50px;border:5px solid red" class="w3-round">
  	<p>Wynik dla zadania z zajęć. Podane x: [-2, -1, 0, 2, 4] &nbsp; Wartości y: [-1, 0, 5, 99, -55]</p>
  	<p>Ilorazy różnicowe: <br> {$wynik_zadanie} </p>
    <p>Współczynniki: <br> {$zadanie2}</p>
    <p>Wynik dla X=1: {$zadanie3}</p>
  </div>

  <div class="w3-container" id="contact" style="margin-top:75px">
  <h2 class="w3-xxxlarge w3-text-red">Wpisz własne dane</h2>
    <hr style="width:50px;border:5px solid red" class="w3-round">
  	<p>Podaj własne dane. Liczby wpisuj po przecinku (,)</p>
  	<form action="newton/licz" method="POST">
      <div class="w3-section">
        <label>X</label>
        <input class="w3-input w3-border" type="text" name="xs" required>
      </div>
      <div class="w3-section">
        <label>Y</label>
        <input class="w3-input w3-border" type="text" name="ys" required>
      </div>
      <div class="w3-section">
        <label>Szukany X</label>
        <input class="w3-input2 w3-border" type="text" name="punkt" required>
      </div>
      <button type="submit" class="w3-button w3-block w3-padding-large w3-red w3-margin-bottom">Oblicz wynik</button>
    </form>
  </div>
<div class="w3-container" id="contact" style="margin-top:75px">
  <h2 class="w3-xxxlarge w3-text-red">Dane z pliku</h2>
  <hr style="width:50px;border:5px solid red" class="w3-round">
  <p>Wybierz plik. Pierwsza linia to punkt, dla którego chcemy obliczyć wartość. Druga linia to X po przecinku, trzecia linia to Y po przecinku </p>
  <form action="newton/plik" method="POST" ENCTYPE="multipart/form-data">
    <input class="w3-border" type="file" name="plik"/><br/><br/><br/>
    <button type="submit" class="w3-button w3-block w3-padding-large w3-red w3-margin-bottom">Oblicz wynik</button>
  </form>
</div>
<!-- End page content -->
{include file="footer.tpl"}