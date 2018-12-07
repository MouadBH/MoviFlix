@extends('admin.base.master')

@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Genres
        <small>it all starts here</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Genres</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Generes Table</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
            <button type="button" class="btn btn btn-info" data-toggle="modal" data-target="#CreateModel"><i class="fa fa-plus"></i> New Genre</button>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>#</th>
                  <th>Name</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                
                @foreach($genres as $genre)
                    <tr>
                        <td>{{ $genre->id }}</td>
                        <td>{{ $genre->name }}</td>
                        <td>
                            <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#DeleteModel{{ $genre->id }}"><i class="fa fa-trash"></i> Delete</button>
                            <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#EditModel{{ $genre->id }}"><i class="fa fa-trash"></i> Edit</button>
                        </td>
                    </tr>                  
                    <!-- Delete Modal -->
<div class="modal modal-danger fade" id="DeleteModel{{ $genre->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Delete Genre</h4>
      </div>
      <div class="modal-body">
        Are u sure to delete <b>{{ $genre->name }}</b> ?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
          <form action="{{ url('admin/genres/'.$genre->id.'/delete') }}" method="post">
              @csrf
              <input type="hidden" name="_method" value="DELETE">
              <button type="submit" class="btn btn-danger btn-outline">Delete</button>
          </form>
      </div>
    </div>
  </div>
</div>   
                    <!-- Edit Modal -->
<div class="modal modal-info fade" id="EditModel{{ $genre->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Edit Genre</h4>
      </div>
      <form method="post" action="{{ url('admin/genres/'.$genre->id) }}">
            <div class="modal-body" style="overflow: hidden;">
                @csrf
                <input type="hidden" name="_method" value="PUT">
                    <div class="form-group">
                      <label class="col-sm-2 col-md-3 control-label">Genre Name</label>
                      <div class="col-sm-10 col-md-6">
                        <input type="text" name="name" class="form-control" placeholder="Genre Name" value="{{ $genre->name }}">
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
                  <th>Name</th>
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
        <h4 class="modal-title" id="myModalLabel">Add New Genre</h4>
      </div>
        <form method="post" action="{{ url('admin/genres') }}">
            <div class="modal-body" style="overflow: hidden;">
                @csrf
                    <div class="form-group">
                      <label class="col-sm-2 col-md-3 control-label">Genre Name</label>
                      <div class="col-sm-10 col-md-6">
                        <input type="text" name="name" class="form-control" placeholder="Genre Name" value="{{ old('name') }}">
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