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

                                <table class="table table-bordered" id="table" data-toggle="table" id="table">


                                    <!-- <table class="table"> -->
                                    <thead>
                                        <th data-field="id">ID</th>
                                        <tr>
                                            <th scope="col" data-field="id">N°</th>
                                            <th scope="col" data-field="name" data-editable="true">Nom</th>
                                            <th scope="col" data-field="name" data-editable="true">Thème</th>
                                            <th scope="col" data-field="name" data-editable="true">TDR</th>
                                            <th scope="col" data-field="name" data-editable="true">Programme</th>
                                            <th scope="col" data-field="name" data-editable="true">Budget</th>
                                            <th scope="col" data-field="name" data-editable="true">Date début</th>
                                            <th scope="col" data-field="name" data-editable="true">Date fin</th>
                                            <th scope="col" data-field="name" data-editable="true">Lieu</th>
                                            <th scope="col" data-field="name" data-editable="true">Catégorie</th>
                                            <th scope="col" data-field="name" data-editable="true">Portée</th>
                                            <th scope="col" data-field="name" data-editable="true">Besoin</th>
                                            <th scope="col" data-field="name" data-editable="true">Liste invités</th>
                                            <th scope="col" data-field="name" data-editable="true">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($avants as $avant)
                                        <tr>
                                            <th scope="row">{{$loop->index + 1}}</th>
                                            <td>{{$avant->nom_event}}</td>
                                            <td>{{$avant->theme}}</td>
                                            <td><a target="_blank" href="{{asset('/images/'.$avant->tdr)}}">
                                                    <button>afficher</button>
                                                </a></td>
                                            <td><a target="_blank" href="{{asset('/images/'.$avant->programme_file)}}">
                                                    <button>afficher</button>
                                                </a></td>
                                            <td>{{$avant->budget}}</td>
                                            <td>{{$avant->date_debut}}</td>
                                            <td>{{$avant->date_fin}}</td>
                                            <td>{{$avant->lieu}}</td>
                                            <td>{{$avant->cathegorie}}</td>
                                            <td>{{$avant->portee}}</td>
                                            <td><a target="_blank" href="{{asset('/images/'.$avant->besoin)}}">
                                                    <button>afficher</button>
                                                </a></td>
                                            <td><a target="_blank" href="{{asset('/images/'.$avant->liste)}}">
                                                    <button>afficher</button>
                                                </a>
                                            </td>
                                            <td>
                                                <div class="columns columns-right btn-group pull-right">
                                                    <a href="{{route('infos.valider', ['avant'=>$avant->id])}}"> <button
                                                            type="button" class="btn btn-success"
                                                            onclick="if(confirm('vous êtes entrain de valider cet évènement. cliquez ok pour avertir vos collaborateurs')){document.getElementById('table').submit()}">Valider</button></a>

                                                    <a href="{{route('infos.edit', ['avant'=>$avant->id])}}"><button
                                                            type="button" class="btn btn-info">Editer</button></a>

                                                    <button type="button" class="btn btn-danger"
                                                        onclick="if(confirm('Voulez-vous vraiment supprimer cet évènement?')){document.getElementById('form-{{$avant->id}}').submit()}">Supprimer</button>
                                                </div>
                                                <form id="form-{{$avant->id}}"
                                                    action="{{route('avant.supprimer', ['avant'=>$avant->id])}}"
                                                    method="post">
                                                    @csrf
                                                    <input type="hidden" name="_method" value="delete">
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                                {!! $avants->links() !!}

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Static Table End -->




    @endsection