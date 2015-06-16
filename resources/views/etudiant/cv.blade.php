@extends('etudiant.layout')

@section('title')
    CV Etudiant
@endsection

@section('fil-ariane')
    @parent
    <li class="active">CV</li>
@endsection

@section('content')


    <h3>CV Etudiant</h3><br/>


    @include('generale.form_notification')
    @include('generale.flash_message')

    @if(isset($cv))
        <iframe id="fred" style="border:1px solid #666CCC" title="" src="{{ asset($cv) }}"
                frameborder="1" scrolling="auto" height="1000" width="721" ></iframe>
        <br/><br/><br/>
    @endif


    <h4>Uploader un nouveau CV</h4><br/>

    {!! Form::open(['route' => 'cv-etudiant', 'class' => 'form-inline', 'files' => true, 'enctype'  => 'multipart/form-data']) !!}
        <div class="input-group form-group left-bg">
            <div class="input-group-addon"><span class="glyphicon glyphicon-cloud-upload"></span></div>
            <input type="file" name="cv" class="form-control" required />
        </div>
        <div class="form-group right-bg">
            {!! Form::submit('Envoyer', ['class' => 'btn-form right']) !!}
        </div>
    {!! Form::close() !!}

    <div class="required-info left">
        <br/><i>* Les champs en rouge sont obligatoires</i><br/>
    </div>

@endsection

@section('script')

@endsection