@extends('layouts.master')
@section('title')

@endsection
@section('slider')
<section id="slider" class="hero-slider">
            <div class="rev-slider-wrapper fullwidthbanner-container overlay-gradient">
                <!-- Start REVOLUTION SLIDER 5.4.1 fullwidth mode -->
                <div id="fullwidth-slider" class="rev_slider fullwidthabanner" style="display:none" data-version="5.4.1">
                    <ul>

                        <!-- ===== SLIDE NR. 1 ===== -->
                        <li data-transition="fade">
                            <!-- MAIN IMAGE -->
                            <img src="{{ asset('assets/images/slider/movie-collection.jpg') }}"
                                 alt="Image"
                                 title="slider-bg"
                                 data-bgposition="center center"
                                 data-bgfit="cover"
                                 data-bgrepeat="no-repeat"
                                 data-bgparallax="10"
                                 class="rev-slidebg"
                                 data-no-retina="">
                             <!-- LAYER NR. 1 -->
                            <div class="tp-caption tp-resizeme"
                                 data-x="center"
                                 data-hoffset=""
                                 data-y="middle"
                                 data-voffset="['-30','-30','-30','-30']"
                                 data-responsive_offset="on"
                                 data-fontsize="['60','50','40','30']"
                                 data-lineheight="['60','50','40','30']"
                                 data-whitespace="nowrap"
                                 data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                                 style="z-index: 5; color: #fff; font-weight: 900;">WELCOME TO MOVIFLIX
                            </div>


                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption tp-resizeme"
                                 data-x="center"
                                 data-hoffset=""
                                 data-y="middle"
                                 data-voffset="['60','60','60','40']"
                                 data-width="[1200, 992, 768, 98%]"
                                 data-responsive_offset="on"
                                 data-whitespace="nowrap"
                                 data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                                 style="z-index: 5; color: #fff; font-weight: 900;">

                                <!-- ===== START OF SEARCH FORM ===== -->
                                <form action="search" method="GET" id="search-form-1">
                                    <div class="row justify-content-center">
                                        <div class="col-md-8 col-sm-10 col-12">
                                            <div class="form-group">
                                                <input name="search-keyword" type="text" id="search-keyword" value="" class="form-control" placeholder="Enter Movies or Series Title">
                                                <button type="submit" class="btn btn-main btn-effect"><i class="fa fa-search"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <!-- ===== END OF SEARCH FORM ===== -->

                            </div>
                        </li>

                    </ul>
                </div>
                <!-- End REVOLUTION SLIDER 5.4.1 fullwidth mode -->
            </div>
            <!-- ===== END OF REV SLIDER WRAPPER ===== -->

        </section>
@endsection

@section('moste_watched')
<section class="latest-movies ptb100">
            <div class="container">

                <!-- Start of row -->
                <div class="row">
                    <div class="col-md-8">
                        <h3 class="title">Moste watched </h3>
                    </div>


                    <div class="col-md-4 align-self-center text-right">
                        <a href="{{ route('movies') }}" class="btn btn-icon btn-main btn-effect">
                            view all
                            <i class="ti-angle-double-right"></i>
                        </a>
                    </div>
                </div>
                <!-- End of row -->

                
                <!-- Start of Latest Movies Slider -->
                <div class="owl-carousel latest-movies-slider mt20">
                    @foreach($MostViewedWeek as $aMovie)
                    <div class="item">
                        <!-- Start of Movie Box -->
                        <div class="movie-box-1">

                            <!-- Start of Poster -->
                            <div class="poster">
                                <img src="{{ $aMovie->poster }}" alt="">
                            </div>
                            <!-- End of Poster -->

                            <!-- Start of Buttons -->
                            <div class="buttons">
                                <a href="{{ $aMovie->trailer }}" class="play-video">
                                    <i class="fa fa-play"></i>
                                </a>
                            </div>
                            <!-- End of Buttons -->

                            <!-- Start of Movie Details -->
                            <div class="movie-details">
                                <h4 class="movie-title">
                                    <a href="movie/{{ $aMovie->slug }}">{{ $aMovie->title }}</a>
                                </h4>
                                <span class="released">{{ $aMovie->release }}</span>
                            </div>
                            <!-- End of Movie Details -->

                            <!-- Start of Rating -->
                            <div class="stars">
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                </div>
                                <span>{{ $aMovie->rank }} / 10</span>
                            </div>
                            <!-- End of Rating -->

                        </div>
                        <!-- End of Movie Box -->
                    </div>
                    @endforeach
                </div>
                <!-- End of Latest Movies Slider -->


            </div>
        </section>
@endsection

@section('movies')
<section class="latest-tvshows ">
            <div class="container">

                <!-- Start of row -->
                <div class="row">
                    <div class="col-md-8 col-sm-12">
                        <h3 class="title">Movies</h3>
                    </div>


                    <div class="col-md-4 col-sm-12 align-self-center text-right">
                        <a href="movies" class="btn btn-icon btn-main btn-effect">
                            view all
                            <i class="ti-angle-double-right"></i>
                        </a>
                    </div>
                </div>
                <!-- End of row -->
                
                <!-- Start of Movie List -->
                <div class="row">
                    @foreach($media->slice(0, 9) as $movie)
                    <!-- Movie List Item -->
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="movie-box-3 mb30">
                            <div class="listing-container">

                                <!-- Movie List Image -->
                                <div class="listing-image">
                                    <!-- Image -->
                                    <img src="{{ $movie->poster }}" alt="{{ $movie->title }}">
                                </div>

                                <!-- Movie List Content -->
                                <div class="listing-content">
                                    <div class="inner">

                                        <!-- Play Button -->
                                        <div class="play-btn">
                                            <a href="{{ $movie->trailer }}" class="play-video">
                                                <i class="fa fa-play"></i>
                                            </a>
                                        </div>

                                        <h2 class="title">{{ $movie->title }}</h2>

                                        <!-- Rating -->
                                        <div class="stars">
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <span>{{ $movie->rank }}/10</span>
                                                <span class="category">{{ $movie->genre }}</span>
                                            </div>
                                        </div>

                                        <p>
                                           {{ str_limit($movie->story, $limit = 100, $end = '...')}}</p>

                                        <a href="movie/{{ $movie->slug }}" class="btn btn-main btn-effect">Watch Now</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                
            </div>            
        </section>                      
@endsection

@section('latest_news')

<!-- =============== END OF COUNTER SECTION =============== -->
        <section class="counter bg-main-gradient ptb50 text-center">
            <div class="container">
                <div class="row">

                    <!-- 1st Count up item -->
                    <div class="col-md-2 col-sm-12">
                        
                    </div>

                    <!-- 2nd Count up item -->
                    <div class="col-md-8 col-sm-12">
                        <blockquote class="default">
                          <span class="Cdefault">I’m going to make him an offer he can’t refuse</span> <br> The Godfather, 1972
                        </blockquote>
                    </div>

                    

                    <!-- 3rd Count up item -->
                    <div class="col-md-2 col-sm-12">
                       
                    </div>

                </div>
            </div>
        </section>
        <!-- =============== END OF COUNTER SECTION =============== -->

<section class="blog bg-light ptb100">
            <div class="container">

                <!-- Start of row -->
                <div class="row justify-content-center">
                    <div class="col-md-7 text-center">
                        <h2 class="title">Latest News</h2>
                        
                    </div>
                </div>
                <!-- End of row -->


                <!-- Start of row -->
                <div class="row mt50">
                    @foreach($news->slice(0, 3) as $art)
                    <!-- Blog Item -->
                    <div class="col-md-4">
                        <div class="bloglist-post-holder shadow-hover">

                            <!-- Blog Post Thumbnail -->
                            <a href="blog/{{ $art->slug }}" class="bloglist-thumb-link hover-link">
                                <div class="bloglist-post-thumbnail" style="background: url({{ asset('storage/'.$art->image) }})"></div>
                            </a>

                            <!-- Blog Post Text Wrapper -->
                            <div class="bloglist-text-wrapper">
                                <!-- Author Avatar -->
                                <span class="circle-img bloglist-avatar">
                                    <img src="{{ asset('storage/'.$art->user->user_img) }}" title="{{ $art->user->name }}" width="50" height="50" alt="{{ $art->user->name }} img">
                                </span>

                                <h4 class="bloglist-title">
                                    <a href="blog/{{ $art->slug }}">{{ $art->title }}</a>
                                </h4>

                                <div class="bloglist-meta">
                                    <i class="fa fa-calendar"></i> {{ $art->created_at->format('M j, Y') }}
                                </div>

                                <div class="bloglist-excerpt">
                                    <p>{!! str_limit(strip_tags($art->body), $limit = 150, $end = '...') !!}</p>
                                    <a href="blog/{{ $art->slug }}" class="btn btn-main btn-effect">read more</a>
                                </div>
                            </div>

                        </div>
                    </div>
                    @endforeach

                </div>
                <!-- End of row -->

            </div>
        </section>        
@endsection

