@extends('admin.base.master')

@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Pages
        <small>it all starts here</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Pages</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Pages Table</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
            <button type="button" class="btn btn btn-info" data-toggle="modal" data-target="#CreateModel"><i class="fa fa-plus"></i> New Page</button>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
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
          <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>#</th>
                  <th>Title</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                
                @foreach($pages as $page)
                    <tr>
                        <td>{{ $page->id }}</td>
                        <td><a href="{{ $page->slug }}">{{ $page->title }}</a></td>
                        <td>
                            <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#DeleteModel{{ $page->id }}"><i class="fa fa-trash"></i> Delete</button>
                            <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#EditModel{{ $page->id }}"><i class="fa fa-trash"></i> Edit</button>
                        </td>
                    </tr>                  
                    <!-- Delete Modal -->
<div class="modal modal-danger fade" id="DeleteModel{{ $page->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Delete Page</h4>
      </div>
      <div class="modal-body">
        Are u sure to delete <b>{{ $page->title }}</b> ?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
          <form action="{{ url('admin/pages/'.$page->id.'/delete') }}" method="post">
              @csrf
              <input type="hidden" name="_method" value="DELETE">
              <button type="submit" class="btn btn-danger btn-outline">Delete</button>
          </form>
      </div>
    </div>
  </div>
</div>   
                    <!-- Edit Modal -->
<div class="modal modal-info fade" id="EditModel{{ $page->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Edit Page</h4>
      </div>
      <form method="post" action="{{ url('admin/pages/'.$page->id) }}">
            <div class="modal-body" style="overflow: hidden;">
                @csrf
                <input type="hidden" name="_method" value="PUT">
                    <div class="form-group">
                      <label class="col-sm-2 col-md-3 control-label">Page Title</label>
                      <div class="col-sm-10 col-md-6">
                        <input type="text" name="title" class="form-control" placeholder="Genre Name" value="{{ $page->title }}">
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-2 col-md-12 control-label">Page Body</label>
                      <div class="col-sm-12 col-md-12">
                        <textarea id="editor2" name="body" rows="10" cols="80">
                            {{ $page->body }}  
                        </textarea>
                      </div>
                    </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-info btn-outline">Update</button>
              </div>
        </form>
    </div>
  </div>
</div>           
                    
                @endforeach
                
                </tbody>
                <tfoot>
                <tr>
                  <th>#</th>
                  <th>Tile</th>
                  <th>Action</th>
                </tr>
                </tfoot>
              </table>
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->
                    <!-- Create Modal -->
<div class="modal modal-info fade" id="CreateModel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Add New Pages</h4>
      </div>
        <form method="post" action="{{ url('admin/pages') }}">
            <div class="modal-body" style="overflow: hidden;">
                @csrf
                    <div class="form-group">
                      <label class="col-sm-2 col-md-3 control-label">Page Title</label>
                      <div class="col-sm-10 col-md-9">
                        <input type="text" name="title" class="form-control" placeholder="Genre Name" value="{{ old('name') }}">
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-2 col-md-2 control-label">Page Body</label>
                      <div class="col-sm-12 col-md-12">
                        <textarea id="editor1" name="body" rows="10" cols="80">
                            {{ old('body') }}  
                        </textarea>
                      </div>
                    </div>

              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-info btn-outline">Add</button>
              </div>
        </form>
    </div>
  </div>
</div> 
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection