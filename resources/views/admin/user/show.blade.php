@extends('layouts.adminwindow')

@section('title', 'User Detail:'.$data->title);


@section('content')

    <section class="content">
        <div class="panel panel-default">
            <div class="panel-heading">
                Details User
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
                            <th>Email</th>
                            <td>{{$data->email}}</td>
                        </tr>
                        <tr>
                            <th>Roles</th>
                            <td>
                                @foreach($data->roles as $role)
                                    {{$role->name}}
                                    <a href="{{route('admin.user.destroyrole',['uid'=>$data->id,'rid'=>$role->id])}}"
                                        onclick="return confirm('Deleting!! Are you sure?')">[x]
                                    </a>
                                @endforeach
                            </td>
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
                                <form role="form" action="{{route('admin.user.addrole',['id'=>$data->id])}}" method="post">
                                    @csrf
                                    <select name="role">

                                        @foreach($roles as $role)
                                            <option value="{{$role->id}}">{{$role->name}} </option>
                                        @endforeach
                                        <option value=""></option>
                                    </select>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Add Role</button>
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
