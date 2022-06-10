@extends('layouts.adminbase')

@section('title', 'Contact Form Messages List')


@section('content')
    <div id="page-wrapper">
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-head-line"></h1>
                </div>
            </div>
            <!-- /. ROW  -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    Messages List
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                            <tr>
                                <th style="width: 10px">id</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Subject</th>
                                <th>Status</th>
                                <th style="width: 40px">Show</th>
                                <th style="width: 40px">Delete</th>
                            </tr>
                            </thead>
                            <tr>
                            @foreach($data as $rs)
                                <td>{{$rs->id}}</td>
                                <td>{{$rs->name}}</td>
                                <td>{{$rs->phone}}</td>
                                <td>{{$rs->email}}</td>
                                <td>{{$rs->subject}}</td>
                                <td>{{$rs->status}}</td>

                                <td>
                                    <a href="{{route('admin.message.show',['id'=>$rs->id])}}" class="btn btn-success"
                                       onclick="return !window.open(this.href, '','top=50 left=100 width=1100,height=700')">
                                        Show
                                    </a>
                                </td>
                                <td><a href="{{route('admin.message.destroy',['id'=>$rs->id])}}"
                                       onclick="return confirm('Deleting!! Are you sure?')" class="btn btn-danger">Delete</a>
                                </td>
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
