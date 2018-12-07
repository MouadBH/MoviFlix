@extends('admin.base.master')

@section('content')
<style type="text/css">
  .switchToggle input[type=checkbox]{height: 0; width: 0; visibility: hidden; position: absolute; }
.switchToggle label {cursor: pointer; text-indent: -9999px; width: 70px; max-width: 70px; height: 30px; background: #da8c10; display: block; border-radius: 100px; position: relative; }
.switchToggle label:after {content: ''; position: absolute; top: 2px; left: 2px; width: 26px; height: 26px; background: #fff; border-radius: 90px; transition: 0.3s; }
.switchToggle input:checked + label, .switchToggle input:checked + input + label  {background: #c37d0e; }
.switchToggle input + label:before, .switchToggle input + input + label:before {content: 'No'; position: absolute; top: 5px; left: 35px; width: 26px; height: 26px; border-radius: 90px; transition: 0.3s; text-indent: 0; color: #fff; }
.switchToggle input:checked + label:before, .switchToggle input:checked + input + label:before {content: 'Yes'; position: absolute; top: 5px; left: 10px; width: 26px; height: 26px; border-radius: 90px; transition: 0.3s; text-indent: 0; color: #fff; }
.switchToggle input:checked + label:after, .switchToggle input:checked + input + label:after {left: calc(100% - 2px); transform: translateX(-100%); }
.switchToggle label:active:after {width: 60px; } 
.toggle-switchArea { margin: 10px 0 10px 0; }
.switchToggle { margin-top: 8px;  }
</style>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>it all starts here</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>{{ $countm }}</h3>

              <p>Total Movies</p>
            </div>
            <div class="icon">
              <i class="fa fa-film"></i>
            </div>
            <a href="{{ url('admin/movie') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>{{ $countn }}</h3>

              <p>Total Blog</p>
            </div>
            <div class="icon">
              <i class="fa fa-newspaper-o"></i>
            </div>
            <a href="{{ url('admin/blog') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>{{ $countu }}</h3>

              <p>User Registrations</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="{{ url('admin/users') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>{{ $countr }}</h3>

              <p>New Reports</p>
            </div>
            <div class="icon">
              <i class="fa fa-bug"></i>
            </div>
            <a href="{{ url('admin/reports') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>

      <div class="row">
      <div class="col-md-8 col-xs-12">
        <!-- Default box -->
        <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">Visiters</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
            {!! $chart->render() !!}
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          Footer
        </div>
        <!-- /.box-footer-->
        </div>
        <!-- /.box -->

        <!-- Default box -->
        <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">Settings</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">

           <form method="post" action="{{ url('admin/dashboard') }}" class="form-horizontal justify-content-center" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="_method" value="PUT">
                    <div class="form-group">
                      <label class="col-sm-2 col-md-2 control-label">Title</label>
                      <div class="col-sm-10 col-md-8">
                        <input type="text" name="title" class="form-control" placeholder="Website title" value="{{ $info->title }}">
                      </div>
                    </div>
                    
                    <div class="form-group">
                      <label class="col-sm-2 col-md-2 control-label">Description</label>
                      <div class="col-sm-10 col-md-8">
                          <textarea name="desc" rows="5" cols="72">{{ $info->description }}</textarea>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-2 col-md-2 control-label">Keyword</label>
                      <div class="col-sm-10 col-md-8">
                        <input type="text" name="keyword" class="form-control" placeholder="Ex : movie,tvshows ..." value="{{ $info->keyword }}">
                      </div>
                    </div>
                    
                    <div class="form-group">
                      <label class="col-sm-2 col-md-2 control-label">Author</label>
                      <div class="col-sm-10 col-md-8">
                        <input type="text" name="author" class="form-control" placeholder="Ex : Your Name" value="{{ $info->author }}">
                      </div>
                    </div>
                    
                    <div class="col-md-9">
                        <button type="submit" class="btn btn-info pull-right">Update</button>
                    </div>
                </form>

          </div>
        </div>
        <!-- /.box -->
      </div>
        <div class="col-md-4 col-xs-12">
          <div class="info-box bg-yellow">
            <span class="info-box-icon"><i class="fa  fa-odnoklassniki"></i></span>

            <div class="info-box-content">
              <span class="info-box-number">Desactive Mode</span>

              <div class="">
                <div class="switchToggle">
                    <input type="checkbox" {{ $isChecked }} onclick="switchMode()" id="switch">
                    <label for="switch">Toggle</label>
                </div>
              </div>
            </div>
            <!-- /.info-box-content -->
          </div>

            <div class="">
              <div class="box box-danger">
                <div class="box-header with-border">
                  <h3 class="box-title">Latest Registred Users</h3>

                  <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
                    </button>
                  </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body no-padding">
                  <ul class="users-list clearfix">
                    @foreach($LastUsers as $user)
                    <li>
                      <img src="{{ asset('storage/'.$user->user_img) }}" alt="User Image">
                      <a class="users-list-name" href="#">{{ $user->created_at->format('M j') }}</a>
                      <span class="users-list-date">{{ $user->name }}</span>
                    </li>
                    @endforeach
                  </ul>
                  <!-- /.users-list -->
                </div>
                <!-- /.box-body -->
                <div class="box-footer text-center">
                  <a href="{{ url('admin/users') }}" class="uppercase">View All Users</a>
                </div>
                <!-- /.box-footer -->
              </div>
            </div>

        </div>
      </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection