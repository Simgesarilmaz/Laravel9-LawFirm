@extends('layouts.adminbase')

@section('title', 'Settings')
@section('head')
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
@endsection
@section('content')
    <div id="page-wrapper">
        <div id="page-inner">
            <div class="panel-body">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-sm-10">
                            <h1 class="page-head-line">Settings</h1>
                        </div>
                        <div class="col-sm-2">
                            <ol class="breadcrumb" style="padding-top: 25px;background: transparent;text-align: end;">
                                <li><a href="{{route('admin.index')}}">Home</a></li>
                                <li class="active">Settings</li>

                            </ol>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <form role="form" action="{{route('admin.settings.update' )}}" method="post"
                          enctype="multipart/form-data">
                        @csrf
                        <div class="panel-body">
                            <div class="card card-primary card-tabs col-12">
                                <div class="card-header p-0 pt-1">
                                    <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                                        <li class="active">
                                            <a id="custom-tabs-one-general-tab"
                                               data-toggle="tab"
                                               href="#custom-tabs-one-general" role="tab"
                                               aria-controls="custom-tabs-one-home"
                                               aria-selected="true">General</a>
                                        </li>

                                        <li class="">
                                            <a id="custom-tabs-one-smtp-tab" data-toggle="tab"
                                               href="#custom-tabs-one-smtp" role="tab"
                                               aria-controls="custom-tabs-one-smtp"
                                               aria-selected="false">Smtp Email</a>
                                        </li>
                                        <li class="">
                                            <a id="custom-tabs-one-social-tab" data-toggle="tab"
                                               href="#custom-tabs-one-social" role="tab"
                                               aria-controls="custom-tabs-one-social"
                                               aria-selected="false">Social Media</a>
                                        </li>
                                        <li class="">
                                            <a id="custom-tabs-one-about-tab" data-toggle="tab"
                                               href="#custom-tabs-one-about" role="tab"
                                               aria-controls="custom-tabs-one-about"
                                               aria-selected="false">About Us</a>
                                        </li>
                                        <li class="">
                                            <a id="custom-tabs-one-contact-tab" data-toggle="tab"
                                               href="#custom-tabs-one-contact" role="tab"
                                               aria-controls="custom-tabs-one-contact" aria-selected="false">Contact
                                                Page</a>
                                        </li>
                                        <li class="">
                                            <a id="custom-tabs-one-references-tab" data-toggle="tab"
                                               href="#custom-tabs-one-references" role="tab"
                                               aria-controls="custom-tabs-one-references"
                                               aria-selected="false">References</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-content" id="custom-tabs-one-tabContent">
                                    <div class="tab-pane fade active in" id="custom-tabs-one-general" role="tabpanel"
                                         aria-labelledby="custom-tabs-one-general-tab">
                                        <input type="hidden" id="id" name="id" value="{{$data->id}}"
                                               class="form-control">
                                        <div class="form-group">
                                            <label>Title</label>
                                            <input class="form-control" type="text" id="title" name="title"
                                                   value="{{$data->title}}">
                                        </div>
                                        <div class="form-group">
                                            <label>Keywords</label>
                                            <input class="form-control" type="text" name="keywords"
                                                   value="{{$data->keywords}}">
                                        </div>
                                        <div class="form-group">
                                            <label>Description</label>
                                            <input class="form-control" type="text" name="description"
                                                   value="{{$data->description}}">
                                        </div>
                                        <div class="form-group">
                                            <label>Company</label>
                                            <input class="form-control" type="text" name="company"
                                                   value="{{$data->company}}">
                                        </div>
                                        <div class="form-group">
                                            <label>Address</label>
                                            <input class="form-control" type="text" name="address"
                                                   value="{{$data->address}}">
                                        </div>
                                        <div class="form-group">
                                            <label>Phone</label>
                                            <input class="form-control" type="text" name="phone"
                                                   value="{{$data->phone}}">
                                        </div>
                                        <div class="form-group">
                                            <label>email</label>
                                            <input class="form-control" type="text" name="email"
                                                   value="{{$data->email}}">
                                        </div>
                                        <div class="form-group">
                                            <label>Status</label>
                                            <select class="form-control select2" name="status" style="">
                                                <option selected="selected">{{$data->status}}</option>
                                                <option>True</option>
                                                <option>False</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="custom-tabs-one-smtp" role="tabpanel"
                                         aria-labelledby="custom-tabs-one-smtp-tab">
                                        <div class="form-group">
                                            <label>Smtp Server</label>
                                            <input class="form-control" type="text" name="smtpserver"
                                                   value="{{$data->smtpserver}}">
                                        </div>
                                        <div class="form-group">
                                            <label>Smtp Email</label>
                                            <input class="form-control" type="text" name="smtpemail"
                                                   value="{{$data->smtpemail}}">
                                        </div>
                                        <div class="form-group">
                                            <label>Smtppassword </label>
                                            <input class="form-control" type="password" name="smtppassword"
                                                   value="{{$data->smtppassword}}">
                                        </div>
                                        <div class="form-group">
                                            <label>Smtpport </label>
                                            <input class="form-control" type="number" name="smtpport"
                                                   value="{{$data->smtpport}}">
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="custom-tabs-one-social" role="tabpanel"
                                         aria-labelledby="custom-tabs-one-social-tab">
                                        <div class="form-group">
                                            <label>Fax</label>
                                            <input class="form-control" type="text" name="fax"
                                                   value="{{$data->fax}}">
                                        </div>
                                        <div class="form-group">
                                            <label>Facebook</label>
                                            <input class="form-control" type="text" name="facebook"
                                                   value="{{$data->facebook}}">
                                        </div>
                                        <div class="form-group">
                                            <label>Instagram</label>
                                            <input class="form-control" type="text" name="instagram"
                                                   value="{{$data->instagram}}">
                                        </div>
                                        <div class="form-group">
                                            <label>Youtube</label>
                                            <input class="form-control" type="text" name="youtube"
                                                   value="{{$data->youtube}}">
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="custom-tabs-one-about" role="tabpanel"
                                         aria-labelledby="custom-tabs-one-about-tab">
                                        <div class="form-group">
                                            <label>About Us</label>
                                            <textarea id="aboutus" name="aboutus">{{$data->aboutus}}</textarea>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="custom-tabs-one-contact" role="tabpanel"
                                         aria-labelledby="custom-tabs-one-contact-tab">
                                        <div class="form-group">
                                            <label>Reference</label>
                                            <textarea id="contact" name="contact">{{$data->contact}}</textarea>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="custom-tabs-one-references" role="tabpanel"
                                         aria-labelledby="custom-tabs-one-references-tab">
                                        <div class="form-group">
                                            <label>References</label>
                                            <textarea id="references"
                                                      name="references">{{$data->references}}</textarea>
                                        </div>

                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-info">Update Setting</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
<!-- /. WRAPPER  -->
@section('footer')
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#aboutus').summernote();
            $('#contact').summernote();
            $('#references').summernote();
        });
    </script>

@endsection

