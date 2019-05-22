@extends('layouts.master')
@section('title')
Movies -
@endsection
@section('content')
<!-- =============== START OF PAGE HEADER =============== -->
        <section class="page-header overlay-gradient" style="background: url(assets/images/posters/movie-collection.jpg);background-size: cover;background-attachment: fixed;background-position: center;">
            <div class="container" style="margin-top: 58px;">
                <div class="inner">
                    <h2 class="title">Movies</h2>
                </div>
            </div>
        </section>
        <!-- =============== END OF PAGE HEADER =============== -->
<section class="latest-tvshows ptb100">
            <div class="container">
                
                <!-- Start of Movie List -->
                <div class="row">
                    @forelse($media as $movie)
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

                                        <a href="{{ url('movie/' . $movie->slug) }}" class="btn btn-main btn-effect">Watch Now</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    @empty
                        <p>No Details found. Try to search again !</p>
                    @endforelse
                </div>
                <!-- Start of Pagination -->
                {{ $media->links() }}
                <!-- End of Pagination -->
            </div>            
        </section>                      

@endsection
