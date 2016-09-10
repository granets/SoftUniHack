@extends('layouts.master-admin')

@section('content')

 <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{ trans('monsters.table_monster') }}</div>
                <div class="panel-body">
        <div class="col-md-8 col-md-offset-2">
            <div>
                <div class="panel-body">
                    <form class="form form-horizontal" role="form" method="POST" action="{{ url('/monsters') }}">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="form-group col-md-11 col-md-push-1 {{ $errors->has('name') ? ' has-error' : '' }}">
                                <label>{{ trans('monsters.name') }}</label>
                                <input type="text" class="form-control" name="name" placeholder="{{trans('monsters.name')}}" value="{{e(old('name'))}}">
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-11 col-md-push-1 {{ $errors->has('code') ? ' has-error' : '' }}">
                                <label>{{ trans('monsters.code') }}</label>
                                <input type="text" class="form-control" name="code" placeholder="{{trans('monsters.code')}}" value="{{e(old('code'))}}">
                                @if ($errors->has('code'))
                                <span class="help-block">
                                   <strong>{{ $errors->first('code') }}</strong>
                                </span>
                            @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-11 col-md-push-1 {{ $errors->has('class') ? ' has-error' : '' }}">
                                <label>{{ trans('monsters.class') }}</label>
                                <input type="text" class="form-control" name="class" placeholder="{{trans('monsters.class')}}" value="{{e(old('class'))}}">
                                @if ($errors->has('class'))
                                <span class="help-block">
                                   <strong>{{ $errors->first('class') }}</strong>
                                </span>
                            @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-11 col-md-push-1 {{ $errors->has('subject') ? ' has-error' : '' }}">
                                <label>{{ trans('monsters.subject') }}</label>
                                <input type="text" class="form-control" name="subject" placeholder="{{trans('monsters.subject')}}" value="{{e(old('subject'))}}">
                                @if ($errors->has('subject'))
                                <span class="help-block">
                                   <strong>{{ $errors->first('subject') }}</strong>
                                </span>
                            @endif
                            </div>
                        </div>
                        <div class="form-group input-group">
        <span class="input-group-btn">
            <button class="btn btn-primary" name="missionenter" type="submit" style="border-radius: 3px;">{{ trans('monsters.submit_add') }}
            </button>
        </span>
                        </div>
                        </div>
                        </div>
                        </div>
                        </div>
                        </div>

                <div class="row col-lg-9 col-md-pull-3">
                    </form>
                   <div class="panel-body col-md-8 col-md-push-3" style="padding: 0;">
                <table class="table table-striped table-bordered table-striped table-hover">
                        <tr>
                            <th> {{ trans('monsters.table_monster') }}</th>
                            <th> {{ trans('monsters.table_pic') }}</th>
                            <th> {{ trans('monsters.table_class') }}</th>
                            <th> {{ trans('monsters.table_level') }}</th>
                            <th> {{ trans('monsters.table_points') }}</th>
                            <th> {{ trans('monsters.table_details') }}</th>
                            <th> {{ trans('monsters.update')}}</th>
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

                                    <td>
                                        <?php echo link_to_route('monster-edit',  $title = e(trans('monsters.update')), $parameters = array($monster->id), $attributes = array('class' => 'btn btn-success fa fa-edit')); ?>
                            </td>

                               <td>
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
                        
@endsection

                        

                       