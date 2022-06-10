@extends('layouts.adminbase')

@section('title', 'Edit FAQ:'.$data->title)
@section('head')
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>

@endsection
@section('content')
    <div id="page-wrapper">
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-head-line">Edit FAQ: {{$data->title}}</h1>

                </div>
            </div>
            <!-- /. ROW  -->
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        FAQ Elements
                    </div>
                    <div class="panel-body">
                        <form role="form" action="{{route('admin.faq.update',['id'=>$data->id])}}" method="post"
                              enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">

                                <div class="form-group">
                                    <label>Question</label>
                                    <input class="form-control" type="text" name="question" value="{{$data->question}}">

                                </div>

                                <div class="form-group">
                                    <label> Answer</label>
                                    <textarea class="textarea" id="answer" name="answer" type="text">
                                    {{$data->answer}}
                                </textarea>

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
        </div>
        <!-- /. PAGE INNER  -->
    </div>
    </div>
    <!-- /. PAGE WRAPPER  -->
@endsection
@section('footer')
    <script>
        ClassicEditor
            .create(document.querySelector('#answer'))
            .then(editor => {
                console.log(editor);
            })
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection
