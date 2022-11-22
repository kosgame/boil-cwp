{include file="header.tpl"}
	<h2 class="w3-xxxlarge w3-text-red">Wyniki</h2>
    <hr style="width:50px;border:5px solid red" class="w3-round">
  	<p>Wynik dla zadania z zajęć. Podane punkty to: 1, 3, 5. Szukamy wartości dla 4</p>
  	<p>Znaleziony wynik: {$wynik_zadanie}
  </div>

  <div class="w3-container" id="contact" style="margin-top:75px">
  <h2 class="w3-xxxlarge w3-text-red">Wpisz własne dane</h2>
    <hr style="width:50px;border:5px solid red" class="w3-round">
  	<p>Podaj własne dane. Liczby wpisuj po przecinku (,) </p>
    <!--Lub importuj plik tekstowy. Plik tekstowy musi mieć w pierwszej linijce oddzielone przecinkami liczby <b>x</b>, w następnej odpowiadające im <b>y</b>, w ostatniej linijce pojedynczy <b>x</b> dla którego szukamy.</p>
    -->
  	<form action="lagrange/licz" method="POST">
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
    <p>Wybierz plik. Pierwsza linia to punkt, druga linia to X po przecinku, trzecia linia to Y po przecinku </p>
    <br />
    <form action="lagrange/plik" method="POST" ENCTYPE="multipart/form-data">
        <input class="w3-border" type="file" name="plik"/><br/><br/><br/>
        <button type="submit" class="w3-button w3-block w3-padding-large w3-red w3-margin-bottom">Oblicz wynik</button>
    </form>



</div>

<!-- End page content -->
{include file="footer.tpl"}