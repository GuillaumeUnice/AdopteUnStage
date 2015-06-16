@extends('mail.layout')

@section('content')
    <br/>Un modérateur de votre école vous invite à rejoindre utiliser l'application "adopteunstage" en tant qu'étudiant.
    <br/><br/>Pour vous inscrire, il vous suffit de cliquer sur le lien suivant et de suivre les instructions :
    <a href="{{ url('/etudiant/inscription') . '/' . $token }}">{{ url('/etudiant/inscription') . '/' . $token }}</a>
@endsection