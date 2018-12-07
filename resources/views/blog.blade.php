@extends('layouts.master')
@section('title')
Blog -
@endsection
@section('content')
<!-- =============== START OF PAGE HEADER =============== -->
        <section class="page-header overlay-gradient" style="background: url({{ asset('assets/images/slider/blog.jpeg') }});background-size: cover;background-attachment: fixed;background-position: center;">
            <div class="container" style="margin-top: 58px;">
                <div class="inner">
                    <h1 class="title">Blog</h1>
                    
                </div>
            </div>
        </section>
        <!-- =============== END OF PAGE HEADER =============== -->
<main class="blog-page ptb100">
    <div class="container">

        <div class="row justify-content-center">
            <!-- Start of Blog Posts -->
             <div class="col-md-8 col-sm-12">
                @foreach($news as $art)
                    <!-- Start of Blog Post 1 -->
                        <article class="blog-post">

                            <!-- Image -->
                            <div class="blog-thumb">
                                <a href="{{ route('blog') }}/{{ $art->slug }}" class="post-img hover-link">
                                    <img src="{{ asset('storage/'.$art->image) }}" alt="{{ $art->title }}">
                                </a>
                            </div>

                            <!-- Content -->
                            <div class="post-content">
                                <h3 class="title">
                                    <a href="{{ route('blog') }}/{{ $art->slug }}">
                                        {{ $art->title }}
                                    </a>
                                </h3>

                                <ul class="post-meta">
                                    <li> {{ $art->created_at->format('M j, Y') }}</li>                           
                                    <li> <a href="{{ route('blog') }}/{{ $art->slug }}#disqus_thread">Comment</a> </li>                               
                                </ul>

                                <p>{!! str_limit(strip_tags($art->body), $limit = 180, $end = '...') !!}</p>

                                <a href="{{ route('blog') }}/{{ $art->slug }}" class="read-more">
                                    Read More <i class="fa fa-angle-right"></i>
                                </a>
                            </div>

                        </article>
                        <!-- End of Blog Post 1 -->
     
                @endforeach
            </div>
                
        </div>
        <!-- Start of Pagination -->
                {{ $news->links() }}
        <!-- End of Pagination -->
    </div>
</main>

@endsection