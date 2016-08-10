@extends('layouts.master-admin')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{ trans('monsters.title') }}</div>
                <div class="panel-body">
                    <form class="form form-horizontal" role="form" method="POST" action="{{ url('/monsters') }}">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="form-group col-md-6 col-md-push-3">
                                <label>{{ trans('monsters.name') }}</label>
                                <input type="text" class="form-control" name="name" placeholder="Име">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6 col-md-push-3">
                                <label>{{ trans('monsters.code') }}</label>
                                <input type="text" class="form-control" name="code" placeholder="Код">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6 col-md-push-3">
                                <label>{{ trans('monsters.class') }}</label>
                                <input type="text" class="form-control" name="class" placeholder="Клас">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6 col-md-push-3">
                                <label>{{ trans('monsters.subject') }}</label>
                                <input type="text" class="form-control" name="subject" placeholder="Предмет">
                            </div>
                        </div>
                        <div class="form-group input-group">
        <span class="input-group-btn">
            <button class="btn btn-primary" name="missionenter" type="submit" style="border-radius: 3px;">{{ trans('monsters.submit_add') }}
            </button>
        </span>
                        </div>
                    </form>
                    <table class="table table-striped table-bordered table-hover">
                        <tr>
                            <th> {{ trans('monsters.table_monster') }}</th>
                            <th> {{ trans('monsters.table_pic') }}</th>
                            <th> {{ trans('monsters.table_class') }}</th>
                            <th> {{ trans('monsters.table_level') }}</th>
                            <th> {{ trans('monsters.table_points') }}</th>
                            <th> {{ trans('monsters.table_details') }}</th>
                            <th>{{ trans('monsters.table_delete') }}</th>
                        </tr>
                        @foreach ($all_monsters as $monster)
                           <tr>
                                    <td>{{ $monster->name }}</td>
                                    <td><img src='{{asset("img/$monster->picture")}}' class="img img-responsive" width="128" alt="{{ $monster->name }}"/></td>
                                    <td> {{$monster->class}}</td>
                                    <td> {{$monster->level}}</td>
                                    <td> {{$monster->points}} {{ trans('monsters.td_points_str') }}</td>
                                    <td><a href='{{url("/awarding/$monster->id")}}'> {{ trans('monsters.td_details') }}</a></td>
                               <td width="10%;">
                                   <form action="{{ url('monsters/'.$monster->id) }}" method="POST">
                                       {{ csrf_field() }}
                                       {{ method_field('DELETE') }}

                                       <button type="submit" class="btn btn-danger">
                                           <i class="fa fa-trash"></i> {{ trans('monsters.td_delete') }}
                                       </button>
                                       <input type="hidden" name="_method" value="DELETE">
                                   </form>
                               </td>
                            </tr>
                        @endforeach
                    </table>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

                        

                       