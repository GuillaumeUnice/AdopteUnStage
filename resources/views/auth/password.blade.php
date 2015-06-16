@extends('template')

@section('title')
    AdopteUnStage
@endsection

@section('menu_li')
    <li><a href="{{ url(route('index')) }}">Accueil</a></li>
@endsection

@section('content')

    @include('generale.form_notification')
    @include('generale.flash_message')

    <h3>Mot de passe oublié</h3><br/>

    <form class="form-inline" role="form" method="POST" action="{{ url('/password/email') }}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">


        <div class="input-group">
            <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
            <input class="form-control" type="email" id="emailsignup" name="email" placeholder="Adresse email du compte" value="{{ old('email') }}"/>
        </div>
        <input class="btn btn-default" type="submit" value="Réinitialiser"/>

	</form>


@endsection
