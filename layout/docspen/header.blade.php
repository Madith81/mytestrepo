    <meta charset="utf-8">

    <link rel="dns-prefetch" href="https://docspen.ga">
    <link rel="dns-prefetch" href="https://cdn.jsdelivr.net">
    <link rel="dns-prefetch" href="https://cdnjs.cloudflare.com">
    <link rel="dns-prefetch" href="https://cdn.docspen.ga">
    <link rel="assets" href="https://cdn.jsdelivr.net">
    <link rel="assets" href="https://cdnjs.cloudflare.com">
    <link rel="search" type="application/opensearchdescription+xml" href="/opensearch.xml" title="DocsPen">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,900,400italic,700italic" rel="stylesheet">

    <meta name="viewport" content="width=device-width">
    <meta name="token" content="{{ csrf_token() }}">
    <meta name="base-url" content="{{ baseUrl('/') }}">
    <meta name="theme-color" content="#58488a">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="description" content="DocsPen - Online Documentation Platform. Read more, know more.">
    <meta name="keywords" content="DocsPen, Docs, Documentation, Project Documentation, Wiki">

    <link rel="icon" type="image/x-icon" href="/favicon.ico" />
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" sizes="16x16 24x24 32x32 64x64"/>
    <link rel="stylesheet" href="{{ hashed_asset('css/styles.css') }}">
    <link rel="stylesheet" media="print" href="{{ hashed_asset('css/print-styles.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
    <link rel="manifest" href="/manifest.json">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5a82de53a0ba395f"></script>

<script>
	if ('serviceWorker' in navigator && navigator.userAgent.indexOf("Mobile") === -1) {
		navigator.serviceWorker.register('/service-worker.js').then(function(registration) {
			console.log('ServiceWorker registration successful with scope: ', registration.scope);
		})
		.catch(function(err) {
			console.error('ServiceWorker registration failed: ', err);
		});
	} else if('serviceWorker' in navigator && navigator.userAgent.indexOf("Mobile") > -1){
        navigator.serviceWorker.getRegistration().then(function(registration) {
            var serviceWorkerUnregistered=false;
            if(registration) {
                registration.unregister();
                serviceWorkerUnregistered=true;
            }
            serviceWorkerUnregistered && window.location.reload();
        });
    }
</script>