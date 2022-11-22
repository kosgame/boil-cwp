{include file="header.tpl"}
{assign var=triple value='<div class="w3-third">        <input class="w3-input w3-border" type="text" name="czynnosci[]" placeholder="Czynność" required>      </div>      <div class="w3-third">        <input class="w3-input w3-border" type="text" name="czasy[]" placeholder="Czas trwania" required>      </div>      <div class="w3-third">        <input class="w3-input w3-border placeholder-next" name="kolejnosc[]" type="text" placeholder="">      </div>'}
<script>
    $(document).ready(function () {
        var max_fields = 30;
        var wrapper = $(".container1");
        var add_button = $(".add_form_field");
        var nextSForm = $("#nextSForm input");
        changeKolejnosc();

        function changeKolejnosc() {
            let newval = $('input[name=nextS]:checked', '#nextSForm').val();
            $('input[name=kolejnoscType]').val(newval);
            let typZdarzenia = "Następstwo zdarzeń (np. 1-2)";
            if (newval === 'czynnosci') {
                typZdarzenia = "Czynności poprzedzające np(A,B)"
            }
            $('.placeholder-next').map(function (key, value) {
                value.placeholder = typZdarzenia;
            })
        }

        var x = 1;
        $(add_button).click(function (e) {
            e.preventDefault();
            if (x < max_fields) {
                x++;
                $(wrapper).append('{$triple}'); //add input box
                changeKolejnosc();
            } else {
                alert('You Reached the limits')
            }
        });

        $(wrapper).on("click", ".delete", function (e) {
            e.preventDefault();
            $(this).parent('div').remove();
            x--;
        })

        $(nextSForm).on('change', function () {
            changeKolejnosc();
        });

    });
</script>

</div>

<div class="w3-container" id="contact" style="margin-top:75px">
    <h2 class="w3-xxxlarge w3-text-red">Wpisz własne dane</h2>
    <p>Wybierz sposób podawania kolejności czynności.</p>
    <form id="nextSForm">
        <input class="w3-radio" type="radio" name="nextS" value="zdarzenia" checked>
        <label>Następstwo zdarzeń</label>

        <input class="w3-radio" type="radio" name="nextS" value="czynnosci">
        <label>Czynnośći poprzedzające</label>
    </form>
    <form action="index.php?strona=cpm/licz" method="POST">
        <div class="container1 w3-row-padding w3-margin-top">
            {$triple}
        </div>

        <button class="add_form_field w3-red w3-button w3-margin-top">Dodaj kolejną czynność &nbsp;
            <span style="font-size:16px; font-weight:bold;">+ </span>
        </button>

        <input type="hidden" name="kolejnoscType" value="zdarzenia">
        <button type="submit" class="w3-button w3-block w3-padding-large w3-red w3-margin-top">Oblicz wynik</button>
    </form>
</div>

{*<div class="w3-container" id="contact" style="margin-top:75px">*}
{*  <h2 class="w3-xxxlarge w3-text-red">Dane z pliku</h2>*}
{*  <hr style="width:50px;border:5px solid red" class="w3-round">*}
{*  <p>Wybierz plik. Pierwsza linia to punkt, dla którego chcemy obliczyć wartość. Druga linia to X po przecinku, trzecia linia to Y po przecinku </p>*}
{*  <form action="newton/plik" method="POST" ENCTYPE="multipart/form-data">*}
{*    <input class="w3-border" type="file" name="plik"/><br/><br/><br/>*}
{*    <button type="submit" class="w3-button w3-block w3-padding-large w3-red w3-margin-bottom">Oblicz wynik</button>*}
{*  </form>*}
{*</div>*}

<!-- End page content -->
{include file="footer.tpl"}