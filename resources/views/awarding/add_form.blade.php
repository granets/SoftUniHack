@extends('layouts.master-admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Точки</div>
                <div class="panel-body">
                    
                        
                    <table class="table table-striped table-bordered table-hover">
                        <tr>
                            <th> Мисия</th>
                            <th> Точки</th>
                            <th> Коментар</th>
                            <th> </th>
                        </tr>
                        @foreach ($all_missions as $mission)
						    
                            <form class="form-horizontal" role="form" method="POST" action="{{ url('/awarding') }}">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div class="form-group{{ $errors->has('mission_points') ? ' has-error' : '' }}">
                                <tr class="success">
                                    <td>{{ $mission->mission }} - {{$mission->points}} т.</td>
                                    <td><input id="mission" type="text" class="form-control" name="mission_points" value="{{ old('mission_points') }}"> </td>
                                    <td> 
                                        <textarea id="comment" name="achievement_comment" class="col-md-12">
                                        </textarea>
                                    </td>
                                    <td><input id="save_mission" type="submit" class="form-control btn btn-primary" name="save" value="Добави точки"/> </td>
                                </tr>
                            </form>
                            @if ($errors->has('mission_points'))
                                <span class="help-block">
                                   <strong>{{ $errors->first('mission_points') }}</strong>
                                </span>
                            @endif
						@endforeach
                    </table>
                        Общо: {{$total_points}}
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
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection