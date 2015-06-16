@extends('admin.layout')

@section('title')
    Gestion des spécialités
@endsection

@section('style')
    <link rel="stylesheet" href="{{ url('css/crud_list.css') }}"/>
@endsection

@section('fil-ariane')
    @parent
    <li class="active">Gestion des spécialités</li>
@endsection

@section('panel_content')

    @include('generale.form_notification')
    @include('generale.flash_message')

    @if($specialites != [])

        <h3>Liste des spécialités actuelles</h3><br/>

        <div class="crud-list">

            @foreach($specialites as $specialite)
                <div class="crud-list-item">
                    <div class="crud-list-left update-form-to-add">
                        <span class="glyphicon glyphicon-tags crud-list-icon" aria-hidden="true"></span>
                        <span class="crud-list-name">{{ $specialite->nom }}</span>
                            @foreach($specialite->promotion()->get()->toArray() as $promotion)
                            <div class="update-promotion-form">
                                {!! Form::open(['route' =>['admin_specialite_promotion_delete', $specialite->id, $promotion['id']], 'class' => 'form-inline', 'method' => 'delete']) !!}
                                    <span>{{$promotion['nom']}}</span>
                                    <button type="submit" class="list-item-delete"><span class="glyphicon glyphicon-remove"></span></button>
                                {!! Form::close() !!}
                            </div>
                            @endforeach
                    </div>
                    <div class="crud-list-right">
                        <div class="update-form">
                            {!! Form::open(['route' =>['admin_specialite_update', $specialite->id], 'class' => 'form-inline', 'method' => 'put']) !!}
                                    {!! Form::text('specialite', $specialite->nom, ['class' => 'form-control', 'min' => '2']) !!}
                            {!! Form::submit('Envoyer', ['class' => 'btn btn-success']) !!}
                            {!! Form::close() !!}
                        </div>
                        <a class="crud-list-update btn btn-warning add-update-form">Modifier</a>
                        {!! Form::open(['route' =>['admin_specialite_delete', $specialite->id], 'class' => 'form-inline crud-list-delete', 'method' => 'delete']) !!}
                            {!! Form::submit('Supprimer', ['class' => 'btn btn-danger']) !!}
                        {!! Form::close() !!}
                    </div>
                </div>

            @endforeach

        </div><br/><br/>

    @endif

    <h3>Ajouter une nouvelle spécialité</h3><br/>

    {!! Form::open(['route' => 'admin_specialite_create', 'class' => 'form', 'method' => 'post']) !!}
    <div class="form-inline input">
        <div class="input-to-add">
            <div class="input-group center">
                <div class="input-group-addon"><span class="glyphicon glyphicon-education"></span></div>
                {!! Form::select('promotion[0]', $promotions , 'Promotion associée', ['class' => 'form-control']) !!}
            </div>
            <br/>
            <br/>
            <div class="input-group center">
                <div class="input-group-addon"><span class="glyphicon glyphicon-tags"></span></div>
                {!! Form::text('specialite[0]', null, ['class' => 'form-control', 'placeholder' => 'Spécialité à ajouter', 'min' => '2']) !!}
            </div>
        </div>
    </div>
    <br/>
    <a class="btn btn-link" id="add-input">Ajouter un champs</a>
    {!! Form::submit('Envoyer', ['class' => 'btn-form']) !!}
    {!! Form::close() !!}
@endsection



@section('script_js')
    <script src="{{ url('js/add_input.js') }}"></script>
    <script src="{{ url('js/add_update_form.js') }}"></script>
@endsection