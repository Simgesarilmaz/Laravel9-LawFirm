@extends('layouts.adminbase')

@section('title', 'Edit Profile:')

@section('content')
    <div id="page-wrapper">
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-head-line">Edit Profile:</h1>

                </div>
            </div>
            <!-- /. ROW  -->
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        Profile Elements
                    </div>
                    <div class="panel-body">
                        <form role="form" action="{{route('admin.profile.update',['id'=>$data->user_id])}}" method="post"
                              enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Address</label>
                                <input class="form-control" type="text" name="address" value="{{$data->address}}">

                            </div>
                            <div class="form-group">
                                <label>Phone</label>
                                <input class="form-control" type="text" name="phone" value="{{$data->phone}}">

                            </div>
                            <div class="form-group">
                                <label>Type</label>
                                <select class="form-control" name="type">
                                    <option selected>{{$data->type}}</option>
                                    <option>User</option>
                                    <option>Lawyer</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputFile">Image</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input class="custom-file-input" type="file" name="image">
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-info">Update Data</button>

                        </form>
                    </div>
                </div>
            </div>
            <!-- /. PAGE INNER  -->
        </div>
    </div>
    <!-- /. PAGE WRAPPER  -->
@endsection

