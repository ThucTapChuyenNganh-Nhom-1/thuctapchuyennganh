<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=1"/>
  <link rel="icon" href="{{App::getFavicon()}}" type="image/x-icon">
  <link rel="apple-touch-icon" sizes="180x180" href="{{App::getAppleIcon()}}">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-touch-fullscreen" content="yes">
  <meta name="mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <meta name="description" content="Encompass Technology">

  <meta property="og:title" content="Home" />
  <meta property="og:type" content="Website" />
  <meta property="og:url" content="" />
  <meta property="og:description" content="Đồng hành cùng ước mơ của bạn" />
  <meta property="og:image" content="https://lh3.googleusercontent.com/pw/AM-JKLULLmR3OXjhlwBm3Bpe2USA7OvD2lHKs_AgIGVP5KpPszA2UIG7FDhazd8Mmwp6wblXkMPyESChkLipAs-0TwUSz0kCo5Nwbu1HT8J9WvKEXK93ASJ0FV5dKiGm6n6GbV9hpfD4s2ybX3sJz5kUGJEC=s500-no?authuser=0" />

  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
  <link href="https://fonts.googleapis.com" rel="dns-prefetch" crossorigin>
  <link href="https://fonts.googleapis.com" rel="preconnect" crossorigin>
  <link href="https://cdnjs.cloudflare.com" rel="dns-prefetch" crossorigin>
  <link href="https://cdnjs.cloudflare.com" rel="preconnect" crossorigin>
  <link rel="preload" href='@asset("styles/app.css")' as="style">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" rel="preload" as="script">
  <link href='@asset("scripts/app-mobile.js")' media="(max-width: 991px)" rel="preload" as="script">
  <link href='@asset("scripts/app-desktop.js")' media="(min-width: 992px)" rel="preload" as="script">
  @php wp_head() @endphp
  <link rel='stylesheet' id='sage/font-css' onload="if(media!='screen')media='screen'" href='{{S3_FONT}}' type='text/css' media='print' />
  {!! App::getTrackingCode('in_head') !!}

  <!-- font chữ -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">
</head>
