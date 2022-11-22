{include file="header.tpl"}
	<h2 class="w3-xxxlarge w3-text-red">Wyniki</h2>
    <hr style="width:50px;border:5px solid red" class="w3-round">
  	<p>Wyniki dla zadania z zajęć. Podane wartości y`(x) = y &nbsp; y(0) = 1 &nbsp; xp= 0 &nbsp; xk = 0.4 &nbsp; h = 0.1</p>
    <p>Wynik obliczonej całki:  <br>{$echo}</p>
    <p>X:  <br>{$echox}</p>
    <p>Y:  <br>{$echoy}</p>

  </div>

  <div class="w3-container" id="contact" style="margin-top:75px">
  <h2 class="w3-xxxlarge w3-text-red">Wpisz własne dane</h2>
    <hr style="width:50px;border:5px solid red" class="w3-round">
  	<p>Podaj własne dane. Funckję podaj bez spacji Plik tekstowy musi mieć w pierwszej linijce oddzielone przecinkami liczby <b>x</b>, w następnej odpowiadające im <b>y</b>, w ostatniej linijce pojedynczy <b>x</b> dla którego szukamy.</p>

  	<form action="euler/licz" method="POST">
      <div class="w3-section">
        <label>Początek zakresu</label>
        <input class="w3-input w3-border" type="text" name="start" required>
      </div>
      <div class="w3-section">
        <label>Koniec zakresu</label>
        <input class="w3-input w3-border" type="text" name="koniec" required>
      </div>
       <div class="w3-section">
        <label>Y(0)</label>
        <input class="w3-input w3-border" type="text" name="y" required>
      </div>
       <div class="w3-section">
        <label>krok h</label>
        <input class="w3-input w3-border" type="text" name="h" required>
      </div>
      <button type="submit" class="w3-button w3-block w3-padding-large w3-red w3-margin-bottom">Oblicz wynik</button>
    </form>  

  </div>

<!-- End page content -->
{include file="footer.tpl"}