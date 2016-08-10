@extends('layouts.master-admin')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{ trans('monsters.code_title') }}</div>
                <div class="panel-body">
                    <form class="form form-horizontal" role="form" method="POST" action="{{ url('/user-code') }}">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="form-group col-md-6 col-md-push-3">
                                <label>{{ trans('monsters.code_input') }}</label>
                                <input type="text" class="form-control" name="code" placeholder="{{ trans('monsters.code_placeholder') }}">
                            </div>
                        </div>
                        
                        <div class="form-group input-group">
                            <span class="input-group-btn">
                                <button class="btn btn-primary" name="missionenter" type="submit" style="border-radius: 3px;">{{ trans('monsters.add_code') }}
                                </button>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

                        

                       