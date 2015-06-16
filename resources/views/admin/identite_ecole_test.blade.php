@extends('admin.layout')

@section('title')
    Mon école
@endsection

@section('style')
    <link rel="stylesheet" href="{{ url('css/crud_list.css') }}"/>
@endsection

@section('fil-ariane')
    @parent
    <li class="active">Identité école</li>
@endsection

@section('panel_content')

    @include('generale.flash_message')

    <h3>Nom de l'école</h3><br/>

    @if(isset($nom))
        <div class="crud-list">
            <div class="crud-list-item">
                <div class="crud-list-left update-form-to-add">
                    <span class="glyphicon glyphicon-tags crud-list-icon" aria-hidden="true"></span>
                    <span class="crud-list-name"> {{ $nom }}</span>
                </div>
                <div class="crud-list-right">
                    <div class="update-form">
                        <form action="{{ route('admin_identite_ecole_nom_post') }}" method="post" class="form-inline">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                            <input class="form-control" type="text" name="nom" value="{{ $nom }}" required/>
                            <button class="btn btn-primary" type="submit">Envoyer</button>
                        </form>
                    </div>
                    <a class="crud-list-update btn btn-warning add-update-form">Modifier</a>
                    <div class="crud-list-delete">
                        {!! Form::open(['route' => 'admin_identite_ecole_nom_delete', 'class' => 'form-inline', 'method' => 'delete']) !!}
                        {!! Form::submit('Supprimer', ['class' => 'btn btn-danger']) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
        <br/>
    @else

        {!! Form::open(['route' => 'admin_identite_ecole_nom_post', 'class' => 'form-inline', 'files' => true]) !!}

        <div class="input-group left-bg">
            <div class="input-group-addon"><span class="glyphicon glyphicon-tag"></span></div>
            <input type="text" name="nom" class="form-control" placeholder="Nom de l'école"/>
        </div>
        <div class="form-group right-bg">
            {!! Form::submit('Envoyer', ['class' => 'btn-form right']) !!}
        </div>

        {!! Form::close() !!}
    @endif

    <br/><br/><h3>Logo de l'école</h3><br/>

    @if(isset($logo))
        <img src="{{ url("uploads/ecole/$logo") }}" width="200" alt=""/>
        <br/><br/>
        <div class="crud-list-center">
            <div class="update-form">
                <br/>
                {!! Form::open(['route' => 'admin_identite_ecole_logo_post', 'class' => 'form-inline', 'files' => true]) !!}
                <div class="input-group form-group left">
                    <div class="input-group-addon"><span class="glyphicon glyphicon-cloud-upload"></span></div>
                    <input type="file" name="logo" class="form-control"/>
                </div>
                {!! Form::submit('Envoyer', ['class' => 'btn-form']) !!}
                {!! Form::close() !!}
                <br/>
            </div>
            <a class="crud-list-update btn btn-warning add-update-form">Modifier</a>
            <div class="crud-list-delete">
                {!! Form::open(['route' => 'admin_identite_ecole_logo_delete', 'class' => 'form-inline', 'method' => 'delete']) !!}
                {!! Form::submit('Supprimer', ['class' => 'btn btn-danger']) !!}
                {!! Form::close() !!}
            </div>
        </div>
        <br/>
    @else

        {!! Form::open(['route' => 'admin_identite_ecole_logo_post', 'class' => 'form-inline', 'files' => true]) !!}
        <div class="input-group left-bg">
            <div class="input-group-addon"><span class="glyphicon glyphicon-cloud-upload"></span></div>
            <input type="file" name="logo" class="form-control"/>
        </div>
        <div class="form-group right-bg">
            {!! Form::submit('Envoyer', ['class' => 'btn-form right']) !!}
        </div>
        {!! Form::close() !!}

    @endif

@endsection

@section('script_js')
    <script src="{{ url('js/add_update_form.js') }}"></script>
@endsection