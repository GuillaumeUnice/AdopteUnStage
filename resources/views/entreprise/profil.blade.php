@extends('entreprise.layout')

@section('title')
    Profil Entreprise
@endsection

@section('fil-ariane')
    @parent
    <li class="active">Profil entreprise</li>
@endsection

@section('content')

    <a href="{{ url(route('accueil-entreprise')) }}"></a>

    <br/>
    <h3>Profil</h3><br/>

    @include('generale.flash_message')
    @include('generale.form_notification', ['errors' => $errors])
    <form role="form" method="POST" action="{{ url(route('profil-entreprise')) }}" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="_id" id='_id' value="{{ $entreprise->id }}">

        <div class="input-group">
            <div class="input-group-addon"><span class="glyphicon glyphicon-briefcase"></span></div>
            <input class="form-control" type="text" name="nom" id="nom" placeholder="Nom de l'entreprise" required="required" value="{{ $entreprise->nom }}"/>
            <div class="input-group-addon"><span>Nom de l'entreprise</span></div>
        </div>
        <br/>

        <div class="input-group">
            <div class="input-group-addon"><span class="glyphicon glyphicon-floppy-save"></span></div>
            <input class="form-control" type="text" name="siret" id="siret" placeholder="Numéro de siret" value="{{ $entreprise->siret }}"/>
            <div class="input-group-addon"><span>Numéro de Siret</span></div>
        </div>
        <br/>

        <div class="input-group">
            <div class="input-group-addon"><span class="glyphicon glyphicon-map-marker"></span></div>
            <input class="form-control" type="text" name="lieu" id="lieu" placeholder="Ville/Adresse" value="{{ $entreprise->lieu }}"/>
            <div class="input-group-addon"><span>Ville</span></div>
        </div>
        <br/>

        <div class="input-group">
            <div class="input-group-addon"><span class="glyphicon glyphicon-phone"></span></div>
            <input class="form-control" type="tel" name="telephone" id="telephone" placeholder="Numéro de téléphone" value="{{ $entreprise->telephone }}" />
            <div class="input-group-addon"><span>Téléphone</span></div>
        </div>
        <br/>

        <div class="input-group">
            <div class="input-group-addon"><span class="glyphicon glyphicon-duplicate"></span></div>
            <input class="form-control" type="text" name="fax" id="fax" placeholder="Fax" value="{{ $entreprise->fax }}"/>
            <div class="input-group-addon"><span>Fax</span></div>
        </div>
        <br/>

        <div class="input-group">
            <div class="input-group-addon"><span class="glyphicon glyphicon-stats"></span></div>
            <input class="form-control" type="number" name="taille" id="taille" min="0" step="5" placeholder="Nombre employé (ordre de grandeur)" value="{{ $entreprise->taille }}"/>
            <div class="input-group-addon"><span>Taille de l'entreprise</span></div>
        </div>
        <br/>

        <div class="input-group">
            <div class="input-group-addon"><span class="glyphicon glyphicon-tags"></span></div>
            <input class="form-control" type="text" name="secteur" id="secteur" placeholder="Secteur d'activité" value="{{ $entreprise->secteur }}"/>
            <div class="input-group-addon"><span>Secteur d'activité</span></div>
        </div>
        <br/>

        <div class="input-group">
            <div class="input-group-addon"><span class="glyphicon glyphicon-link"></span></div>
            <input class="form-control" type="url" name="site" id="site" placeholder="Site web" value="{{ ($entreprise->site != '') ? $entreprise->site : "http://" }}" >
            <div class="input-group-addon"><span>Site web</span></div>
        </div>
        <br/>

        <div class="input-group">
            <div class="input-group-addon"><span class="glyphicon glyphicon-link"></span></div>
            <textarea class="form-control" name="sociaux" id="sociaux"  placeholder="Réseaux sociaux" cols="30" rows="5" >{{ $entreprise->sociaux }}</textarea>
            <div class="input-group-addon"><span>Réseaux sociaux</span></div>
        </div>
        <br/>

        <div class="input-group">
            <div class="input-group-addon"><span class="glyphicon glyphicon-pencil"></span></div>
            <textarea class="form-control" name="description" id="description" placeholder="Description de l'entreprise" cols="30" rows="5" >{{ $entreprise->description }}</textarea>
            <div class="input-group-addon"><span>Description</span></div>
        </div>
        <br/>


        @if(isset($entreprise->logo))
            <img src="{{ url('uploads/entreprises/'.$entreprise->nom.'/'.$entreprise->logo) }}" height="100"/>
        @endif
        <div class="input-group">
            <div class="input-group-addon"><span class="glyphicon glyphicon-cloud-upload"></span></div>
            <input type="file" class="form-control" name="logo" id="logo"/>
            <div class="input-group-addon"><span>Logo</span></div>
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