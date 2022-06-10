@extends('layouts.adminwindow')

@section('title', 'Show Message:'.$data->title);


@section('content')

    <section class="content">
        <div class="panel panel-default">
            <div class="panel-heading">
                Details Messages
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <tr>
                            <th style="width: 200px">Id</th>
                            <th>{{$data->id}}</th>
                        </tr>

                        <tr>
                            <th>Name & Surname</th>
                            <td>{{$data->name}}</td>
                        </tr>
                        <tr>
                            <th>Phone</th>
                            <td>{{$data->phone}}</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>{{$data->email}}</td>
                        </tr>
                        <tr>
                            <th>Subject</th>
                            <td>{{$data->subject}}</td>
                        </tr>
                        <tr>
                            <th>Message</th>
                            <td>{{$data->message}}</td>
                        </tr>
                        <tr>
                            <th>Ip Number</th>
                            <td>{{$data->ip}}</td>
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

                    </table>
                </div>
            </div>
        </div>
    </section>
    <!-- /. PAGE INNER  -->
@endsection
