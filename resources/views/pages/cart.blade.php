@include('partials.header');
<div id="page-banner" class="full-width" style="background-image:url({{assert('images/general-banner.jpg')}});">
    <div class="mcenter">
        <h1 class="size36 light white">Inregistreaza Domenii</h1>
    </div>
</div>
<!-- END Banner -->
<!-- Inner Content -->
<div id="inner-outer">
    <div id="inner-frame" class="mcenter">
        <div id="inner-content">
            <h2 class="size24 green normal">Comanda ta</h2>
            <div id="inner-table">
                <table>
                    <thead>
                    <tr><th>
                            Domenii
                        </th>
                        <th>
                            Perioada/ani
                        </th>
                        <th>
                            Pret
                        </th>
                    </tr></thead>
                    <tbody>

                    @foreach($domains as $domain => $value)
                        <tr>
                            <td class="t1">
                                <p>    {{$value}}</p>
                            </td>
                            <td class="t2">
                                1
                            </td>
                            <td class="t3">
                                <span>10€</span><br>
                                <a href="/removeDomain/{{$domain}}" title="">[x] Sterge Domeniul</a>
                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                    <tfoot>
                    <tr>
                        <td colspan="3" id="tfoot">
                            <span>Total : {{$totalCart}}</span><br>
                            <a href="/" title="Comanda Domenii">Comanda Domenii</a>
                        </td>
                    </tr>
                    </tfoot>
                </table>
            </div>
            <div id="info-comanda">
                <h2 class="size20 black3 normal">Informatii Comanda</h2>
                <div class="separator10"></div>
                <div class="sidebar-separator"></div>
                <div class="separator20"></div>
                <p class="size24 green">Completarea formularului dureaza 1-3 minute</p>
                <div class="separator20"></div>
                <p class="size14 black3">Toate campurile sunt necesare pentru inregistrarea corecta a domeniului.<br>
                    Va rugam sa va asigurati ca datele completate sunt corecte. Best Web Image SRL (inregistrare-domenii.tm.ro) este autorizat ca operator de date cu caracter personal nr. 26224/2012</p>
                <div class="separator30"></div>
                <h2 class="size20 black3 normal">Date de Contact</h2>
                <div class="separator10"></div>
                <div class="sidebar-separator"></div>
                <div class="separator20"></div>
                <form action="inner/" id="checkout">
                    <input type="radio" value="Persoana fizica" name="pj" class="left"><span class="size14 black3 left">Persoana fizica</span>
                    <input type="radio" value="Persoana juridica sau PFA" name="pj" class="left"><span class="size14 black3 left">Persoana juridica sau PFA</span>
                    <div class="separator30"></div>
                    <input type="text" name="nume" placeholder="Nume si Prenume" maxlength="50" class="inner-input">
                    <input type="text" name="cnp" placeholder="CNP" maxlength="50" class="inner-input">
                    <input type="text" name="tel" placeholder="Telefon" maxlength="50" class="inner-input">
                    <input type="text" name="email" placeholder="Email" maxlength="50" class="inner-input">
                    <input type="text" name="adresa" placeholder="Adresa Corespondenta " maxlength="256" class="inner-input2">
                </form>
                <div class="separator30"></div>
                <h2 class="size20 black3 normal">Modalitati de plata</h2>
                <div class="separator10"></div>
                <div class="sidebar-separator"></div>
                <div class="separator20"></div>
                <form action="inner/">
                    <div class="plata">
                        <input type="radio" value="Plata online cu cardul" name="plata" class="left"><div class="sprite-ic visa left"></div><span class="size14 black3 left">Plata online cu cardul.</span>
                    </div>
                    <div class="clear"></div>
                    <div class="separator10"></div>
                    <div class="plata">
                        <input type="radio" value="Plata online prin Paypal" name="plata" class="left"><div class="sprite-ic paypal left"></div><span class="size14 black3 left">Plata online prin Paypal.</span>
                    </div>
                    <div class="clear"></div>
                    <div class="separator10"></div>
                    <div class="plata">
                        <input type="radio" value="Plata prin Ordin Bancar" name="plata" class="left"><div class="sprite-ic ordin left"></div><span class="size14 black3 left">Plata prin Ordin Bancar.</span>
                    </div>
                </form>
                <div class="clear"></div>
                <div class="separator30"></div>
                <h2 class="size20 black3 normal">Termeni si Conditii de plata</h2>
                <div class="separator10"></div>
                <div class="sidebar-separator"></div>
                <div class="separator20"></div>
                <p class="size14 black3">Dupa inregistrarea si acceptarea unei comenzi, va vom trimite o factura proforma cu suma de plata, factura ce poate fi achitata in termen de maxim 2 zile lucratoare prin OP / transfer bancar. Pentru inregistrarea domeniilor (domeniului) este necesara confirmarea, in prealabil, a platii de catre dvs. Plata se face in lei (ron), la cursul BNR+1% din ziua emiterii proformei.</p>
                <div class="separator20"></div>
                <p class="size14 black3">Prin folosirea acestui serviciu sunteti de acord cu termenii si conditiile pentru inregistrarea domeniilor. Termenii si conditiile Registrului ROTLD pentru domeniile .RO le gasiti la urmatoarele adrese: reguli de inregistrare, acord de inregistrare, politica de rezolvare a disputelor.</p>
            </div>
            <div id="verificare">
                <input type="checkbox" name="verif" class="left">
                <span class="size14 black3 left">Am verificat datele introduse si confirm ca sunt corecte. Am citit si sunt de acord cu toti termenii si conditiile utilizarii serviciului de inregistrare.</span>
                <a href="#" title="Trimite comanda" class="right">Trimite comanda</a>
            </div>
        </div>
        <!-- Sidebar -->
        <div id="inner-sidebar">
            <h2 class="size20 black3 normal">Informatii</h2>
            <div class="separator10"></div>
            <div class="sidebar-separator"></div>
            <div class="separator20"></div>
            <p class="size13 balck3">Puteti inregistra mai multe domenii la o singura comanda.</p>
            <p class="size13 balck3">Inainte sa efectuati comanda, alegeti doar acele domenii pe care doriti sa le inregistrati, stergandu-le pe cele nebifate.</p>
            <p class="size13 balck3">Plata facturii proforme se face in lei (ron)</p>
            <p class="size13 balck3">In cadrul procesului de inregistrare domenii, sistemul va genera automat costurile aferente inregistrarii acestora. Un domeniu .ro se inregistreaza pe termen nelimitat contra unei sume de DOAR 34.9 EUR, in timp ce taxa pe 12 luni a celorlalte tipuri de domenii este de 9.9 EUR.</p>
            <h2 class="size20 black3 normal">Facebook Widget</h2>
            <div class="separator10"></div>
            <div class="sidebar-separator"></div>
            <div class="separator20"></div>
            <iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2FInregistrareDomenii.ro&amp;width=260&amp;height=258&amp;colorscheme=light&amp;show_faces=true&amp;header=false&amp;stream=false&amp;show_border=true" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:260px; height:258px;" allowtransparency="true"></iframe>
        </div>
        <div id="plati">
            <div id="plati-img">
                <img src="./assets/plati.png" alt="Plati securizate prin">
            </div>
        </div>
        <!-- END Sidebar -->
    </div>
</div>
<!-- END Inner Content -->
<div class="clear"></div>
@include('partials.footer');
