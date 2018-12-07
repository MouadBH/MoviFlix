@extends('layouts.master')
@section('title')
{{ $page->title }} -
@endsection
@section('content')
<!-- =============== START OF PAGE HEADER =============== -->
        <section class="page-header overlay-gradient" style="background: url({{ asset('assets/images/slider/movie-collection.jpg') }});    background-repeat: no-repeat;background-size: cover;background-attachment: fixed;padding: 100px 0;background-position: center;">
            <div class="container" style="margin-top: 58px;">
                <div class="inner">
                    <h1 class="title">{{ $page->title }}</h1>
                    
                </div>
            </div>
        </section>
        <!-- =============== END OF PAGE HEADER =============== -->

        <!-- =============== START OF MAIN =============== -->
        <main class="blog-detail ptb100">
            <div class="container">

                <!-- Start of Row -->
                <div class="row justify-content-center" style="webkit-box-shadow: 0 0 40px rgba(0,0,0,.1);-moz-box-shadow: 0 0 40px rgba(0,0,0,.1);box-shadow: 0 0 40px rgba(0,0,0,.1);border-bottom: 1px solid rgba(238,238,238,.5);padding: 30px 0px;transition: all .3s ease;">
                    <div class="col-md-10 col-sm-12">

                        <!-- Start of Blog Post -->
                        <article class="blog-post-detail">

                            <!-- Content -->
                            <div class="post-content">

                                {!! $page->body !!}

                                <!-- Start of Social Buttons -->
                                <hr class="op-5 mtb50">

                                <div class="mt30" style="margin: 0px auto; width: fit-content;">
                                    <ul class="social-btns">
                                        <!-- Social Media -->
                                        <li>
                                            <a href="#" class="social-btn-roll facebook">
                                                <div class="social-btn-roll-icons">
                                                    <i class="social-btn-roll-icon fa fa-facebook"></i>
                                                    <i class="social-btn-roll-icon fa fa-facebook"></i>
                                                </div>
                                            </a>
                                        </li>

                                        <!-- Social Media -->
                                        <li>
                                            <a href="#" class="social-btn-roll twitter">
                                                <div class="social-btn-roll-icons">
                                                    <i class="social-btn-roll-icon fa fa-twitter"></i>
                                                    <i class="social-btn-roll-icon fa fa-twitter"></i>
                                                </div>
                                            </a>
                                        </li>

                                        <!-- Social Media -->
                                        <li>
                                            <a href="#" class="social-btn-roll google-plus">
                                                <div class="social-btn-roll-icons">
                                                    <i class="social-btn-roll-icon fa fa-google-plus"></i>
                                                    <i class="social-btn-roll-icon fa fa-google-plus"></i>
                                                </div>
                                            </a>
                                        </li>

                                        <!-- Social Media -->
                                        <li>
                                            <a href="#" class="social-btn-roll instagram">
                                                <div class="social-btn-roll-icons">
                                                    <i class="social-btn-roll-icon fa fa-instagram"></i>
                                                    <i class="social-btn-roll-icon fa fa-instagram"></i>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- End of Social Buttons -->
                            </div>

                        </article>
                        <!-- End of Blog Post -->

                    </div>
                </div>
                <!-- End of Row -->

            </div>
        </main>
        <!-- =============== END OF MAIN =============== -->



@endsection