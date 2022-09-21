<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="@yield('description')">
    <meta name="author" content="@yield('author')">
    <title>@yield('title')</title>

    <!-- Favicons Icon -->
    <link rel="icon" href="http://demo.magikthemes.com/skin/frontend/base/default/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="http://demo.magikthemes.com/skin/frontend/base/default/favicon.ico" type="image/x-icon" />

    <!-- Mobile Specific -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS Style -->
    <link rel="stylesheet" href="{{asset('assets/frontend')}}/css/animate.css" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/frontend/')}}/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/frontend/')}}/css/style.css" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/frontend/')}}/css/revslider.css" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/frontend/')}}/css/owl.carousel.css" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/frontend/')}}/css/owl.theme.css" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/frontend/')}}/css/font-awesome.css" type="text/css">

    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,300,700,800,400,600' rel='stylesheet' type='text/css'>
</head>

<body>
<div class="page">

    @include('Frontend._header')
    @include('Frontend._navbar')
    @yield('content')
    @include('Frontend._footer')

</div>
<!-- JavaScript -->
<script type="text/javascript" src="{{asset('assets/frontend')}}/js/jquery.min.js"></script>
<script type="text/javascript" src="{{asset('assets/frontend')}}/js/bootstrap.min.js"></script>
<script type="text/javascript" src="{{asset('assets/frontend')}}/js/parallax.js"></script>
<script type="text/javascript" src="{{asset('assets/frontend')}}/js/common.js"></script>
<script type="text/javascript" src="{{asset('assets/frontend')}}/js/revslider.js"></script>
<script type="text/javascript" src="{{asset('assets/frontend')}}/js/owl.carousel.min.js"></script>
<script type='text/javascript'>
    jQuery(document).ready(function(){
        jQuery('#rev_slider_4').show().revolution({
            dottedOverlay: 'none',
            delay: 5000,
            startwidth: 770,
            startheight: 460,

            hideThumbs: 200,
            thumbWidth: 200,
            thumbHeight: 50,
            thumbAmount: 2,

            navigationType: 'thumb',
            navigationArrows: 'solo',
            navigationStyle: 'round',

            touchenabled: 'on',
            onHoverStop: 'on',

            swipe_velocity: 0.7,
            swipe_min_touches: 1,
            swipe_max_touches: 1,
            drag_block_vertical: false,

            spinner: 'spinner0',
            keyboardNavigation: 'off',

            navigationHAlign: 'center',
            navigationVAlign: 'bottom',
            navigationHOffset: 0,
            navigationVOffset: 20,

            soloArrowLeftHalign: 'left',
            soloArrowLeftValign: 'center',
            soloArrowLeftHOffset: 20,
            soloArrowLeftVOffset: 0,

            soloArrowRightHalign: 'right',
            soloArrowRightValign: 'center',
            soloArrowRightHOffset: 20,
            soloArrowRightVOffset: 0,

            shadow: 0,
            fullWidth: 'on',
            fullScreen: 'off',

            stopLoop: 'off',
            stopAfterLoops: -1,
            stopAtSlide: -1,

            shuffle: 'off',

            autoHeight: 'off',
            forceFullWidth: 'on',
            fullScreenAlignForce: 'off',
            minFullScreenHeight: 0,
            hideNavDelayOnMobile: 1500,

            hideThumbsOnMobile: 'off',
            hideBulletsOnMobile: 'off',
            hideArrowsOnMobile: 'off',
            hideThumbsUnderResolution: 0,

            hideSliderAtLimit: 0,
            hideCaptionAtLimit: 0,
            hideAllCaptionAtLilmit: 0,
            startWithSlide: 0,
            fullScreenOffsetContainer: ''
        });
    });
</script>
</body>
</html>
