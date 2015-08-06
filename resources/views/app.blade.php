<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Agani">
    <meta name="keywords" content="Demo keywords, agani">
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico"/>
    <title>Agani.ru</title>

    <link href="{{ asset('/css/styles.min.css') }}" rel="stylesheet">

    {{--Add additional js into head from page view--}}
    @yield('jsHeader')

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

@include('partials._preloader')

<!--header-->
@include('partials._header')
<!--/header-->


@yield('content')

<!--Footer-->
@include('partials._footer')
<!--/Footer-->


<!--Scripts-->
<script src="{{ asset('/js/script.min.js') }}"></script>

<script>
    $(document).ready(function () {

        $(".dropdown-menu li a").on('click',function(){
           $(this).parent().removeClass('active');
           console.log($(this).parent().parent().parent().find('button').text($(this).text()).append('<span class="caret"></span>'));
        });

        $(".additional").on('click', function () {
            $(".additional-search").stop().slideToggle();
            $(".overlay").stop().fadeToggle();
        });

        $(".search-header").on('click', function () {
            $(".additional-search").stop().slideToggle();
            $(".overlay").stop().fadeToggle();
        });

        $("#main-slider").owlCarousel({
            nav: false,
            slideSpeed: 100,
            paginationSpeed: 400,
            animateOut: 'fadeOut',
            animateIn: 'fadeIn',
            autoplay: true,
            dots: false,
            navText: ['<', '>'],
            autoplayTimeout: 4000,
            loop: true,
            autoplayHoverPause: true,
            items: 1,
            itemsDesktop: false,
            itemsDesktopSmall: false,
            itemsTablet: false,
            itemsMobile: false

        });

        $("#recommend-ads-slider").owlCarousel({
            loop: true,
            nav: true,
            dots: false,
            navText: ['', ''],
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 4
                }
            }
        });

        /*Hide preloader on docready*/
        $(window).on('load', function () {
            setTimeout(function () {
                $('#preloader').hide();
            }, 1000);
        });
    });

</script>
</body>
</html>
