@extends('index')
@section('content')

   <div class="app-body">

    <main class="main">
      <!-- Breadcrumb-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item">
          <a href="#">Admin</a>
        </li>
        <li class="breadcrumb-item active">Dashboard</li>
        <!-- Breadcrumb Menu-->

      </ol>
      <div class="container-fluid">
        <div class="animated fadeIn">
          <div class="row">


          </div>
          <!-- /.row-->
          <div class="row">
            <div class="col-md-6">
              <div class="card">
                <div class="card-header">
                  <strong>Form</strong> Elements</div>
                <div class="card-body">
                  <form class="form-horizontal" action="{{ route('team.store') }}" method="post" enctype="multipart/form-data">
                      @csrf
                      <div class="form-group row">
                      <label class="col-md-3 col-form-label" for="file-input" >Name</label>
                      <div class="col-md-9">
                        <input id="name" type="text" name="name"  >
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="file-input" >Post</label>
                         <input id="post" type="text" name="post">
                      </div>
                      <div class="form-group row">
                      <label class="col-md-3 col-form-label" for="file-input">Image</label>
                      <div class="col-md-9">
                        <input id="image" type="file" name="image">
                      </div>

                </div>
                    <div class="card-footer">
                          <button class="btn btn-sm btn-primary" type="submit">
                            <i class="fa fa-dot-circle-o"></i> Submit</button>
                        </div>
                  </form>
                </div>

              </div>

            </div>

          </div>
      </div>
    </main>

  </div>
@endsection
