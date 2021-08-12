@extends('admin.layout')


@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">About</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
              <li class="breadcrumb-item active">About</li>
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
                <h3 class="card-title">About</h3>
              </div>
              <form action="{{ route('admin.page.about.update') }}" method="POST">
                @csrf
                <div class="card-body">

                  <div class="form-group">
                    <label for="main_heading">Main Heading</label>
                    <input type="text" id="main_heading" class="form-control" name="main_heading" value="{{ $page->main_heading }}">
                  </div>

                  <div class="form-group">
                    <label for="sub_heading">Sub Heading</label>
                    <input type="text" id="sub_heading" class="form-control" name="sub_heading" value="{{ $page->sub_heading }}">
                  </div>

                  <div class="form-group">
                    <label for="content">Content</label>
                    <textarea class="form-control" id="content" name="content" rows="3" spellcheck="false" style="margin-top: 0px; margin-bottom: 0px; height: 227px;">{{ $page->content }}</textarea>
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