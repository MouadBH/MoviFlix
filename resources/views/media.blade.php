@extends('layouts.master')
@section('title')
{{ $media->title }} -
@endsection
@section('content')


        <!-- =============== START OF MOVIE DETAIL INTRO =============== -->
        <section class="movie-detail-intro overlay-gradient ptb100" style="background: url({{ $media->cover }});">
        </section>
        <!-- =============== END OF MOVIE DETAIL INTRO =============== -->



        <!-- =============== START OF MOVIE DETAIL INTRO 2 =============== -->
        <section class="movie-detail-intro2">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                      <div class="col-md-4">  
                            <div class="movie-poster">
                                <img src="{{ $media->poster }}" alt="">

                                <a href="{{ $media->trailer }}" class="play-video">
                                    <i class="fa fa-play"></i>
                                </a>
                            </div>
                        </div>
                            <div class="movie-details col-md-8">
                                <h3 class="title">{{ $media->title }} </h3>

                                <ul class="movie-subtext">
                                    <li>{{ $media->type }}</li>
                                    <li>{{ $media->time }}</li>
                                    <li>{{ $media->genre }}</li>
                                    <li>{{ $media->release }}</li>
                                </ul>

                                <a href="#report-popup" class="btn btn-main btn-effect login-btn popup-with-zoom-anim">Report</a>
                                @if(!empty($movielater->movie_id))
                                    @if($media->id == $movielater->movie_id && Auth::user()->id == $movielater->user_id)
                                        <!-- Watch Later Button -->
                                        <span id="wl_button_holder"></span>
                                
                                        <div id="deleteWa" style="display: none;">
                                            <button onclick="DeleteFromWatchLater()" id="deleteFromWatch" class="btn btn-main btn-effect" data-toggle="tooltip" data-placement="top" title="Remove from watch later list"><i class="fa fa-check-circle-o" style="font-size: 14px; "></i> I watch it</button>
                                        </div>
                                        
                                        <div id="addWa" style="display: none;">
                                            <button onclick="AddToWatchLater()" id="addToWatch" class="btn btn-main btn-effect"><i class="fa fa-clock-o" style="font-size: 14px; "></i> watch later</button>
                                        </div>
                                    @else
                                        <!-- Watch Later Button -->
                                        <span id="wl_button_holder"></span>
                                
                                        <div id="deleteWa" style="display: none;">
                                            <button onclick="DeleteFromWatchLater()" id="deleteFromWatch" class="btn btn-main btn-effect" data-toggle="tooltip" data-placement="top" title="Remove from watch later list"><i class="fa fa-check-circle-o" style="font-size: 14px; "></i> I watch it</button>
                                        </div>
                                        
                                        <div id="addWa" style="display: none;">
                                            <button onclick="AddToWatchLater()" id="addToWatch" class="btn btn-main btn-effect"><i class="fa fa-clock-o" style="font-size: 14px; "></i> watch later</button>
                                        </div>
                                    @endif
                                @else
                                    <!-- Watch Later Button -->
                                        <span id="wl_button_holder"></span>
                                
                                        <div id="deleteWa" style="display: none;">
                                            <button onclick="DeleteFromWatchLater()" id="deleteFromWatch" class="btn btn-main btn-effect" data-toggle="tooltip" data-placement="top" title="Remove from watch later list"><i class="fa fa-check-circle-o" style="font-size: 14px; "></i> I watch it</button>
                                        </div>
                                        
                                        <div id="addWa" style="display: none;">
                                            <button onclick="AddToWatchLater()" id="addToWatch" class="btn btn-main btn-effect"><i class="fa fa-clock-o" style="font-size: 14px; "></i> watch later</button>
                                        </div>
                                @endif
                                
                                @if(!empty($isFav->movie_id))
                                    @if(empty($ofUser->user_id))
                                        <!-- Favorite Button -->
                                    <span id="fav_button_holder"></span>
                                    
                                    <span id="favHold" style="display: none;">
                                        <a onclick="AddToFav()" class="btn myFav rate-movie" data-toggle="tooltip" data-placement="top" title="Add to my favorite list"><i class="icon-heart"></i></a>
                                    </span>
                                    
                                    <span  id="deleteHold" style="display: none;">
                                        <a onclick="DeleteFromFav()" class="btn deleteFav rate-movie" data-toggle="tooltip" data-placement="top" title="remove from your favorite list" style="color:#f33737;border-color: #f33737;opacity: 1;"><i class="icon-heart"></i></a>
                                    </span>
                                    @else
                                    @if($media->id == $isFav->movie_id && Auth::user()->id == $ofUser->user_id)
                                        <!-- Favorite Button -->
                                        <span id="fav_button_holder"></span>
                                
                                        <span id="deleteHold" style="display: none;">
                                            <a onclick="DeleteFromFav()" class="btn deleteFav rate-movie" data-toggle="tooltip" data-placement="top" title="remove from your favorite list" style="color:#f33737;border-color: #f33737;opacity: 1;"><i class="icon-heart"></i></a>
                                        </span>
                                
                                        <span id="favHold" style="display: none;">
                                            <a onclick="AddToFav()" class="btn myFav rate-movie" data-toggle="tooltip" data-placement="top" title="Add to my favorite list" ><i class="icon-heart"></i></a>
                                        </span>
                                    @else
                                        <!-- Favorite Button -->
                                        <span id="fav_button_holder"></span>
                                
                                        <span id="favHold" style="display: none;">
                                            <a onclick="AddToFav()" class="btn myFav rate-movie" data-toggle="tooltip" data-placement="top" title="Add to my favorite list"><i class="icon-heart"></i></a>
                                        </span>
                                    
                                        <span  id="deleteHold" style="display: none;">
                                            <a onclick="DeleteFromFav()" class="btn deleteFav rate-movie" data-toggle="tooltip" data-placement="top" title="remove from your favorite list" style="color:#f33737;border-color: #f33737;opacity: 1;"><i class="icon-heart"></i></a>
                                        </span>
                                    @endif
                                    @endif
                                @else
                                    <!-- Favorite Button -->
                                    <span id="fav_button_holder"></span>
                                    
                                    <span id="favHold" style="display: none;">
                                        <a onclick="AddToFav()" class="btn myFav rate-movie" data-toggle="tooltip" data-placement="top" title="Add to my favorite list"><i class="icon-heart"></i></a>
                                    </span>
                                    
                                    <span  id="deleteHold" style="display: none;">
                                        <a onclick="DeleteFromFav()" class="btn deleteFav rate-movie" data-toggle="tooltip" data-placement="top" title="remove from your favorite list" style="color:#f33737;border-color: #f33737;opacity: 1;"><i class="icon-heart"></i></a>
                                    </span>
                                @endif
    
                                <div class="rating mt10">
                                            <i class="fa fa-star"></i>
                                    <span>{{ $media->rank }}/10 IMDb</span>
                                </div>
                            </div>
                        <div class="clearfix"></div>

                    </div>
                </div>
            </div>
        </section>
        <!-- =============== End OF MOVIE DETAIL INTRO 2 =============== -->


        <!-- =============== START OF MOVIE DETAIL MAIN SECTION =============== -->
        <section class="movie-detail-main ptb100">
            <div class="container">

                <div class="row">
                    <!-- Start of Movie Main -->
                    <div class="col-lg-8 col-sm-12">
                        <div class="inner pr50">

                            <!-- Storyline -->
                            <div class="storyline">
                                <h3 class="title">Storyline</h3>

                                <p>{{ $media->story }}</p>
                            </div>

                        </div>
                    </div>
                    <!-- End of Movie Main -->


                    <!-- Start of Sidebar -->
                    <div class="col-lg-4 col-sm-12">
                        <div class="sidebar">

                            <!-- Start of Details Widget -->
                            <aside class="widget widget-movie-details">
                                <h3 class="title">Details</h3>

                                <ul>
                                    <li><strong>Release date: </strong>{{ $media->release }}</li>
                                    <li><strong>Director: </strong><a href="#">{{ $media->director }}</a></li>
                                    <li><strong>Language: </strong>{{ $media->language }}</li>
                                    <li>
                                        <a href="{{ $media->stremlink }}">
                                            <button class="btn btn-main btn-effect"><i class="fa fa-download fa-5x"></i> Direct Download </button>
                                        </a>
                                    </li>
                                </ul>
                            </aside>
                            <!-- End of Details Widget -->


                        </div>
                    </div>
                    <!-- End of Sidebar -->
                </div>

            </div>
        </section>
        <!-- =============== END OF MOVIE DETAIL MAIN SECTION =============== -->

    
        <!-- =============== START OF MOVIE DETAIL MAIN SECTION =============== -->
        <section class="movie-detail-main bg-light ptb20">
            <div class="container">

                <div class="row">
                    <!-- Start of Movie Main -->
                    <div class="col-lg-12 col-sm-12">
                        <div class="inner">

                            <!-- Media -->
                            <div class="movie-media ">
                                <h3 class="title"> Videos</h3>
                                <div class="container">
                                    <video id="my-video" class="video-js vjs-sublime-skin vjs-big-play-centered embed-responsive-item" controls preload="auto" width="1080" height="500" 
                                      poster="{{ $media->cover }}" data-setup="{}">
                                        <source src="{{ $media->stremlink }}" type='video/mp4'>
                                        <track kind='captions' src='{{ asset("storage/$media->subtitle") }}' srclang='ar' label='Arabic' default />
                                        <p class="vjs-no-js">
                                          To view this video please enable JavaScript, and consider upgrading to a web browser that
                                          <a href="https://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
                                        </p>
                                      </video>
                                    
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- End of Movie Main -->
                </div>

            </div>
        </section>
        <!-- =============== END OF MOVIE DETAIL MAIN SECTION =============== -->


        <!-- =============== START OF RECOMMENDED MOVIES SECTION =============== -->
        <section class="recommended-movies ptb100">
            <div class="container">
              <div id="disqus_thread"></div>
            </div>
        </section>
        <!-- =============== END OF RECOMMENDED MOVIES SECTION =============== -->

        <!-- =============== START OF LOGIN & REGISTER POPUP =============== -->
    <div id="report-popup" class="small-dialog zoom-anim-dialog mfp-hide">

        <!-- ===== Start of Signin wrapper ===== -->
        <div class="signin-wrapper">
            <div class="small-dialog-headline">
                <h4 class="text-center">Report</h4>
            </div>


            <div class="small-dialog-content">

                <!-- Start of Login form -->
                <form action="{{ url('movie/'.$media->slug) }}" method="post">
                    @csrf
                    <p class="status"></p>
                    <input type="hidden" name="movie_id" value="{{ $media->id }}" />
                    <div class="form-group">
                        <label for="username">What is Your Issue?</label>
                        <textarea class="form-control" name="reason" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-main btn-effect nomargin">
				            Send it!
                        </button>
                    </div>
                </form>
                <!-- End of Login form -->


            </div>

        </div>
        <!-- ===== End of Signin wrapper ===== -->
    </div>
    <!-- =============== END OF LOGIN & REGISTER POPUP =============== -->


@endsection