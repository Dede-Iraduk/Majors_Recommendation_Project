<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <title>U.C.R</title>

    <!-- Bootstrap core CSS -->
    <link href={{asset('css/bootstrap.min.css')}} rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href={{asset('css/fontawesome.css')}}>
    <link rel="stylesheet" href={{asset('css/templatemo-edu-meeting.css')}}>
    <link rel="stylesheet" href={{asset('css/owl.css')}}>
    <link rel="stylesheet" href={{asset('css/lightbox.css')}}>
    <link href="/css/app.css" rel="stylesheet"> --}}
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/6d51c26809.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"
        integrity="sha512-37T7leoNS06R80c8Ulq7cdCDU5MNQBwlYoy1TX/WUsLFC2eYNqtKlV0QjH7r8JpG/S0GUMZwebnVFLPd6SU5yg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/additional-methods.min.js"> </script>
    <script src="https://kit.fontawesome.com/347b9e054d.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,700&display=swap" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

    <title>{{$title ?? 'U.C.R'}}</title>

    <script>
        tailwind.config = {
          theme: {
            extend: {
                colors: {
                "blue-rich": "#0597F2",
                'esomagreen': '#F2A81D',
                'esomablue': '#014773',
                'esomawhite': 'rgb(255 255 255)',
                'esomagrey': '#757575',
                'esomaoffwhite': '#F8F8F8',
                'esomalightblue': '#0597F2'
            },
            screens: {
                xmd: "860px",
            },
            }
          }
        }
    </script>

    <script>

        $(document).ready(function(){
            $(".flash").fadeOut(6000);

        });
    </script>
</head>

<body>

    <!-- Sub Header -->
  

    @yield('userContent')
    

    <script src={{asset('jquery/jquery.min.js')}}></script>
    <script src={{asset('js/bootstrap.bundle.min.js')}}></script>

    <script src={{asset('js/isotope.min.js')}}></script>
    <script src={{asset('js/owl-carousel.js')}}></script>
    <script src={{asset('js/lightbox.js')}}></script>
    <script src={{asset('js/tabs.js')}}></script>
    <script src={{asset('js/video.js')}}></script>
    <script src={{asset('js/slick-slider.js')}}></script>
    <script src={{asset('js/custom.js')}}></script>
    <script>
        //according to loftblog tut
        $('.nav li:first').addClass('active');

        var showSection = function showSection(section, isAnimate) {
            var
                direction = section.replace(/#/, ''),
                reqSection = $('.section').filter('[data-section="' + direction + '"]'),
                reqSectionPos = reqSection.offset().top - 0;

            if (isAnimate) {
                $('body, html').animate({
                        scrollTop: reqSectionPos
                    },
                    800);
            } else {
                $('body, html').scrollTop(reqSectionPos);
            }

        };

        var checkSection = function checkSection() {
            $('.section').each(function() {
                var
                    $this = $(this),
                    topEdge = $this.offset().top - 80,
                    bottomEdge = topEdge + $this.height(),
                    wScroll = $(window).scrollTop();
                if (topEdge < wScroll && bottomEdge > wScroll) {
                    var
                        currentId = $this.data('section'),
                        reqLink = $('a').filter('[href*=\\#' + currentId + ']');
                    reqLink.closest('li').addClass('active').
                    siblings().removeClass('active');
                }
            });
        };

        $('.main-menu, .responsive-menu, .scroll-to-section').on('click', 'a', function(e) {
            e.preventDefault();
            showSection($(this).attr('href'), true);
        });

        $(window).scroll(function() {
            checkSection();
        });
    </script>
</body>