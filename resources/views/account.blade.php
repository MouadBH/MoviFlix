@extends('layouts.master')

@section('title')
{{Auth::user()->name}} Account -
@endsection

@section('content')
<!-- =============== START OF PAGE HEADER =============== -->
        <section class="page-header overlay-gradient" style="background: url({{ asset('assets/images/posters/movie-collection.jpg') }});background-size: cover;background-attachment: fixed;">
            <div class="container" style="margin-top: 58px;">
                <div class="inner">
                    <div class="row">
                    <div class="col-md-2" id="after-upload-user">
                        <img src="{{ asset('storage/'.Auth::user()->user_img) }}" alt="..." class="img-circle img-responsive" height="200" width="200" style="border-radius: 50%;border: 5px solid #ffffff29;">
                    </div>
                    <div class="col-md-10 pt50 ">
                        <h2 class="title" style="text-align: left;">{{ Auth::user()->name }}</h2>
                        <a href="{{ route('account') }}" class="btn btn-main btn-effect" style="background-color: #ffffff29;"> account</a>
                        <a href="{{ route('favorite') }}" class="btn btn-main btn-effect" style="background-color: #ffffff29;"> Favorite</a>
                        <a href="{{ route('watchlater') }}" class="btn btn-main btn-effect" style="background-color: #ffffff29;"> watch later</a>
                    </div>
                </div>
                </div>
            </div>
        </section>
        <!-- =============== END OF PAGE HEADER =============== -->
        @if(\Request::is('account/watch-later'))
            @include('layouts.watchlater')
        @elseif(\Request::is('account/favorite'))
            @include('layouts.favorite')
        @else
            
            <main class="ptb100">
                <div class="container">

                    
                    <!-- Start of Movie List -->
                    <div class="row mb-5">
                        <!-- Watch Later Item -->
                        <div class="col-md-12 col-sm-12">
                            <div class="plan-form">
                                        <h4 class="mb-3">Settings</h4>
                                        
                                        <form action="account/edit/settings" method="post" class="needs-validation col-md-9 col-sm-12" style="margin: 0 auto;" novalidate="">
                                          @csrf
                                            <input type="hidden" name="_method" value="PUT">
                                              <div class="col-md-12 mb-3">
                                                <label for="firstName">Your Name</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                      <span class="input-group-text"><i class="fa  fa-pencil"></i></span>
                                                    </div>
                                                    <input type="text" name="username" class="form-control" id="username" placeholder="Username" value="{{ Auth::user()->name }}" required="">
                                                    <div class="invalid-feedback" style="width: 100%;">
                                                        Your username is required.
                                                    </div>
                                              </div>
                                              </div>

                                            <div class="col-md-12 mb-3">
                                              <label for="username">E-mail</label>
                                              <div class="input-group">
                                                <div class="input-group-prepend">
                                                  <span class="input-group-text">@</span>
                                                </div>
                                                <input type="email" name="email" class="form-control" id="username" placeholder="Your E-mail" value="{{ Auth::user()->email }}" required="">
                                                <div class="invalid-feedback" style="width: 100%;">
                                                  Your username is required.
                                                </div>
                                              </div>
                                            </div>   
                                            
                                            <button class="btn btn-main btn-effect" type="submit">save change</button>
                                          </form>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-5">
                        <!-- Watch Later Item -->
                        <div class="col-md-12 col-sm-12">
                            <div class="plan-form">
                                        <h4 class="mb-3">Change Password</h4>
                                        
                                        <form action="account/edit/password" method="post" class="needs-validation col-md-9 col-sm-12" style="margin: 0 auto;" novalidate="">
                                          @csrf
                                            <input type="hidden" name="_method" value="PUT">
                                              <div class="col-md-12 mb-3">
                                                <label for="firstName">Current Password</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                      <span class="input-group-text"><i class="fa fa-expeditedssl"></i></span>
                                                    </div>
                                                    <input type="password" name="old" class="form-control" id="username" placeholder="Username" required="">
                                                    <div class="invalid-feedback" style="width: 100%;">
                                                        Your username is required.
                                                    </div>
                                              </div>
                                              </div>

                                            <div class="col-md-12 mb-3">
                                              <label for="username">New One</label>
                                              <div class="input-group">
                                                <div class="input-group-prepend">
                                                  <span class="input-group-text"><i class="fa fa-expeditedssl"></i></span>
                                                </div>
                                                <input type="password" name="newpass" class="form-control" id="username" placeholder="Username" required="">
                                                <div class="invalid-feedback" style="width: 100%;">
                                                  Your username is required.
                                                </div>
                                              </div>
                                            </div> 

                                            <div class="col-md-12 mb-3">
                                              <label for="username">Repeat it!</label>
                                              <div class="input-group">
                                                <div class="input-group-prepend">
                                                  <span class="input-group-text"><i class="fa fa-expeditedssl"></i></span>
                                                </div>
                                                <input type="password" name="repass" class="form-control" id="username" placeholder="Username" required="">
                                                <div class="invalid-feedback" style="width: 100%;">
                                                  Your username is required.
                                                </div>
                                              </div>
                                            </div>   
                                            
                                            <button class="btn btn-main btn-effect" type="submit">save change</button>
                                          </form>
                            </div>
                        </div>
                    </div>


                    <div class="row mb-5">
                        <!-- Watch Later Item -->
                        <div class="col-md-12 col-sm-12">
                            <div class="plan-form">
                                <h4 class="mb-3">Change Password </h4>
                                  <div class="row" id="UploadArea">
                                    <div class="dropzone col-md-8 offset-md-2"  onclick="document.getElementById('upload').click()">
                                      <div class="dzmsg">
                                        Drop files here or click to upload.
                                      </div>
                                    </div>
                                  </div>
                                    <div class="row" id="CropArea" style="display: none;">
                                      <div class="col-md-8 offset-md-2">
                                        <div id="upload-demo" style="width:100%"></div>
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-md-4 inputDnD" style="padding-top:30px;">
                                        <input type="file" id="upload" class="form-control-file text-primary font-weight-bold" onchange="readUrl(this)" style="display: none;">
                                        <button class="btn btn-success upload-result">Upload Image</button>
                                      </div>
                                    </div>
                            </div>
                        </div>
                    </div>


                </div>
            </main>


        @endif
        
        
        
@endsection