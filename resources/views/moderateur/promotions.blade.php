@extends('moderateur.layout')

@section('title')
    Mes promotions
@endsection

@section('style')
    <link rel="stylesheet" href="{{asset('css/libraries/select2.css')}}"/>
@endsection

@section('fil-ariane')
    @parent
    <li class="active">Mes promotions</li>
@endsection

@section('content')

    <br/>
    <h3>Mes promotions</h3><br/>

    @include('generale.flash_message')
    @include('generale.form_notification')

    @if($moderateur_promotions == [])
        <br/><h4>Saisissez vos promotions : </h4><br/>
    @endif

    {!! Form::open(['route' => 'moderateur-promotions', 'method' => 'post']) !!}
        <div class="form-group">
            <select class="select-multiple" multiple name="promotions[]" id="promotions">

                @foreach($promotions as $promotion)
                    @if(in_array($promotion->id, $moderateur_promotions))
                        <option value="{{ $promotion->id }}" selected>{{ $promotion->nom }}</option>
                    @else
                        <option value="{{ $promotion->id }}">{{ $promotion->nom }}</option>
                    @endif
                @endforeach
            </select>
        </div>
            <input type="submit" class="btn-form" value="Valider">
    {!! Form::close() !!}
@endsection

@section('script_js')

    <script src="{{asset('js/libraries/select2.js')}}"></script>

    <script type="text/javascript">
        $(document).ready(function(){
            $("#promotions").select2({
                tags: true
            })
        });
    </script>

@endsection