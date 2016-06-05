@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Точки</div>
                <div class="panel-body">
                    
                        

                        @foreach ($all_missions as $mission)
						    
                            <form class="form-horizontal" role="form" method="POST" action="{{ url('/awarding') }}">
                                <div class="form-group{{ $errors->has('mission_points') ? ' has-error' : '' }}">
                                    <label for="mission_points" class="col-md-4 control-label">{{ $mission->mission }} - {{$mission->points}} т.</label>

                                    <div class="col-md-5">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input id="mission" type="text" class="form-control" name="mission_points" value="{{ old('mission_points') }}">
                                        <textarea id="comment" name="achievement_comment" class="col-md-12">

                                        </textarea>
                                        <input id="save_mission" type="submit" class="form-control btn btn-primary" name="save" value="Добави точки"/>
                                        @if ($errors->has('mission_points'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('mission_points') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </form>
						@endforeach

                        <table class="table table-striped table-bordered table-hover">
                        <tr>
                            <th> Мисия</th>
                            <th> Точки</th>
                            <th> Коментар</th>
                        </tr>
                        @foreach($all_awardings as $awarding)
                            <tr>
                                <td>{{$awarding->mission}} </td>
                                <td>{{$awarding->day_achievement}} </td>
                                <td>{{$awarding->achievement_comment}}</td>
                            </tr>
                        @endforeach
                        <table>
@endsection

                        

                       