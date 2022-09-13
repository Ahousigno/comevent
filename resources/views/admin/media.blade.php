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
                                            <th scope="col" data-field="name" data-editable="true">Bandrole final</th>
                                            <th scope="col" data-field="name" data-editable="true">Banderole PSD</th>
                                            <th scope="col" data-field="name" data-editable="true">lien_media</th>
                                            <th scope="col" data-field="name" data-editable="true">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($medias as $media)
                                        <tr>
                                            <th scope="row">{{$loop->index + 1}}</th>
                                            <td><a target="_blank" href="{{asset('/images/'.$media->visuel)}}">
                                                    <button>afficher</button>
                                                </a></td>
                                            <td><a target="_blank" href="{{asset('/images/'.$media->psd)}}">
                                                    <button>afficher</button>
                                                </a></td>
                                            <td><a target="_blank" href="{{asset('/images/'.$media->banderole)}}">
                                                    <button>afficher</button>
                                                </a></td>
                                            <td><a target="_blank" href="{{asset('/images/'.$media->psdo)}}">
                                                    <button>afficher</button>
                                                </a></td>
                                            <td>{{$media->lien_media}}</td>
                                            <td>
                                                <div class="columns columns-right btn-group pull-right">
                                                    <a href="{{route('media.valider', ['media'=>$media->id])}}">
                                                        <button type="button" class="btn btn-success"
                                                            onclick="if(confirm('vous êtes entrain de valider le visuel. cliquez ok pour avertir vos collaborateurs')){document.getElementById('media').submit()}">Valider</button></a>

                                                    <a href="{{route('media.edit', ['media'=>$media->id])}}"><button
                                                            type="button" class="btn btn-info">Editer</button></a>

                                                    <button type="button" class="btn btn-danger"
                                                        onclick="if(confirm('Voulez-vous vraiment supprimer cet évènement?')){document.getElementById('form-{{$media->id}}').submit()}">Supprimer</button>
                                                    <a href=" mailto:medias@uvci.edu.ci"><button type="button"
                                                            class="btn btn-info">commenter</button></a>
                                                </div>
                                                <form id="form-{{$media->id}}"
                                                    action="{{route('media.supprimer', ['media'=>$media->id])}}"
                                                    method="post">
                                                    @csrf
                                                    <input type="hidden" name="_method" value="delete">
                                                </form>

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