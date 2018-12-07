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
                <form method="post" action="{{ url('admin/blog') }}" class="form-horizontal justify-content-center" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <label class="col-sm-2 col-md-2 control-label">Title</label>
                      <div class="col-sm-10 col-md-8">
                        <input type="text" name="title" class="form-control" placeholder="Title" value="{{ old('title') }}">
                      </div>
                    </div>
                    
                    <div class="form-group">
                      <label class="col-sm-2 col-md-2 control-label">Body</label>
                      <div class="col-sm-10 col-md-8">
                          <textarea id="editor1" name="body" rows="10" cols="80">
                            {{ old('body') }}  
                          </textarea>
                      </div>
                    </div>
                    
                    <div class="form-group">
                      <label class="col-sm-2 col-md-2 control-label">Image</label>
                      <div class="col-sm-10 col-md-8">
                          <input type="file" name="art_img" class="form-control">
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