@extends('admin.layout')

@section('title')
    Gestion des promotions
@endsection

@section('style')
    <link rel="stylesheet" href="{{ url('css/crud_list.css') }}"/>
@endsection

@section('fil-ariane')
    @parent
    <li class="active">Gestion des promotions</li>
@endsection

@section('panel_content')

    @include('generale.form_notification')
    @include('generale.flash_message')

    @if($promotions->first() != null)
        <h3>Liste des promotions actuelles</h3><br/>

        <div class="crud-list">
            @foreach($promotions as $promotion)
                <div class="crud-list-item">
                    <div class="crud-list-left update-form-to-add">
                        <span class="glyphicon glyphicon-tags crud-list-icon" aria-hidden="true"></span>
                        <span class="crud-list-name"> {{ $promotion->nom }}</span>
                    </div>
                    <div class="crud-list-right">
                        <div class="update-form">
                            <form action="{{ route('admin_promotion_update', $promotion->id) }}" method="post" class="form-inline">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                                <input class="form-control" type="text" name="nom" placeholder="Nouveau nom de la promotion" required/>
                                <button class="btn btn-primary" type="submit">Envoyer</button>
                            </form>
                        </div>
                        <a class="crud-list-update btn btn-warning add-update-form"
                           update="{{ 'admin_promotion_update-'.$promotion->id }}">Modifier</a>
                        <a class="crud-list-delete btn btn-danger"
                           href="{{ route('admin_promotion_delete', $promotion->id) }}">Supprimer</a>
                    </div>
                </div>
            @endforeach
        </div>
        <br/>
    @endif

    <h3>Ajouter une nouvelle promotion</h3><br/>

    {!! Form::open(['route' => 'admin_promotion_post', 'class' => 'form', 'files' => true]) !!}
    <div class="form-group">
        <div class="input-to-add">
            <div class="input-group">
                <div class="input-group-addon"><span class="glyphicon glyphicon-tags"></span></div>
                {!! Form::text('promotion[0]', null, ['class' => 'form-control', 'placeholder' => 'Promotion à ajouter', 'min' => '2']) !!}
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