@extends('admin.layout.master')
@section('title','Edit race')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Edit Race</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('race.index')}}">Race</a></li>
                    <li class="breadcrumb-item active">Edit Race</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>


<!-- Main content -->
<section class="content">

    <div class="container-fluid w-75">
        <div class="row">
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="card card-secondary">
                    <div class="card-header">
                        <h3 class="card-title">Edit Race</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form role="form" action="{{route('race.update', $race->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="title">Title</label>
                                    <input type="text" class="form-control" id="title" name="title" placeholder="Enter Race..." value="{{$race->title}}" required>
                                </div>
                            </div>

                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
<!-- /.content-wrapper -->
