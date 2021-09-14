@extends('admin.layout.master')
@section('title', 'marital status')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Marital Status</h1>
      </div>
      <div class="col-sm-6"></div>
    </div>
  </div>
</section>


<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="card card-secondary">
          <div class="card-header d-flex align-items-center ">
            <h3 class="card-title">Marital Status</h3>
            <a
              href=""
              class="btn btn-outline-dark ml-auto"
              ><i class="fas fa-plus"></i
            ></a>
          </div>
          <div class="card-body table-responsive">
            <table id="example1" class="table table-bordered table-hover ">
              <thead>
                <tr>
                  <th>Title</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                @if($maritalStatus)
                @foreach($maritalStatus as $status)
                <tr>
                  <td>{{$status->title}}</td>
                  <td>
                      <a href="{{route('marital_status.edit',$status->id)}}" class="btn btn-icon btn-warning mr-1"><i class="fa fa-edit"></i></a>
                      <a href="javascript:void(0)" class="btn btn-danger" onclick="
                      if (confirm('are you sure to delete?')) {
                      document.getElementById('delete_form_{{$status->id}}').submit();}"><i class="fa fa-trash"></i></a>
                      <form action="{{route('marital_status.destroy',$status->id)}}" id="delete_form_{{$status->id}}" method="post">
                         @csrf
                         @method('DELETE')
                      </form>
                  </td>
                </tr>
              </tbody>
                @endforeach
                @endif
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


@endsection

@section('script')
@endsection
<!-- /.content-wrapper -->