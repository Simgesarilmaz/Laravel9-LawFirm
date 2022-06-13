@extends('layouts.adminbase')

@section('title', 'Profile List')


@section('content')
    <div id="page-wrapper">
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-head-line">Add Profile</h1>

                </div>
            </div>
            <!-- /. ROW  -->
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        Profile Elements
                    </div>
                    <div class="panel-body">
                        <form role="form" action="{{route('admin.profile.store' )}}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label>Address</label>
                                <input class="form-control" type="text" name="address">

                            </div>
                            <div class="form-group">
                                <label>Phone</label>
                                <input class="form-control" type="text" name="phone">

                            </div>
                            <div class="form-group">
                                <label>Type</label>
                                <select class="form-control" name="type">
                                    <option>User</option>
                                    <option>Lawyer</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputFile">Image</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input class="custom-file-input" type="file" name="image">
                                        <label class="custom-file-label" for="exampleInputFile">Choose image file</label>

                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-info">Save </button>

                        </form>
                    </div>
                </div>
            </div>
        <!-- /. PAGE INNER  -->
    </div>
    <!-- /. PAGE WRAPPER  -->
@endsection

