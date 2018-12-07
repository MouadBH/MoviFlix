<!-- =============== START OF MAIN =============== -->
        <main class="ptb100">
            <div class="container">

                
                <!-- Start of Movie List -->
                <div class="row">
                    @foreach($wlmedia as $movie)
                    <!-- Watch Later Item -->
                    <div class="col-md-12 col-sm-12">
                        <div class="watch-later-item">
                            <div class="listing-container">

                                <!-- Movie List Image -->
                                <div class="listing-image">
                                    <img src="{{ $movie->poster }}" class="img-shadow" alt="{{ $movie->title }}">
                                </div>

                                <!-- Movie List Content -->
                                <div class="listing-content">
                                    <div class="inner">
                                        <h3 class="title">{{ $movie->title }}</h3>

                                        <p>{{ str_limit($movie->story, $limit = 250, $end = '...')}}</p>

                                        <a href="{{ route('moviePage', ['slug' => $movie->slug]) }}" class="btn btn-main btn-effect">watch now</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    @endforeach
                </div>
                <!-- End of Movie List -->

            </div>
        </main>
        <!-- =============== END OF MAIN =============== -->
        <!-- Start of Pagination -->
            {{ $wlmedia->links() }}
        <!-- End of Pagination -->
    