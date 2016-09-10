@extends ('layouts.master-admin')
@section('content')
    <div class="container form form-horizontal container-fliud">
    <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{ trans('monsters.table_monster') }}</div>
                <div class="panel-body">

    {!! Form::open(array('url' => ['monster-update', $monster->id]))!!}

    <div class="row">

        <div class="form-group col-md-6 col-md-push-3">
        <div class=" {{ $errors->has('name') ? ' has-error' : '' }}">
            <label class="control-label" for="textinput">{{trans('monsters.name')}}</label>
            {!! Form::text('name', $monster->name, array('class' => 'form-control')) !!}
            @if ($errors->has('name'))
                                <span class="help-block">
                                   <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
        </div>
        <div class="{{ $errors->has('code') ? ' has-error' : '' }}">
            <label class="control-label " for="textinput">{{trans('monsters.code')}}</label>
            {!! Form::text('code', $monster->code, array('class' => 'form-control' )) !!}
            @if ($errors->has('code'))
                                <span class="help-block">
                                   <strong>{{ $errors->first('code') }}</strong>
                                </span>
                            @endif
        </div>
        <div class="{{ $errors->has('class') ? ' has-error' : '' }}">
            <label class="control-label" for="textinput">{{trans('monsters.class')}}</label>
            {!! Form::text('class', $monster->class, array('class' => 'form-control' )) !!}
            @if ($errors->has('class'))
                                <span class="help-block">
                                   <strong>{{ $errors->first('class') }}</strong>
                                </span>
                            @endif
        </div>
        <div class="{{ $errors->has('subject') ? ' has-error' : '' }}">
            <label class="control-label" for="textinput">{{trans('monsters.subject')}}</label>
            {!! Form::text('subject', $monster->subject, array('class' => 'form-control' )) !!}
            @if ($errors->has('subject'))
                                <span class="help-block">
                                   <strong>{{ $errors->first('subject') }}</strong>
                                </span>
                            @endif
        </div>
        </div>

    </div>

            {!! Form::hidden('id', $monster->id) !!}

    <div class="form-group input-group">
        <span class="input-group-btn">
            {!! Form::submit(e(trans("monsters.update")), array('class'=>'btn btn-primary'))!!}
        </span>
    </div>


    {!! Form::close() !!}
</div>
</div>
</div>
</div>
</div>
</div>

@endsection