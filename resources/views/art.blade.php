@extends('layouts.master')
@section('title')
{{$art->title}} -
@endsection

@section('content')
<!-- =============== START OF PAGE HEADER =============== -->
        <section class="page-header overlay-gradient" style="background: url({{ asset('storage/'.$art->image) }});    background-repeat: no-repeat;background-size: cover;background-attachment: fixed;padding: 150px 0;background-position: center;">
            <div class="container" style="margin-top: 58px;">
                <div class="inner">
                    <h1 class="title">{{ $art->title }}</h1>
                    
                </div>
            </div>
        </section>
        <!-- =============== END OF PAGE HEADER =============== -->

        <!-- =============== START OF MAIN =============== -->
        <main class="blog-detail ptb100">
            <div class="container">

                <!-- Start of Row -->
                <div class="row justify-content-center">
                    <div class="col-md-8 col-sm-12">

                        <!-- Start of Blog Post -->
                        <article class="blog-post-detail">

                            <!-- Image 
                            <div class="blog-thumb">
                                <img src="{{ asset('storage/'.$art->image) }}" alt="">
                            </div>-->

                            <!-- Content -->
                            <div class="post-content">
                                <h3 class="title">
                                    <a href="blog-post-detail.html">
                                        {{ $art->title }}
                                    </a>
                                </h3>

                                <ul class="post-meta">
                                    <li>{{ $art->created_at->format('M j, Y') }}</li>
                                    <li><{{ $art->user->name }}</li>
                                    <li><a href="{{ route('blog') }}/{{ $art->slug }}#disqus_thread">Comment</a></li>
                                </ul>

                                {!! $art->body !!}


                        </article>
                        <!-- End of Blog Post -->

                        <hr class="op-5 mtb50">

                        <!-- Start of Blog Post Comments -->
                        <div class="comments">
                            <h3 class="title">Comments</h3>
                            <div id="disqus_thread"></div>
                        </div>
                        <!-- End of Blog Post Comments -->
                    </div>
                </div>
                <!-- End of Row -->

            </div>
        </main>
        <!-- =============== END OF MAIN =============== -->



@endsection