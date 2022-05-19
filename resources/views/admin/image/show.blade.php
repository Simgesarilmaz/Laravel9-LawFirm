@extends('layouts.adminbase')

@section('title', 'Show Category:'.$data->title);


@section('content')
    <div id="page-wrapper">
        <div id="page-inner">
            <div class="row">
                <div class="col-sm-3">
                    <a href="{{route('admin.category.edit',['id'=>$data->id])}}" class="btn btn-info" style="width: 200px">Edit</a>
                </div>
                <div class="col-sm-3">
                    <a href="{{route('admin.category.destroy',['id'=>$data->id])}}" onclick="return confirm('Deleting!! Are you sure?')" class="btn btn-danger" style="width: 200px">Delete</a>
                </div>
            </div>
            <!-- /. ROW  -->
            <section class="content">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Details
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <tr>
                                    <th>Id</th>
                                    <th>{{$data->id}}</th>
                                </tr>
                                <tr>
                                    <th>Title</th>
                                    <th>{{$data->title}}</th>
                                </tr>
                                <tr>
                                    <th>Keywords</th>
                                    <th>{{$data->keywords}}</th>
                                </tr>
                                <tr>
                                    <th>Image</th>
                                    <th>{{$data->image}}</th>
                                </tr>
                                <tr>
                                    <th>Status</th>
                                    <th>{{$data->status}}</th>
                                </tr>
                                <tr>
                                    <th>Created Data</th>
                                    <th>{{$data->created_at}}</th>
                                </tr>
                                <tr>
                                    <th>Update Data</th>
                                    <th>{{$data->updated_at}}</th>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </section>
        <!-- /. PAGE INNER  -->
    </div>
    <!-- /. PAGE WRAPPER  -->
@endsection
