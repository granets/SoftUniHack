@extends ('layouts.master-admin')
@section('content')
    <div class="container form form-horizontal container-fliud">
    <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{ trans('levels.table_levels') }}</div>
                <div class="panel-body">

    {!! Form::open(array('url' => ['level-update', $level->id]))!!}

    <div class="row">

        <div class="form-group col-md-6 col-md-push-3">
        <div class=" {{ $errors->has('number') ? ' has-error' : '' }}">
            <label class="control-label" for="textinput">{{trans('levels.table_number')}}</label>
            {!! Form::text('number', $level->number, array('class' => 'form-control' )) !!}
            @if ($errors->has('number'))
                                <span class="help-block">
                                   <strong>{{ $errors->first('number') }}</strong>
                                </span>
                            @endif
        </div>
        <div class=" {{ $errors->has('levels') ? ' has-error' : '' }}">
            <label class="control-label" for="textinput">{{trans('levels.table_levels')}}</label>
            {!! Form::text('levels', $level->levels, array('class' => 'form-control')) !!}
            @if ($errors->has('levels'))
                                <span class="help-block">
                                   <strong>{{ $errors->first('levels') }}</strong>
                                </span>
                            @endif
        </div>
        </div>

    </div>

            {!! Form::hidden('id', $level->id) !!}

    <div class="form-group input-group">
        <span class="input-group-btn">
            {!! Form::submit(e(trans("levels.update")), array('class'=>'btn btn-primary'))!!}
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