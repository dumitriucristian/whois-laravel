@include('partials.header');
<!-- END Header -->	<!-- Slider -->
<div id="page-slider" class="full-width" style="background-image:url( {{ asset('images/banner.jpg') }}">
    <!--<div class="image-overlay"></div>-->
    <div class="mcenter">
        <p class=" size36 light white center">Inregistreaza domeniile web dorite<br>simplu si rapid.</p>
        <p class=" size24 light white center">Domenii .ro de la <span class="under">34.9 Euro</span>  -  Domenii .com .net .eu de la <span class="under">9.9 Euro</span></p>


        <form name="checkdomain" accept-charset="utf-8" method="post" action="checkdomain">

            {{csrf_field()}}
            <div id="search-frame" class="mcenter">
                @if($errors->any())
                    @foreach($errors->all() as $error)
                    <span style=" color: beige;   font-size: 1.42em;    position: relative;">{{$error}}</span>
                    @endforeach
                @endif
                <div id="search-box" class="left">
                    <div id="search-prefix" class="left sprite-ic search"></div>
                    <div id="search-text" class="left">
                        <input type="text" class=" size20 black2" placeholder="DomeniulTau" maxlength="63" id="domain" name="domain" autofocus="">
                        <div class="sprite-ic dcheck"></div>
                        <div class="sprite-ic derror hide"></div>
                    </div>
                    <div id="search-br" class="left"></div>
                </div>
                <div class="left" id="search-extensions">
                    <div class="styled-select">
                        <select class="black2 center  semibold" name="tld" id="tld">
                            <option value="ro">.ro</option>
                            <option value="info.ro">.info.ro</option>
                            <option value="store.ro">.store.ro</option>
                            <option value="com.ro">.com.ro</option>
                            <option value="tm.ro">.tm.ro</option>
                            <option value="com">.com</option>
                            <option value="eu">.eu</option>
                            <option value="net">.net</option>
                            <option value="org">.org</option>
                            <option value="name">.name</option>
                            <option value="biz">.biz</option>
                            <option value="info">.info</option>
                        </select>
                    </div>
                </div>
                <div class="clear"></div>
                <input type="submit" value="Verifica Domeniul" id="send-button" class=" button1 mcenter size16 white center nounder"/>


               <!--<div id="send-button" class="button1 mcenter">
                <a id="verif" class=" size16 white center nounder" title="Inregistrare domenii" href="#"><i class="fa fa-angle-right"></i>  Verifica Domeniul</a>
                    <a id="reg" class="size16 white center nounder hide" title="Inregistrare domenii" href="#"><i class="fa fa-angle-right"></i>  Inregistreaza Domeniul</a>
                </div>
                -->
            </div>
        </form>
    </div>
</div>
<div class="clear clearfix"></div>
<!-- END Slider -->
<!-- Content -->
<div id="content-outer">
    <div id="content-frame" class="mcenter">
        <div id="content-sidebar" class="">
            <p class="size22 left black3">Domenii Inregistrate</p>
            <div class="separator20 clear"></div>
            <div class="separatorW4"></div>
            <div id="counter" class="mcenter center">
                <span class="black3 size72 bold">550</span>
                <p class="size16 black3">Domenii inregistrate in anul 2013.</p>
                <a href="#" title="Comanda propriul domeniu web" class="green size13 nounder"><i class="fa fa-angle-double-right"></i> Comanda acum propriul domeniu web</a>
            </div>
        </div>
        <div id="content-text" class="">
            <h2 class="black3 size30 semibold left"> Ce este un domeniu?</h2>
            <div class="separator20 clear"></div>
            <div class="separatorW4"></div>
            <p class="size14 black3 left">
                Un domeniu este numele dvs. online. El va ofera identitate pe Internet, denumirea aleasa fiind extrem de importanta. In spatiul virtual, domeniul si logo-ul sunt cele mai importante elemente ale imaginii dvs., atat individual cat si ca firma.
            </p>
            <p class="size14 black3 left">
                Domeniul inregistrat poate fi folosit atat pentru website-ul dvs. oficial cat si pentru adrese de e-mail, prin urmare trebuie sa fie usor de citit si tinut minte.
            </p>
            <p class="size14 black3 left">
                Puteti inregistra domenii in mod diferit, in functie de tipul ales. Domeniile .ro se inregistreaza pe viata contra unei sume fixe, in timp ce toate celelalte domenii (.com, .eu, .org, .info, etc) se inregistreaza pe o durata de 12 luni, contra unei taxe anuale.
            </p>
        </div>

    </div>
</div>
<!-- END Content -->
<!-- Information -->
<div id="info-outer">
    <div id="info-frame" class="mcenter">
        <h2 class="black3 size30 semibold left">Informatii </h2>
        <div id="slider-anchors" class="right">
            <a href="#info-frame" title="" id="a1" class=""><i class="fa fa-circle-o"></i></a>
            <a href="#info-frame" title="" id="a2" class="green"><i class="fa fa-circle-o"></i></a>
            <a href="#info-frame" title="" id="a3" class=""><i class="fa fa-circle-o"></i></a>
        </div>
        <div class="separator20 clear"></div>
        <div class="separatorW4"></div>
        <div id="info-left" class="left">
            <div class="sprite-ic ribbon left"></div>
        </div>
        <div id="info-right" class="left">
            <div id="slider1" style="display: none;">
                <h3 class="size20 black3 left normal">Recomandarile noastre privitoare la inregistrarea de<br>domenii internet</h3>
                <div class="clear"></div>
                <div class="separatorW1"></div>
                <p class="size14 black3">
                    Pentru a va proteja brand-ul sau afacerea, este recomandat sa inregistrati numele de domeniu dorit sub mai multe extensii (de ex. nume-domeniu.ro, dar si nume-domeniu.eu, nume-domeniu.com, etc). De asemenea, va recomandam sa inregistrati toate domeniile care se scriu sau citesc similar (de ex. numedomeniu.ro, numele-domeniului.ro, n-d.ro, nume_domenii.ro, etc.). Puteti avea un website cu mai multe nume de domenii.
                </p>
                <p class="size14 black3">
                    Daca domeniul dorit este ocupat, puteti folosi semnul minus, ex. www.nume-domeniu.ro in alegerea numelui. Nu uitati insa, cu cat este mai usor de pronuntat numele domeniului, cu atat va fi mai usor de retinut. In cazul in care ati utilizat un cuvant cheie in numele de domeniu, iar acesta nu este disponibil, puteti folosi sinonime ale acestuia.
                </p>
            </div>
            <div id="slider2" class="hide" style="display: block;">
                <h3 class="size20 black3 left normal">Procedura de inregistrare domenii .ro, inregistrare domenii .eu, .com, .net etc.</h3>
                <div class="clear"></div>
                <div class="separatorW1"></div>
                <p class="size14 black3">
                    Alegeti numele de domeniu dorit pentru inregistrare si verificati daca acesta este disponibil. Puteti inregistra mai multe domenii la o singura comanda, cu ajutorul cosului automat de cumparaturi. Va sfatuim sa incercati mai multe domenii, iar apoi sa le lasati in lista doar pe acelea pe care doriti sa le achizitionati si inregistrati.
                </p>
                <p class="size14 black3">
                    Completati datele dumneavoastra in formularul de comanda (procesul dureaza intre 1-3 minute) si urmati instructiunile din emailul primit. Procesul de inregistrare dureaza, in general, 24h.
                </p>
            </div>
            <div id="slider3" class="hide" style="display: none;">
                <h3 class="size20 black3 left normal">Termenii si conditiile de plata pentru inregistrarea domeniilor</h3>
                <div class="clear"></div>
                <div class="separatorW1"></div>
                <p class="size14 black3">
                    In cadrul procesului de inregistrare domenii, sistemul va genera automat costurile aferente inregistrarii acestora. Preturile sunt exprimate in EUR si nu contin TVA. Un domeniu .ro se inregistreaza pe termen nelimitat, contra unei sume de DOAR 34.9 EUR, in timp ce taxa pe 12 luni a celorlalte tipuri de domenii este de 10.9 EUR. Factura proforma si plata domeniilor se va face in lei (ron).
                </p>
                <p class="size14 black3">
                    Dupa inregistrarea si acceptarea unei comenzi, va vom trimite o factura proforma cu suma de plata, factura ce poate fi achitata in termen de maxim 2 zile lucratoare prin OP / transfer bancar. Pentru inregistrarea domeniilor (domeniului) este necesara confirmarea in prealabil a platii de catre dvs. La final veti primi toate instructiunile necesare utilizarii domeniului.
                </p>
            </div>
        </div>
    </div>
</div>
@include('partials.footer');
