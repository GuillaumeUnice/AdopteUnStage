@extends('mail.layout')

@section('content')
    <br/>Un administrateur de votre école vous invite à rejoindre utiliser l'application "adopteunstage" en tant que modérateur.
    <br/><br/>Pour vous inscrire, il vous suffit de cliquer sur le lien suivant et de suivre les instructions :
    <a href="{{ url('/moderateur/inscription') . '/' . $token }}">{{ url('/moderateur/inscription') . '/' . $token }}</a>
@endsection