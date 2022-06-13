@extends('layouts.adminbase')

@section('title', 'Show Profile:'.$data->user_id);


@section('content')
    <div id="page-wrapper">
        <div id="page-inner">
            <div class="row">
                <div class="col-sm-3">
                    <a href="{{route('admin.profile.edit',['id'=>$data->id])}}" class="btn btn-info" style="width: 200px">Edit</a>
                </div>
                <div class="col-sm-3">
                    <a href="{{route('admin.profile.destroy',['id'=>$data->id])}}" onclick="return confirm('Deleting!! Are you sure?')" class="btn btn-danger" style="width: 200px">Delete</a>
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
                                    <th style="width: 200px" >Id</th>
                                    <th>{{$data->id}}</th>
                                </tr>
                                <tr>
                                    <th style="width: 200px" >User Id</th>
                                    <th>{{$data->user_id}}</th>
                                </tr>
                                <tr>
                                    <th>Address</th>
                                    <td>{{$data->address}}</td>
                                </tr>
                                <tr>
                                    <th>Phone</th>
                                    <td>{{$data->phone}}</td>
                                </tr>
                                <tr>
                                    <th>Image</th>
                                    <td> @if($data->image)
                                            <img src="{{\Illuminate\Support\Facades\Storage::url($data->image)}}"style="height: 100px ">
                                        @endif</td>
                                </tr>
                                <tr>
                                    <th>Type</th>
                                    <td>{{$data->type}}</td>
                                </tr>
                                <tr>
                                    <th>Created Data</th>
                                    <td>{{$data->created_at}}</td>
                                </tr>
                                <tr>
                                    <th>Update Data</th>
                                    <td>{{$data->updated_at}}</td>
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
