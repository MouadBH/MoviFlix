@extends('admin.base.master')

@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Movies
        <small>it all starts here</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Movies</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Movies Table</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          <a href="{{ url('admin/movie/create') }}" class="btn btn-info"><i class="fa fa-play"></i> New movie</a>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>#</th>
                  <th>Title</th>
                  <th>Poster/Cover</th>
                  <th>Trailer</th>
                  <th>Type</th>
                  <th>Gener</th>
                  <th>Release</th>
                  <th>Time</th>
                  <th>Rank</th>
                  <th>Director</th>
                  <th>Language</th>
                  <th>Stream</th>
                  <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                
                @foreach($media as $movie)
                    <tr>
                        <td>{{ $movie->id }}</td>
                        <td>{{ $movie->title }}</td>
                        <td>
                            <button type="button" class="btn btn-block btn-primary btn-xs" data-toggle="modal" data-target="#PosterModel{{ $movie->id }}">Poster</button>
                            <button type="button" class="btn btn-block btn-primary btn-xs" data-toggle="modal" data-target="#CoverModel{{ $movie->id }}">Cover</button>
                        </td>
                        <td> 
                            <a target="_blank" class="btn btn-block btn-primary btn-xs" href="{{ $movie->trailer }}">Trailer</a>
                        </td>
                        <td>{{ $movie->type }}</td>
                        <td>{{ $movie->genre }}</td>
                        <td>{{ $movie->release }}</td>
                        <td>{{ $movie->time }}</td>
                        <td>{{ $movie->rank }}</td>
                        <td>{{ $movie->director }}</td>
                        <td>{{ $movie->language }}</td>
                        <td>
                            <a href="{{ $movie->stremlink }}" target="_blank" class="btn btn-block btn-primary btn-xs">Link</a>
                        </td> 
                        <td>
                            <a href="{{ url('admin/movie/'.$movie->id.'/edit') }}" class="btn btn-info btn-block btn-xs">
                                <i class="fa fa-edit"></i> Edit
                            </a>
                            <button type="button" class="btn btn-block btn-danger btn-xs" data-toggle="modal" data-target="#DeleteModel{{ $movie->id }}"><i class="fa fa-trash"></i> Delete</button>
                        </td>
                    </tr>
                    <!-- Poster Modal -->
<div class="modal fade" id="PosterModel{{ $movie->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Ppster</h4>
      </div>
      <div class="modal-body">
        <img src="{{ $movie->poster }}" class="img-responsive" title="{{ $movie->title }}" />
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>                    
                    <!-- Cover Modal -->
<div class="modal fade" id="CoverModel{{ $movie->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Cover</h4>
      </div>
      <div class="modal-body">
        <img src="{{ $movie->cover }}" class="img-responsive" title="{{ $movie->title }}" />
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>                     
                    <!-- Delete Modal -->
<div class="modal modal-danger fade" id="DeleteModel{{ $movie->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Delete Movie</h4>
      </div>
      <div class="modal-body">
        Are u sure to delete <b>{{ $movie->title }}</b> ?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
          <form action="{{ url('admin/movie/'.$movie->id.'/delete') }}" method="post">
              @csrf
              <input type="hidden" name="_method" value="DELETE">
              <button type="submit" class="btn btn-danger btn-outline">Delete</button>
          </form>
      </div>
    </div>
  </div>
</div>   
                    
                @endforeach
                
                </tbody>
                <tfoot>
                <tr>
                  <th>#</th>
                  <th>Title</th>
                  <th>Poster/Cover</th>
                  <th>Trailer</th>
                  <th>Type</th>
                  <th>Gener</th>
                  <th>Release</th>
                  <th>Time</th>
                  <th>Rank</th>
                  <th>Director</th>
                  <th>Language</th>
                  <th>Stream</th>
                  <th>Actions</th>
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