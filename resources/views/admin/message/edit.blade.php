@extends('layouts.adminbase')

@section('title', 'Edit Service:'.$data->title)
@section('head')
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>

@endsection
@section('content')
    <div id="page-wrapper">
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-head-line">Edit Service: {{$data->title}}</h1>

                </div>
            </div>
            <!-- /. ROW  -->
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        Service Elements
                    </div>
                    <div class="panel-body">
                        <form role="form" action="{{route('admin.service.update',['id'=>$data->id])}}" method="post"
                              enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Parent Service</label>

                                    <select class="form-control-select2" name="category_id" style="...">
                                        @foreach($datalist as $rs)
                                            <option value="{{$rs->id}}"
                                                    @if($rs->id==$data->category_id) selected="selected" @endif>
                                                {{\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs,$rs->title)}}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Title</label>
                                <input class="form-control" type="text" name="title" value="{{$data->title}}">

                            </div>
                            <div class="form-group">
                                <label>Keywords</label>
                                <input class="form-control" type="text" name="keywords" value="{{$data->keywords}}">

                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <input class="form-control" type="text" name="description"
                                       value="{{$data->description}}">

                            </div>


                            <div class="form-group">
                                <label>Detail Information</label>
                                <textarea class="textarea" id="detail" name="detail" type="text">
                                    {{$data->detail}}
                                </textarea>

                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Image</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input class="custom-file-input" type="file" name="image">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Status</label>
                                <select class="form-control" name="status">
                                    <option selected>{{$data->status}}</option>
                                    <option>True</option>
                                    <option>False</option>
                                </select>
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
@section('footer')
    <script>
        ClassicEditor
            .create( document.querySelector( '#detail' ) )
            .then( editor => {
                console.log( editor );
            } )
            .catch( error => {
                console.error( error );
            } );
    </script>
@endsection
