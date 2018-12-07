@extends('admin.base.master')

@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Blog CMS
        <small>it all starts here</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Blog</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Article Table</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
            <a href="{{ url('admin/blog/create') }}" class="btn btn btn-info"><i class="fa fa-plus"></i> New Article</a>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>#</th>
                  <th>Title</th>
                  <th>Image</th>
                  <th>Body</th>
                  <th>Author</th>
                  <th>Created At</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                
                @foreach($news as $art)
                    <tr>
                        <td>{{ $art->id }}</td>
                        <td style="width: 25%">{{ $art->title }}</td>
                        <td><img src="{{ asset('storage/'.$art->image) }}" class="img-responsive" title="{{ $art->title }}" ></td>
                        <td>
                            <button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#ReadModel{{ $art->id }}"><i class="fa fa-trash"></i> Read it!</button>
                        </td>
                        <td>{{ $art->author }}</td>
                        <td>{{ $art->created_at->format('M j, Y') }}</td>
                        <td>
                            <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#DeleteModel{{ $art->id }}"><i class="fa fa-trash"></i> Delete</button>
                            <a href="{{ url('admin/blog/'.$art->id.'/edit') }}" class="btn btn-info btn-xs"><i class="fa fa-trash"></i> Edit</a>
                        </td>
                    </tr>                  
                    <!-- Delete Modal -->
<div class="modal modal-danger fade" id="DeleteModel{{ $art->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Delete Article</h4>
      </div>
      <div class="modal-body">
        Are u sure to delete <b>{{ $art->title }}</b> ?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
          <form action="{{ url('admin/blog/'.$art->id.'/delete') }}" method="post">
              @csrf
              <input type="hidden" name="_method" value="DELETE">
              <button type="submit" class="btn btn-danger btn-outline">Delete</button>
          </form>
      </div>
    </div>
  </div>
</div>   
                    <!-- Read Modal -->
<div class="modal fade" id="ReadModel{{ $art->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">{{ $art->title }}</h4>
      </div>
            <div class="modal-body" style="overflow: hidden;">
                {!! $art->body !!}
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
              </div>
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
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection