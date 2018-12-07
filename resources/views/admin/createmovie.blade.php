@extends('admin.base.master')

@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Add New Movie
        <small>it all starts here</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Create</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Movie Form</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        @if(count($errors))  
        <div class="box-footer">
            <div class="alert alert-danger alert-dismissible col-md-8 col-md-offset-2">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-ban"></i> Alert!</h4>
                <ul>
                    @foreach($errors->all() as $msg)
                        <li>{{ $msg }}</li>
                    @endforeach
                </ul>
              </div>
        </div>
        @endif
        <!-- /.box-footer-->
        <div class="box-body">
          <!-- form start -->
                <form method="post" action="{{ url('admin/movie') }}" class="form-horizontal justify-content-center" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <label class="col-sm-2 col-md-3 control-label">Title</label>
                      <div class="col-sm-10 col-md-6">
                        <input type="text" name="title" class="form-control" placeholder="Title" value="{{ old('title') }}">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 col-md-3 control-label">Story</label>
                      <div class="col-sm-10 col-md-6">
                          <textarea type="text" name="story" rows="3" class="form-control" placeholder="Story...">{{ old('story') }}</textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 col-md-3 control-label">Poster</label>
                      <div class="col-sm-10 col-md-6">
                        <input type="text" name="poster" class="form-control" placeholder="Poster" value="{{ old('poster') }}">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 col-md-3 control-label">Cover</label>
                      <div class="col-sm-10 col-md-6">
                        <input type="text" name="cover" class="form-control" placeholder="Cover" value="{{ old('cover') }}">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 col-md-3 control-label">Trailer</label>
                      <div class="col-sm-10 col-md-6">
                        <input type="text" name="trailer" class="form-control" placeholder="Trailer" value="{{ old('trailer') }}">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 col-md-3 control-label">Type</label>
                      <div class="col-sm-10 col-md-6">
                        <input type="text" name="typem" class="form-control" placeholder="Type" value="{{ old('typem') }}">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 col-md-3 control-label">Gener</label>
                      <div class="col-sm-10 col-md-6">
                        <select class="form-control select2" name="genre[]" multiple="multiple" data-placeholder="Select a Gener" style="width: 100%;">
                            @foreach($genres as $genre)
                                <option id="{{ $genre->id }}">{{ $genre->name }}</option>
                            @endforeach
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 col-md-3 control-label">Release</label>
                      <div class="col-sm-10 col-md-6">
                        <input type="text" name="release" class="form-control" placeholder="Release" value="{{ old('release') }}">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 col-md-3 control-label">Time</label>
                      <div class="col-sm-10 col-md-6">
                        <input type="text" name="time" class="form-control" placeholder="Time" value="{{ old('rank') }}">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 col-md-3 control-label">Rank</label>
                      <div class="col-sm-10 col-md-6">
                        <input type="text" name="rank" class="form-control" placeholder="Rank" value="{{ old('rank') }}">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 col-md-3 control-label">Director</label>
                      <div class="col-sm-10 col-md-6">
                        <input type="text" name="director" class="form-control" placeholder="Director" value="{{ old('director') }}">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 col-md-3 control-label">Language</label>
                      <div class="col-sm-10 col-md-6">
                        <input type="text" name="lang" class="form-control" placeholder="Language" value="{{ old('lang') }}">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 col-md-3 control-label">Stream Link</label>
                      <div class="col-sm-10 col-md-6">
                        <input type="text" name="sl" class="form-control" placeholder="Stream Link" value="{{ old('sl') }}">
                      </div>
                    </div>
                    
                    <div class="form-group">
                      <label class="col-sm-2 col-md-3 control-label">SubTitle</label>
                      <div class="col-sm-10 col-md-6">
                        <input type="file" name="sub" class="form-control">
                      </div>
                    </div>

                    <div class="col-md-9">
                        <button type="submit" class="btn btn-info pull-right">Create</button>
                    </div>
                </form>
        </div>
        <!-- /.box-body -->
        
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection