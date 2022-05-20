@extends('layouts.adminwindow')

@section('title', 'Service Image Gallery')


@section('content')

<h3>{{$service->title}}</h3>
    <hr>
    <form role="form" action="{{route('admin.image.store',['sid'=>$service->id])}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="input-group">
            <label>Title</label>
            <input class="form-control" type="text" name="title" placeholder="Title">
            <div class="input-group">
            <input class="form-control" type="file" name="image" placeholder="Choose File!">

            </div>
            <div class="input-group-append">
                <input class="input-group-text" type="submit" value="Upload">
            </div>


        </div>
    </form>

            <!-- /. ROW  -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    Service Image List
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                            <tr>
                                <th style="height: 40px">id</th>
                                <th>Title</th>
                                <th>Image</th>
                                <th style="height: 40px">Update</th>
                                <th style="height: 40px">Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($images as $rs)
                                <tr>
                                    <td>{{$rs->id}}</td>
                                    <td>{{$rs->title}}</td>
                                    <td>
                                        @if($rs->image)
                                            <img src="{{\Illuminate\Support\Facades\Storage::url($rs->image)}}"style="height: 100px ">
                                        @endif
                                    </td>
                                    <td><a href="{{route('admin.image.destroy',['sid'=>$service->id,'id'=>$rs->id])}}"onclick="return confirm('Deleting!! Are you sure?')"class="btn btn-danger">Delete</a></td>
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
