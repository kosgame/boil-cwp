{include file="header.tpl"}
	  <h2 class="w3-xxxlarge w3-text-red">Wyniki</h2>
    <hr style="width:50px;border:5px solid red" class="w3-round">
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

  <div class="w3-container" id="contact" style="margin-top:35px">
    <h2 class="w3-xxxlarge w3-text-red">Wykresy</h2>
    <hr style="width:50px;border:5px solid red" class="w3-round">
    <p>tutaj bym chciał narysowany wykres do podanych danych :) ciekawe jak coś takiego można osiągnąć :D</p>
  </div>


<!-- End page content -->
{include file="footer.tpl"}