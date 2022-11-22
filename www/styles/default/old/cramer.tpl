{include file="header.tpl"}
	<h2 class="w3-xxxlarge w3-text-red">Wyniki z zajęć</h2>
    <hr style="width:50px;border:5px solid red" class="w3-round">
  	<p>Wyniki dla zadania z zajęć. Podane wartości x=[2, 4, 3] &nbsp; y=[5, 2, 8] &nbsp; z= [3, 5, 4] &nbsp; wyrazy wolne=[5, 4, 9]</p>
    {if $warunek != 0}
      {$error}
    {else}
        <p>Wyznacznik główny:  {$wyznaczniki[0]}<br>
        Wyznacznik x:  {$wyznaczniki[1]}<br>
        Wyznacznik y:  {$wyznaczniki[2]}<br>
        Wyznacznik z:  {$wyznaczniki[3]}<br> </p>
        <p>Wynik x:  {$wyniki[0]}<br>
        Wynik y:  {$wyniki[1]}<br>
        Wynik z:  {$wyniki[2]}<br> </p>
    {/if}
  </div>

  <div class="w3-container" id="contact" style="margin-top:75px">
  <h2 class="w3-xxxlarge w3-text-red">Wpisz własne dane</h2>
    <hr style="width:50px;border:5px solid red" class="w3-round">
  	<p>Podaj własne dane. Liczby wpisuj po przecinku (,) Lub importuj plik tekstowy. Plik tekstowy musi mieć w pierwszej linijce oddzielone przecinkami liczby <b>x</b>, w następnej odpowiadające im <b>y</b>, w ostatniej linijce pojedynczy <b>x</b> dla którego szukamy.</p>

  	<form action="cramer/licz" method="POST">
      <div class="w3-section">
        <label>X</label>
        <input class="w3-input w3-border" type="text" name="as" required>
      </div>
      <div class="w3-section">
        <label>Y</label>
        <input class="w3-input w3-border" type="text" name="bs" required>
      </div>
       <div class="w3-section">
        <label>Z</label>
        <input class="w3-input w3-border" type="text" name="cs" required>
      </div>
       <div class="w3-section">
        <label>Wyrazy Wolne</label>
        <input class="w3-input w3-border" type="text" name="ww" required>
      </div>
      <button type="submit" class="w3-button w3-block w3-padding-large w3-red w3-margin-bottom">Oblicz wynik</button>
    </form>
  </div>
<div class="w3-container" id="contact" style="margin-top:75px">
    <h2 class="w3-xxxlarge w3-text-red">Dane z pliku</h2>
    <hr style="width:50px;border:5px solid red" class="w3-round">
    <p>Wybierz plik. Pierwsza linia to wartości a, w kolejnej b, w trzeciej c. Ostatnia linia to wyrazy wolne. </p>
    <form action="cramer/plik" method="POST" ENCTYPE="multipart/form-data">
        <input class="w3-border" type="file" name="plik"/><br/><br/><br/>
        <button type="submit" class="w3-button w3-block w3-padding-large w3-red w3-margin-bottom">Oblicz wynik</button>
    </form>
</div>

<!-- End page content -->
{include file="footer.tpl"}