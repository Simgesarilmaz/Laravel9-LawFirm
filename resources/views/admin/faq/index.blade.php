@extends('layouts.adminbase')

@section('title', 'FAQ List')


@section('content')
    <div id="page-wrapper">
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <a href="{{route('admin.faq.create')}}"class="btn btn-lg btn-primary" style="width: 200px">Add Question</a>
                    <h1 class="page-head-line"></h1>
                </div>
            </div>
            <!-- /. ROW  -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    FAQ List
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                            <tr>
                                <th style="...">id</th>
                                <th>Question</th>
                                <th>Answer</th>
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
                                    <td>{{$rs->question}}</td>
                                    <td>{!! $rs->answer !!}</td>
                                    <td>{{$rs->status}}</td>
                                    <td><a href="{{route('admin.faq.edit',['id'=>$rs->id])}}" class="btn btn-info">Edit</a></td>
                                    <td><a href="{{route('admin.faq.destroy',['id'=>$rs->id])}}"onclick="return confirm('Deleting!! Are you sure?')"class="btn btn-danger">Delete</a></td>
                                    <td><a href="{{route('admin.faq.show',['id'=>$rs->id])}}"class="btn btn-success">Show</a></td>
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
