<!DOCTYPE html>
<html lang="en" class="js-focus-visible" data-js-focus-visible="">

<head prefix="og: http://ogp.me/ns#">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title> @yield('pageTitle') | {{ config('app.name') }} </title>
    <meta name="description"
        content="Buy Code, Scripts, Themes, Templates and Plugins for PHP, JavaScript, HTML, WordPress, Android, iOS and more.">
    <meta name="keywords"
        content="php scripts, php, javascript, app templates, app source code, themes, templates, plugins, graphics, wordpress, prestashop, magento, logo templates, android app templates, iOS app templates, unity source code, woocommerce, marketplace, buy, sell">
    <meta name="robots" content="index,follow">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta property="og:title" content="Buy Code, Scripts, Themes, Plugins and more">
    <meta property="fb:app_id" content="603190889801449">
    <meta property="og:description"
        content="Buy Code, Scripts, Themes, Templates and Plugins for PHP, JavaScript, HTML, WordPress, Android, iOS and more.">
    <meta property="og:image" content="https://www.codester.com/static/img/logo-banner.jpg">

    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@codesterhq">
    <meta name="twitter:title" content="Buy Code, Scripts, Themes, Plugins and more">
    <meta name="twitter:description"
        content="Buy Code, Scripts, Themes, Templates and Plugins for PHP, JavaScript, HTML, WordPress, Android, iOS and more.">
    <meta name="twitter:image" content="https://www.codester.com/static/img/logo-banner.jpg">


    <link rel="canonical" href="https://www.codester.com/">


    {{-- <link rel="Shortcut icon" href="https://www.codester.com/static/favicon.ico">
	<link rel="apple-touch-icon" sizes="57x57" href="https://www.codester.com/static/img/favicons/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="https://www.codester.com/static/img/favicons/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="https://www.codester.com/static/img/favicons/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="https://www.codester.com/static/img/favicons/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114"
		href="https://www.codester.com/static/img/favicons/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120"
		href="https://www.codester.com/static/img/favicons/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144"
		href="https://www.codester.com/static/img/favicons/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152"
		href="https://www.codester.com/static/img/favicons/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180"
		href="https://www.codester.com/static/img/favicons/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"
		href="https://www.codester.com/static/img/favicons/android-icon-192x192.png"> --}}
    
        @stack('css')
        


    @include('layouts.frontend.partial.css')

    
</head>

<body style="" cz-shortcut-listen="true">
    <div id="wrap">
        {{-- Header --}}
        @include('layouts.frontend.partial.header')
        <!-- / header -->
        @yield('content')
        
    </div>
    <!-- footer -->

   @include('layouts.frontend.partial.model')
    @include('layouts.frontend.partial.footer')
    <!-- JS -->
    @include('layouts.frontend.partial.js')
    @stack('js')
</body>
<!-- Facebook Pixel Code -->
<script>
    !function (f, b, e, v, n, t, s) {
    if (f.fbq) return; n = f.fbq = function () {
        n.callMethod ?
            n.callMethod.apply(n, arguments) : n.queue.push(arguments)
    }; if (!f._fbq) f._fbq = n;
    n.push = n; n.loaded = !0; n.version = '2.0'; n.queue = []; t = b.createElement(e); t.async = !0;
    t.src = v; s = b.getElementsByTagName(e)[0]; s.parentNode.insertBefore(t, s)
}(window,
    document, 'script', '//connect.facebook.net/en_US/fbevents.js');

fbq('init', '574580832686893');
fbq('track', "PageView");

</script>
<noscript><img height="1" width="1" style="display:none"
        src="https://www.facebook.com/tr?id=574580832686893&ev=PageView&noscript=1" /></noscript>
<!-- End Facebook Pixel Code -->
<script>
    (function (i, s, o, g, r, a, m) {
    i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {
        (i[r].q = i[r].q || []).push(arguments)
    }, i[r].l = 1 * new Date(); a = s.createElement(o),
        m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
})(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

ga('create', 'UA-16104985-4', 'codester.com');
ga('require', 'displayfeatures');
ga('send', 'pageview');

</script>
</html>