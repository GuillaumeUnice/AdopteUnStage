@extends((str_contains(Request::url(), 'administrateur'))?'admin.layout':'moderateur.layout')


@section('title')
    Invitation
@endsection

@section('fil-ariane')
    @parent
    <li class="active">Invitation</li>
@endsection

@section('panel_ariane')
@endsection

@section('panel_content')

    @include('generale.form_notification')
    @include('generale.flash_message')

    <h3>Envoie token création de compte</h3><br/>

    <form class="form-horizontal" role="form" method="POST" action="{{ Request::url() }}">

        <input type="hidden" name="_token" value="{{ csrf_token() }}">


        <div class="input-group">
            <div class="input-group-addon"><span class="glyphicon glyphicon-user"></span></div>
            <input type="text" class="form-control" name="nom" placeholder="Nom de l'utilisateur" value="{{ old('nom') }}" required>
        </div>
        <br/>

        <div class="input-group">
            <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
            <input type="email" class="form-control" name="email" placeholder="Adresse email de l'utilisateur" value="{{ old('email') }}" required>
        </div>
        <br/>

        <div class="required-info">
            <i>* Les champs en rouge sont obligatoires</i><br/>
        </div>

        <p class="login button">
            <input type="submit" class="btn-form" value="Valider">
        </p>

    </form>

    <br/><br/><h4>Envoie multiple : </h4><br/>

    <div class="left">
        <pre>Attention, pour que l'envoie puisse être réalisé, il faut respecter le format csv suivant :<br/>
            |--------------------------------------------------------------
            | fichier.csv
            |--------------------------------------------------------------
            |
            | nom,prenom,email
            | Nom1,Prenom1,email1@adresse.fr
            | Nom2,Prenom2,email2@adresse.fr
            |
        </pre>
        <br/>
    </div>

    @if(Auth::user()->role->id == 1)
        <form class="form-horizontal" role="form" method="POST" action="{{ url(route('invitation-moderateur-multiple')) }}" enctype="multipart/form-data">
    @elseif(Auth::user()->role->id == 2)
        <form class="form-horizontal" role="form" method="POST" action="{{ url(route('invitation-etudiant-multiple')) }}" enctype="multipart/form-data">
    @endif

        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <div class="input-group">
            <div class="input-group-addon"><span class="glyphicon glyphicon-cloud-upload"></span></div>
            <input type="file" class="form-control" name="file" required>
        </div>
        <br/>

        <div class="required-info">
            <i>* Les champs en rouge sont obligatoires</i><br/>
        </div>

        <p class="login button">
            <input type="submit" class="btn-form" value="Valider">
        </p>

    </form>


@endsection
