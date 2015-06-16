@extends('etudiant.layout')

@section('title')
    Gestion du profil
@endsection

@section('style')
    <link rel="stylesheet" href="{{asset('css/libraries/select2.css')}}"/>
@endsection

@section('fil-ariane')
    @parent
    <li class="active">Gestion des compétences</li>
@endsection

@section('content')


    <h3>Compétences</h3><br/>


    @include('generale.form_notification')
    @include('generale.flash_message')

    @if($etudiant_competence == [])
    <br/><h4>Saisissez vos compétences : </h4><br/>
    @endif

        <form role="form" method="POST" action="{{ url('etudiant/competence') }}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <div class="form-group">
                <select class="select-multiple" multiple name="competence[]" id="competence">

                    @foreach($competences as $competence)
                        @if(in_array($competence->nom, $etudiant_competence))
                            <option value="{{ $competence->nom }}" selected>{{ $competence->nom }}</option>
                        @else
                            <option value="{{ $competence->nom }}">{{ $competence->nom }}</option>
                        @endif
                        {{--<option value="{{ $competence->nom }}" {{  ? "selected" : "" }}>{{ $competence->nom }}</option>--}}
                    @endforeach
                </select>
            </div>
                <input type="submit" class="btn-form" value="Valider">
    </form>

@endsection

@section('script_js')
    <script src="{{asset('js/libraries/select2.js')}}"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $("#competence").select2({
                tags: true
            })
        });
    </script>
@endsection


