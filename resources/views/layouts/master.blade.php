<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">

    <!-- ===== Mobile viewport optimized ===== -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no">

    <!-- ===== Meta Tags - Description for Search Engine purposes ===== -->
    <meta name="description" content="{{ $info->description }}">
    <meta name="keywords" content="{{ $info->keyword }}">
    <meta name="author" content="{{ $info->author }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- ===== Website Title ===== -->
    <title> @yield('title') {{ $info->title }}</title>

    <!-- ===== Favicon & Different size apple touch icons ===== -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('assets/images/apple-touch-icon-iphone.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/images/apple-touch-icon-ipad.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('assets/images/apple-touch-icon-iphone-retina.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('assets/images/apple-touch-icon-ipad-retina.png') }}">
    <link rel="apple-touch-icon" sizes="167x167" href="{{ asset('assets/images/apple-touch-icon-ipad-pro.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/images/apple-touch-icon-iphone-6-plus.png') }}">
    <link rel="icon" sizes="192x192" href="{{ asset('assets/images/icon-hd.png') }}">
    <link rel="icon" sizes="128x128" href="{{ asset('assets/images/icon.png') }}">

    <!-- ===== Google Fonts ===== -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">

    <!-- ===== CSS links ===== -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/revolution/css/settings.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/revolution/css/layers.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/revolution/css/navigation.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/jquery.mmenu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link href="https://vjs.zencdn.net/7.2.3/video-js.css" rel="stylesheet">
    <link href="{{ asset('assets/css/videojs-watermark.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/croppie/croppie.css') }}" rel="stylesheet">
    
    <!-- toastr -->
    <link rel="stylesheet" href="{{ asset('assets/toastr/build/toastr.css') }}">

    <link type="text/css" rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.jssocials/1.4.0/jssocials.css" />
    <link type="text/css" rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.jssocials/1.4.0/jssocials-theme-flat.css" />
    <link type="text/css" rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.jssocials/1.4.0/jssocials-theme-classic.css" />
    <link type="text/css" rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.jssocials/1.4.0/jssocials-theme-minima.css" />
    <link type="text/css" rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.jssocials/1.4.0/jssocials-theme-plain.css" />
    

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsive.css') }}">

<style>
   .video-js .vjs-menu-button-inline.vjs-slider-active,.video-js .vjs-menu-button-inline:focus,.video-js .vjs-menu-button-inline:hover,.video-js.vjs-no-flex .vjs-menu-button-inline {
    width: 10em
}

.video-js .vjs-controls-disabled .vjs-big-play-button {
    display: none!important
}

.video-js .vjs-control {
    width: 3em
}

.video-js .vjs-menu-button-inline:before {
    width: 1.5em
}

.vjs-menu-button-inline .vjs-menu {
    left: 3em
}

.vjs-paused.vjs-has-started.video-js .vjs-big-play-button,.video-js.vjs-ended .vjs-big-play-button,.video-js.vjs-paused .vjs-big-play-button {
    display: block
}

.video-js .vjs-load-progress div,.vjs-seeking .vjs-big-play-button,.vjs-waiting .vjs-big-play-button {
    display: none!important
}

.video-js .vjs-mouse-display:after,.video-js .vjs-play-progress:after {
    padding: 0 .4em .3em
}

.video-js.vjs-ended .vjs-loading-spinner {
    display: none;
}

.video-js.vjs-ended .vjs-big-play-button {
    display: block !important;
}

video-js.vjs-ended .vjs-big-play-button,.video-js.vjs-paused .vjs-big-play-button,.vjs-paused.vjs-has-started.video-js .vjs-big-play-button {
    display: block
}

.video-js .vjs-big-play-button {
    top: 50%;
    left: 50%;
    margin-left: -1.5em;
    margin-top: -1em
}

.video-js .vjs-big-play-button {
    background: linear-gradient(to right,#9352b3 0,#a11f3c 100%);
    font-size: 2.5em;
    border-radius: 50%;
    height: 2em !important;
    line-height: 2em !important;
    margin-top: -1em !important
}

.video-js:hover .vjs-big-play-button,.video-js .vjs-big-play-button:focus,.video-js .vjs-big-play-button:active {
    background-color: rgba(44,151,222,0.9)
}

.video-js .vjs-loading-spinner {
    border-color: #a14f8c
}

.video-js .vjs-control-bar2 {
    background-color: transparent
}

.video-js .vjs-control-bar {
    background-color: rgba(0,0,0,0) !important;
    color: #ffffff;
    font-size: 13px
}

.video-js .vjs-play-progress,.video-js  .vjs-volume-level {
    background: linear-gradient(to right,#9352b3 0,#a11f3c 100%);
}

.video-js .vjs-big-play-button {
    height: 2em !important;
    width: 2em !important;
    line-height: 1.7em !important;
    margin-top: -1em !important;
    margin-left: -1em;
    border-width: 4px
}

.video-js .vjs-icon-play:before, .video-js .vjs-big-play-button:before {
    font-size: 40px;
}

.video-js  .vjs-progress-holder {
    font-size: 1.7em;
    border-radius: 10px;
}

.video-js .vjs-progress-holder .vjs-play-progress, .video-js .vjs-progress-holder .vjs-load-progress, .video-js .vjs-progress-holder .vjs-load-progress div, .video-js .vjs-slider,.vjs-volume-level {
    border-radius: 10px;
}

.video-js .vjs-load-progress {
    background: rgba(255,255,255,0.5);
}

.video-js, .video-js video, .vjs-poster, .video-js .vjs-tech {
    border-radius: 8px;
}
</style>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>


    <!-- =============== START OF PRELOADER =============== -->
    <div class="loading">
        <div class="loading-inner">
            <div class="loading-effect">
                <div class="object"></div>
            </div>
        </div>
    </div>
    <!-- =============== END OF PRELOADER =============== -->



    <!-- =============== START OF RESPONSIVE - MAIN NAV =============== -->
    <nav id="main-mobile-nav"></nav>
    <!-- =============== END OF RESPONSIVE - MAIN NAV =============== -->



    <!-- =============== START OF WRAPPER =============== -->
    <div class="wrapper">


        <!-- =============== START OF HEADER NAVIGATION =============== -->
        <!-- Insert the class "sticky" in the header if you want a sticky header -->
        @if(\Request::is('movie/*'))
            @include('layouts.navbar2')
        @else
            @include('layouts.navbar2')
        @endif
            
        <!-- =============== END OF HEADER NAVIGATION =============== -->
        
        <!-- =============== START OF SLIDER REVOLUTION SECTION =============== -->
        @yield('slider')
        <!-- =============== START OF SLIDER REVOLUTION SECTION =============== -->

        <!-- =============== START OF LATEST MOVIES SECTION =============== -->
        @yield('moste_watched')
        <!-- =============== END OF LATEST MOVIES SECTION =============== -->
        
        <!-- =============== START OF MOVIES SECTION =============== -->
        @yield('movies')
        <!-- =============== END OF MOVIES SECTION =============== -->
        
        <!-- =============== START OF SOME CONTENT SECTION =============== -->
        @yield('content')
        <!-- =============== END OF SOME CONTENT SECTION =============== -->

        <!-- =============== END OF BLOG SECTION =============== -->
        @yield('latest_news')
        <!-- =============== END OF BLOG SECTION =============== -->


        <!-- =============== END OF SUBSCRIBE SECTION =============== -->
        
        @yield('subscribe')<!-- =============== END OF SUBSCRIBE SECTION =============== -->


        <!-- =============== START OF FOOTER =============== -->
        @include('layouts.footer')
        <!-- =============== END OF FOOTER =============== -->

    </div>
    <!-- =============== END OF WRAPPER =============== -->




    <!-- =============== START OF GENERAL SEARCH WRAPPER =============== -->
    <div class="general-search-wrapper">
        <form class="general-search" role="search" method="get" action="{{ url('search') }}">
            @csrf
            <input type="text" name="search-keyword" placeholder="Type and hit enter...">
            <span id="general-search-close" class="ti-close toggle-search"></span>
        </form>
    </div>
    <!-- =============== END OF GENERAL SEARCH WRAPPER =============== -->


    <!-- ===== Start of Back to Top Button ===== -->
    <div id="backtotop">
        <a href="#"></a>
    </div>
    <!-- ===== End of Back to Top Button ===== -->



   <!-- ===== All Javascript at the bottom of the page for faster page loading ===== -->
    <script src="{{ asset('assets/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.ajaxchimp.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.mmenu.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.inview.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.countTo.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/headroom.js') }}"></script>
    <script src="{{ asset('assets/croppie/croppie.js') }}"></script>
    <script src="{{ asset('assets/js/vue.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    
    <!-- VideoJS script -->
    <script src="https://vjs.zencdn.net/7.2.3/video.js"></script>
    <script src="{{ asset('assets/js/videojs-watermark.js') }}"></script>
    <!-- Sharing libary (https://shr.one) -->
    <script src="https://cdn.shr.one/1.0.1/shr.js" crossorigin="anonymous"></script>
    
    <!-- toastr -->
    <script src="{{ asset('assets/toastr/toastr.js') }}"></script>
    
    <!-- Dusqus -->
    <script id="dsq-count-scr" src="//movify.disqus.com/count.js" async></script>
    <!-- ===== Slider Revolution core JavaScript files ===== -->
    <script type="text/javascript" src="{{ asset('assets/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>

    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery.jssocials/1.4.0/jssocials.min.js"></script>

    <!-- ===== Slider Revolution extension scripts ===== -->
    <script type="text/javascript" src="{{ asset('assets/revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/revolution/js/extensions/revolution.extension.carousel.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/revolution/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/revolution/js/extensions/revolution.extension.migration.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/revolution/js/extensions/revolution.extension.video.min.js') }}"></script>
    
    @if(session()->has('success'))
        <script type="text/javascript"> 
            toastr.success("{{ session()->get('success') }}", "Success") 
      </script>
      @endif
    @if(session()->has('info'))
      <script type="text/javascript"> 
            toastr.info("{{ session()->get('info') }}", "Oupps!!") 
      </script>
      @endif
    
    @if(!empty($isFav->movie_id))
        @if(empty($movielater->user_id))
            <script>
            //3
            $( document ).ready(function() {
               $("#fav_button_holder").html( $("#favHold").html() );
            });
        </script>
        @else
            @if($media->id == $isFav->movie_id && Auth::user()->id == $movielater->user_id)
                <script>
                    //1
                    $( document ).ready(function() {
                        $("#fav_button_holder").html( $("#deleteHold").html() );
                    });
                </script>
            @else
                <script>
                    //2
                    $( document ).ready(function() {
                        $("#fav_button_holder").html( $("#favHold").html() );
                    });
                </script>
            @endif
        @endif
        
    @else   
        <script>
            //3
            $( document ).ready(function() {
               $("#fav_button_holder").html( $("#favHold").html() );
            });
        </script>
    @endif
    
    @if(!empty($movielater->movie_id))
        @if($media->id == $movielater->movie_id && Auth::user()->id == $movielater->user_id)
            <script>
                //1
                $( document ).ready(function() {
                    $("#wl_button_holder").html( $("#deleteWa").html() );
                });
            </script>
        @else
            <script>
                //2
                $( document ).ready(function() {
                    $("#wl_button_holder").html( $("#addWa").html() );
                });
            </script>
        @endif
    @else   
        <script>
            //3
            $( document ).ready(function() {
               $("#wl_button_holder").html( $("#addWa").html() );
            });
        </script>
    @endif
    
    
    <script>
    toastr.options = {
          "closeButton": true,
          "debug": false,
          "newestOnTop": true,
          "progressBar": true,
          "rtl": false,
          "positionClass": "toast-top-right",
          "preventDuplicates": true,
          "onclick": null,
          "showDuration": 300,
          "hideDuration": 1000,
          "timeOut": 5000,
          "extendedTimeOut": 1000,
          "showEasing": "swing",
          "hideEasing": "linear",
          "showMethod": "fadeIn",
          "hideMethod": "fadeOut"
        }
    </script>

    @if(\Request::is('movie/*'))
    
        <script>
        (function(window, videojs) {
            var player = window.player = videojs('my-video');
                player.watermark({
                    image: '{{ asset("assets/images/logo-white.png") }}',
                    url: 'https://dotsub.com'
                });
        }(window, window.videojs));
        
        </script>
        @guest
            <script>
                function AddToFav() {
                    toastr.info("You need to login or create your account for this action :/", "Oupps!!")
                };
                function DeleteFromFav() {
                    toastr.info("You need to login or create your account for this action :/", "Oupps!!")
                };
                function AddToWatchLater() {
                    toastr.info("You need to login or create your account for this action :/", "Oupps!!")
                };
                function DeleteFromWatchLater() {
                    toastr.info("You need to login or create your account for this action :/", "Oupps!!")
                };
                
            </script>
        @else
        <script>
            function AddToFav() {
            $.ajaxSetup({
              headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
            });
            $.ajax({
                    url: '{{ Request::url() }}/addtofavorite',
                    type: 'POST',
                    data: {
                        "movie_id": "{{ $media->id }}"
                    }, 
                    success: function (result) {
                        toastr.success("This movie was added to your favorite list ", "Success");
                        //$(".myFav").attr("style", "color:#f33737;border-color: #f33737;opacity: 1;");
                        //$(".myFav").attr("class", "btn deleteFav rate-movie");
                        //$(".myFav").removeClass('btn myFav rate-movie').addClass('btn deleteFav rate-movie');
                        $("#fav_button_holder").html( $("#deleteHold").html() );
                    },
                    error: function (result) {
                        toastr.warning("We ran into an issue trying with this movie", "Error")
                    }
                });  
          };
            
            function DeleteFromFav() {
            $.ajaxSetup({
              headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
            });
            $.ajax({
                    url: '{{ Request::url() }}/deleteThisFav',
                    type: 'DELETE',
                    data: {
                        "movie_id": "{{ $media->id }}"
                    }, 
                    success: function (result) {
                        toastr.info("This movie was deleted from your favorite list  (y) ", "Warning");
                        //$(".deleteFav").attr("style", "");
                        //$(".deleteFav").attr("class", "btn myFav rate-movie");
                        //$(".deleteFav").removeClass('btn deleteFav rate-movie').addClass('btn myFav rate-movie');
                        $("#fav_button_holder").html( $("#favHold").html() );
                        
                    },
                    error: function (result) {
                        toastr.warning("We ran into an issue with this movie :/ ", "Error")
                    }
               // };  
          });
        }
        
            function AddToWatchLater() {
            $.ajaxSetup({
              headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
            });
            $.ajax({
                    url: '{{ Request::url() }}/addtowatch',
                    type: 'POST',
                    data: {
                        "movie_id": "{{ $media->id }}"
                    }, 
                    success: function (result) {
                        toastr.success("This movie was added to your watch later list ", "Success");
                        //$("#addToWatch").html('<i class="fa fa-check-circle-o" style="font-size: 14px; "></i> Watch it Later');
                        $("#wl_button_holder").html( $("#deleteWa").html() );
                    },
                    error: function (result) {
                        toastr.warning("We ran into an issue with this movie", "Error")
                    }
                });  
          };    
            
            function DeleteFromWatchLater() {
            $.ajaxSetup({
              headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
            });
            $.ajax({
                    url: '{{ Request::url() }}/soIwatchIt',
                    type: 'DELETE',
                    data: {
                        "movie_id": "{{ $media->id }}"
                    }, 
                    success: function (result) {
                        toastr.info("This movie was deleted from your watch later list (y) ", "Success");
                        //$("#deleteFromWatch").html('<i class="fa fa-clock-o" style="font-size: 14px; "></i> watch later');
                        $("#wl_button_holder").html( $("#addWa").html() );
                    },
                    error: function (result) {
                        toastr.warning("We ran into an issue with this movie :/ ", "Error")
                    }
                });  
          };
        
        </script>
        @endif
    @endif
    
<script type="text/javascript">


$.ajaxSetup({
headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
}
});


$uploadCrop = $('#upload-demo').croppie({
    enableExif: true,
    viewport: {
        width: 200,
        height: 200,
        type: 'circle'
    },
    boundary: {
        //width: 450,
        height: 310
    }
});

$('#upload').on('change', function () { 
    var reader = new FileReader();
    reader.onload = function (e) {
        $uploadCrop.croppie('bind', {
            url: e.target.result
        }).then(function(){
            console.log('jQuery bind complete');
        });
    }
    reader.readAsDataURL(this.files[0]);
});


$('.upload-result').on('click', function (ev) {
    $uploadCrop.croppie('result', {
        type: 'canvas',
        size: 'viewport'
    }).then(function (resp) {

        $.ajax({
            url: "{{ Request::url() }}/edit/image",
            type: "POST",
            data: {"image":resp},
            success: function (data) {
                html = '<img src="' + resp + '" alt="..." class="img-circle img-responsive" height="200" width="200" style="border-radius: 50%;border: 5px solid #ffffff29;">';

                $("#after-upload-user").html(html);

                toastr.success("Your profile picture has been updated", "Amazing")
            },
            error: function (result) {
                toastr.warning("We ran into an issue trying with this movie", "Error")
            }
        });
    });
});
function readUrl(input) {
  
  if (input.files && input.files[0]) {
    $("#CropArea").css("display", "block");
    $("#UploadArea").css("display", "none");
  }

}

</script>



</body>

</html>
