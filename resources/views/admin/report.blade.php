@extends('admin.base.master')

@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Reports
        <small>it all starts here</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Reports</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Report Table</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>#</th>
                  <th>Movie</th>
                  <th>User</th>
                  <th>Issue</th>
                  <th>Send at</th>
                  <th>Solved</th>
                  <th>Edit</th>
                </tr>
                </thead>
                <tbody>
                
                @foreach($reportlist as $report)
                    <tr>
                        <td>{{ $report->id }}</td>
                        <td><a href="../movie/{{ $report->movie->slug }}" target="_blank">{{ $report->movie->title }}</a></td>
                        <td>{{ $report->user->name }}</td>
                        <td>{{ $report->reason }}</td>
                        <td>{{ $report->created_at->format('M j, Y') }}</td>
                        <td>
                          @if($report->solved == 1)
                            <span style="color: #4caf50;font-weight: 800;">Solved</span> 
                          @else
                             <span style="color: #e8281a;font-weight: 800;">Not Solved</span> 
                          @endif
                        </td>
                        <td>

                            <a href="reports/{{ $report->id }}" class="btn btn-info btn-xs"><i class="fa fa-edit"></i> Solve it</a>
                        </td>
                    </tr>                           
                    
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