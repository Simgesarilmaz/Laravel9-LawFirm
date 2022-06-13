@extends('layouts.adminbase')

@section('title', 'Profile List')


@section('content')
    <div id="page-wrapper">
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <a href="{{route('admin.profile.create')}}"class="btn btn-lg btn-primary" style="width: 200px">Add Service</a>
                    <h1 class="page-head-line"></h1>
                </div>
            </div>
            <!-- /. ROW  -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    Profile List
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                            <tr>
                                <th style="...">id</th>
                                <th>User id</th>
                                <th>Type</th>
                                <th>Address</th>
                                <th>Phone</th>
                                <th>Image</th>
                                <th style="...">Edit</th>
                                <th style="...">Delete</th>
                                <th style="...">Show</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $rs)
                                <tr>
                                    <td>{{$rs->id}}</td>
                                    <td>{{$rs->user_id}}</td>
                                    <td>{{$rs->type}}</td>
                                    <td>{{$rs->address}}</td>
                                    <td>{{$rs->phone}}</td>


                                    <td>
                                        @if($rs->image)
                                            <img src="{{\Illuminate\Support\Facades\Storage::url($rs->image)}}"style="height: 40px ">
                                        @endif
                                    </td>
                                    <td><a href="{{route('admin.profile.edit',['id'=>$rs->id])}}" class="btn btn-info">Edit</a></td>
                                    <td><a href="{{route('admin.profile.destroy',['id'=>$rs->id])}}"onclick="return confirm('Deleting!! Are you sure?')"class="btn btn-danger">Delete</a></td>
                                    <td><a href="{{route('admin.profile.show',['id'=>$rs->id])}}"class="btn btn-success">Show</a></td>

                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
@endsection
