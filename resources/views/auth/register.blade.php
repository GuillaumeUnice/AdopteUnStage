@extends('template')

@section('content')
		<a class="hiddenanchor" id="toregister"></a>
	    <a class="hiddenanchor" id="tologin"></a>
    	<div id="wrapper">
	    	<div id="login" class="animate form">
	    		@if (count($errors) > 0)
					<div class="alert alert-danger">
						<strong>Whoops!</strong> There were some problems with your input.<br><br>
						<ul>
							@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
							@endforeach
						</ul>
					</div>
				@endif

                    <h3> Inscription </h3><br/>


                    <form  role="form" method="POST" action="{{ Request::url() }}">
					<input type="hidden" name="_token" value="{{ csrf_token() }}"/>

                        <div class="input-group">
                            <div class="input-group-addon"><span class="glyphicon glyphicon-user"></span></div>
                            <input class="form-control" type="text" id="usernamesignup" name="name" placeholder="Votre nom" value="{{ old('name') }}"/>
                        </div>
                        <br/>

                        <div class="input-group">
                            <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                            <input class="form-control" type="email" id="emailsignup" name="email" placeholder="Adresse email" value="{{ old('email') }}"/>
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


	                <p class="signin button"> 
						<input class="btn-form" type="submit" value="S'inscrire"/>
					</p>
				</form>
			</div>
		</div>

@endsection
