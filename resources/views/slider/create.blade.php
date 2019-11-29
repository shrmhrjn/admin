@extends('index')
@section('content')
<div class="app-body">
    <main class="main">
        <div class="container-fluid">
            <div class="animated fadeIn">
                <div class="row">
                </div>
                <!-- /.row-->
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <strong>Form</strong>
                            </div>
                            <div class="card-body">
                                <form class="form-horizontal" action="{{ route('slider.store') }}" method="post"
                                    enctype="multipart/form-data">
                                    @csrf
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
        </div>
    </main>
</div>
@endsection