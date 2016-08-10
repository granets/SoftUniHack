@extends('layouts.master-admin')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{ trans('monsters.code_title') }}</div>
                <div class="panel-body">
                    
                        <div class="row">
                            <div class="form-group col-md-6 col-md-push-3">
                                <label>{{ trans('monsters.class_found') }}</label>
                                {{$cm_class->class_number}}{{$cm_class->class_letter}}
                            </div>
                        </div>
                        
                        <form class="form form-horizontal" role="form" method="POST" action="{{ url('/add-code') }}">
                        {{ csrf_field() }}
                        <input type="hidden" name="class_id" value="{{$cm_class->id}}"/>
                        <div class="form-group input-group">
                            <span class="input-group-btn">
                                <button class="btn btn-primary" name="approve" type="submit" style="border-radius: 3px;">{{ trans('monsters.yes') }}
                                </button>
                            </span>
                        </form>
                        <form class="form form-horizontal" role="form" method="POST" action="{{ url('/user-code') }}">
                        {{ csrf_field() }}
                            <span class="input-group-btn">
                                <button class="btn btn-danger" name="reject" type="submit" style="border-radius: 3px;">{{ trans('monsters.no') }}
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

                        

                       