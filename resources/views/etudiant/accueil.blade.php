@extends('etudiant.layout')

@section('title')
    Responsables de ma promotion
@endsection

@section('fil-ariane')
    @parent
    <li class="active">Responsables de ma promotion</li>
@endsection

@section('content')

    <br/>

    @include('generale.flash_message')
    @include('generale.form_notification')


    <div class="historique__header">
        <div class="historique__header__title">
            <span class="historique__header__title__span">Responsables de ma promotion</span>
        </div>
    </div>
    <br/>


@endsection
