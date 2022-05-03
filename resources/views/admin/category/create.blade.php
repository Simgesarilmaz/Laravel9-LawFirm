@extends('layouts.adminbase')

@section('title', 'Add Category')


@section('content')
    <div id="page-wrapper">
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-head-line">Add Category</h1>

                </div>
            </div>
            <!-- /. ROW  -->
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        Category Elements
                    </div>
                    <div class="panel-body">
                        <form role="form" action="{{route('admin.category.create' )}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label>Title</label>
                                <input class="form-control" type="text" name="title">

                            </div>
                            <div class="form-group">
                                <label>Keywords</label>
                                <input class="form-control" type="text" name="keywords">

                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <input class="form-control" type="text" name="description">

                            </div>
                            <div class="form-group">
                                <label>Status</label>
                                <select class="form-control" name="status">
                                    <option>True</option>
                                    <option>False</option>
                                </select>
                            </div>


                            <button type="submit" class="btn btn-info">Send Message </button>

                        </form>
                    </div>
                </div>
            </div>
        <!-- /. PAGE INNER  -->
    </div>
    <!-- /. PAGE WRAPPER  -->
@endsection
