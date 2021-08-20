@extends('admin.layout')


@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">General Information</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
              <li class="breadcrumb-item active">General Information</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div>
    </div>
    <!-- /.content-header -->

   <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-8 offset-md-2">
            @include('session_messages')
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">General Information</h3>
              </div>
              <form action="{{ route('admin.page.general_information.update') }}" method="POST">
                @csrf
                <div class="card-body">
                  
                  <div class="form-group">
                    <label>Site Name</label>
                    <input type="text" class="form-control" name="site_name" value="{{ $general_information->site_name }}" readonly="true">
                  </div>

                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" id="email" class="form-control" name="email" value="{{ $general_information->email }}">
                  </div>

                  <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="text" id="phone" class="form-control" name="phone" value="{{ $general_information->phone }}">
                  </div>

                  <div class="form-group">
                    <label for="address">Address</label>
                    <textarea class="form-control" id="address" name="address" rows="3">{{ $general_information->address }}</textarea>
                  </div>

                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Save</button>
                </div>
              </form>
            </div>
        </div>
      </div>
    </section>
    <!-- /.content -->

@endsection

@section('js')

<script type="text/javascript">
    
</script>

@endsection