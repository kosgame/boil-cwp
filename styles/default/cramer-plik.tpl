{include file="header.tpl"}
	  <h2 class="w3-xxxlarge w3-text-red">Wyniki z pliku</h2>
    <hr style="width:50px;border:5px solid red" class="w3-round">
    <p>Podane wartości <br />
        &nbsp; X: {$podane['x'][0]}, {$podane['x'][1]}, {$podane['x'][2]}<br />
        &nbsp; Y: {$podane['x'][0]}, {$podane['y'][1]}, {$podane['y'][2]}<br />
        &nbsp; Z: {$podane['z'][0]}, {$podane['z'][1]}, {$podane['z'][2]}<br />
        &nbsp; WW: {$podane['ww'][0]}, {$podane['ww'][1]}, {$podane['ww'][2]}
    </p>

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


<!-- End page content -->
{include file="footer.tpl"}