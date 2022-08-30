@extends('layouts.maste')

@section('content')

<!-- Start Welcome area -->
<div class="all-content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="logo-pro">
                    <a href="index.html"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
                </div>
            </div>
        </div>
    </div>

    <!-- Static Table Start -->
    <div class="data-table-area mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="sparkline13-list">
                        <div class="sparkline13-hd">
                            <!-- <div class="main-sparkline13-hd">
                                <h1>Projects <span class="table-project-n">Data</span> Table
                                </h1>
                            </div> -->
                        </div>


                        <div class="sparkline13-graph">
                            <div class="datatable-dashv1-list custom-datatable-overright">
                                <div id="toolbar">
                                    <!-- <select class="form-control dt-tb">
                                        <option value="">Export Basic</option>
                                        <option value="all">Export All</option>
                                        <option value="selected">Export Selected</option>
                                    </select> -->
                                </div>


                                <div class="fixed-table-toolbar">
                                    <div class="bs-bars pull-left">
                                        {{$medias->links()}}
                                    </div>
                                    <div>

                                    </div>
                                    <div class="pull-right search"><input class="form-control" type="text"
                                            placeholder="Search"></div>
                                </div>

                                </br>
                                </br>
                                </br>
                                </br>
                                <div style="text-align: center">
                                    @if(session()->has("success"))

                                    <div class="alert alert-success">

                                        <h3>{{session()->get("success")}}</h3>
                                    </div>

                                    @endif

                                    @if ($errors->any())
                                    <div class="alert alert-danger">

                                        <ul>
                                            @foreach($errors->all() as $error)

                                            <li>{{$error}}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    @endif
                                </div>

                                <table class="table table-bordered" id="table" data-toggle="table">


                                    <!-- <table class="table"> -->
                                    <thead>
                                        <th data-field="id">ID</th>
                                        <tr>
                                            <th scope="col" data-field="id">#</th>
                                            <th scope="col" data-field="name" data-editable="true">Visuel final</th>
                                            <th scope="col" data-field="name" data-editable="true">Visuel PSD</th>
                                            <th scope="col" data-field="name" data-editable="true">TDR</th>
                                            <th scope="col" data-field="name" data-editable="true">Bandrole final</th>
                                            <th scope="col" data-field="name" data-editable="true">Banderole PSD</th>
                                            <th scope="col" data-field="name" data-editable="true">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($medias as $media)
                                        <tr>
                                            <th scope="row">{{$loop->index + 1}}</th>
                                            <td><img src="/images/{{$media->visuel}}"></td>
                                            <td><img src="/images/{{$media->psd}}"></td>
                                            <td><img src="/images/{{$media->banderole}}"></td>
                                            <td><img src="/images/{{$media->psdo}}"></td>
                                            <td>
                                                <div class="columns columns-right btn-group pull-right">
                                                    <button type="button" class="btn btn-success">Valider</button>

                                                    <button type="button" class="btn btn-info">Editer</button></a>

                                                    <button type="button" class="btn btn-danger">Supprimer</button>
                                                </div>

                                            </td>

                                        </tr>

                                        @endforeach
                                    </tbody>

                                </table>



                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Static Table End -->




    @endsection