@extends('layouts.adminwindow')

@section('title', 'Show Comment:'.$data->title);


@section('content')

    <section class="content">
        <div class="panel panel-default">
            <div class="panel-heading">
                Details Comment
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <tr>
                            <th style="width: 200px">Id</th>
                            <th>{{$data->id}}</th>
                        </tr>
                        <tr>
                            <th>Service</th>
                            <td>{{$data->service->title}}</td>
                        </tr>
                        <tr>
                            <th>Name & Surname</th>
                            <td>{{$data->user->name}}</td>
                        </tr>
                        <tr>
                            <th>Subject</th>
                            <td>{{$data->subject}}</td>
                        </tr>
                        <tr>
                            <th>Review</th>
                            <td>{{$data->comment}}</td>
                        </tr>
                        <tr>
                            <th>Ip Number</th>
                            <td>{{$data->IP}}</td>
                        </tr>
                        <tr>
                            <th>Status</th>
                            <td>{{$data->status}}</td>
                        </tr>
                        <tr>
                            <th>Created Data</th>
                            <td>{{$data->created_at}}</td>
                        </tr>
                        <tr>
                            <th>Update Data</th>
                            <td>{{$data->updated_at}}</td>
                        </tr>
                        <tr>
                            <th>Admin Note :</th>
                            <td>
                                <form role="form" action="{{route('admin.comment.update',['id'=>$data->id])}}" method="post">
                                    @csrf
                                    <select name="status">
                                        <option selected>{{$data->status}}</option>
                                        <option>True</option>
                                        <option>False</option>
                                    </select>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Update Comment</button>
                                    </div>
                                </form>
                            </td>
                        </tr>

                    </table>
                </div>
            </div>
        </div>
    </section>
    <!-- /. PAGE INNER  -->
@endsection
