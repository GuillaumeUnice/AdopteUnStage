
@extends('template')

@section('title')
    adopteunstage
@endsection

@section('menu_li')
    <li><a href="{{ url(route('index')) }}">Accueil</a></li>
@endsection

@section('content')

            @include('generale.form_notification')
            @include('generale.flash_message')

            <h3>Inscriptions entreprises </h3><br/>


            <form  role="form" method="POST" role="form" method="POST" action="{{ Request::url() }}">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="input-group">
                    <div class="input-group-addon"><span class="glyphicon glyphicon-briefcase"></span></div>
	                <input class="form-control" type="text" name="nom_entreprise" placeholder="Nom de l'Entreprise" value="{{ old('nom_entreprise') }}">
	            </div>
                <br/>

                <div class="input-group">
                    <div class="input-group-addon"><span class="glyphicon glyphicon-user"></span></div>
                    <input class="form-control" type="text" name="name" placeholder="Nom du contact" value="{{ old('name') }}">
                </div>
                <br/>

                <div class="input-group">
                    <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                    <input class="form-control" type="email" id="emailsignup" name="email" placeholder="Adresse email du contact" value="{{ old('email') }}"/>
                </div>
                <br/>

                <div class="input-group">
                    <div class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></div>
                    <input class="form-control" id="passwordsignup" name="password" required="required" type="password" placeholder="Mot de passe"/>
                </div>
                <br/>

                <div class="input-group">
                    <div class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></div>
                    <input class="form-control" id="passwordsignup_confirm" name="password_confirmation" required="required" type="password" placeholder="Confirmation du mot de passe"/>
                </div>
                <br/>

                <p class="login button">
                    <input type="submit" class="login button btn btn-default" value="S'inscrire"/>
                </p>

			</form>
@endsection
