<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0033) # -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title></title>
    <meta http-equiv="description" content="">
    <meta http-equiv="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="expires" content="0">
    <meta name="robots" content="noindex,nofollow">
    <meta http-equiv="Pragma" content="no-cache">
    <link type="text/css" rel="stylesheet" href="{{asset('css/www.v1.1.css') }}" media="screen">
    <link type="text/css" rel="stylesheet" href="{{asset('css/reset.css' )}}" media="screen">
    <link type="text/css" rel="stylesheet" href="{{asset('css/font-awesome.css')}}"  media="screen">
</head><body>

<script>
    function checkDomain() {
        var domainName = $('#domain').val();
        var tld = $('#tld').val();

        $.post('whois/testwhois.php', {domain : (domainName + tld)}).done(function (data) {
            console.log(data);
        });
    }
</script>

<!-- Header -->
<div id="header-outer">
    <div id="header-frame" class="mcenter clearfix">
        <div id="logo-frame" class="left ">
            <a href="/" title="Inregistrare domenii. Inregistrare domeniu. Domenii online." class="size36 black2 semibold nounder">
                <img src="{{asset('images/webdomain-logo.png')}}" alt="Inregistrare Domenii">
            </a><br>
            <a href="/" title="Inregistrare domenii. Inregistrare domeniu. Domenii online." class="size18 green light nounder">Domeniul web dorit, la 2 clickuri distanta.</a>
        </div>
        <div id="cart" class="right">
            <div id="cart-img" class="sprite-ic cart mcenter"></div>
            <p class=" bold size18 white center">(3)</p>
            <div id="cart-down" class="hide">
                <div class="separatorW3"></div>
                <p id="cart-header" class="size18">Cosul de Cumparaturi</p>
                <div class="separator-cart mcenter clear"></div>
                <p class="size13 black3 left">www.domeniulmeu.ro</p>
                <span class="size14 orange right">34.9€</span>
                <div class="separator-cart mcenter clear"></div>
                <p class="size13 black3 left">www.domeniulmeu.store.ro</p>
                <span class="size14 orange right">9.9€</span>
                <div class="separator-cart mcenter clear"></div>
                <p class="size13 black3 left">www.domeniulmeu.com</p>
                <span class="size14 orange right">9.9€</span>
                <div class="separator-cart mcenter clear"></div>
                <p class="size16 black3 left">Total:</p>
                <span id="total" class="size16 orange right">54.7€</span>
                <div class="separator-cart mcenter clear"></div>
                <div class="button2 mcenter">
                    <a class=" size16 white center nounder" title="Checkout" href="#">Checkout</a>
                </div>
            </div>
        </div>
        <div id="social-buttons" class="right">
        </div>
    </div>
</div>
