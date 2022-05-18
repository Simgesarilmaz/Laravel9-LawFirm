@extends('layouts.adminbase')

@section('title', 'Category List')


@section('content')
    <div id="page-wrapper">
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <a href="{{route('admin.category.create')}}"class="btn btn-lg btn-primary" style="width: 200px">Add Category</a>
                    <h1 class="page-head-line"></h1>
                </div>
            </div>
            <!-- /. ROW  -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    Category List
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                            <tr>
                                <th style="...">id</th>
                                <th>Parent</th>
                                <th>Title</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th style="...">Edit</th>
                                <th style="...">Delete</th>
                                <th style="...">Show</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $rs)
                                <tr>
                                    <td>{{$rs->id}}</td>
                                    <td>{{\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs,$rs->title)}}</td>
                                    <td>{{$rs->title}}</td>
                                    <td>
                                        @if($rs->image)
                                            <img src="{{\Illuminate\Support\Facades\Storage::url($rs->image)}}"style="height: 40px ">
                                        @endif
                                    </td>
                                    <td>{{$rs->status}}</td>
                                    <td><a href="{{route('admin.category.edit',['id'=>$rs->id])}}" class="btn btn-info">Edit</a></td>
                                    <td><a href="{{route('admin.category.destroy',['id'=>$rs->id])}}"onclick="return confirm('Deleting!! Are you sure?')"class="btn btn-danger">Delete</a></td>
                                    <td><a href="{{route('admin.category.show',['id'=>$rs->id])}}"class="btn btn-success">Show</a></td>
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
