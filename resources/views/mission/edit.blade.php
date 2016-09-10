@extends ('layouts.master-admin')
@section('content')
    <div class="container form form-horizontal container-fliud">
    <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{ trans('missions.table_mission') }}</div>
                <div class="panel-body">

    {!! Form::open(array('url' => ['mission-update', $mission->id]))!!}

    <div class="row">

        <div class="form-group col-md-6 col-md-push-3">
        <div class="{{ $errors->has('mission') ? ' has-error' : '' }}">
            <label class="control-label {{ $errors->has('mission') ? ' has-error' : '' }}" for="textinput">{{trans('missions.table_mission')}}</label>
            {!! Form::text('mission', $mission->mission, array('class' => 'form-control')) !!}
            @if ($errors->has('mission'))
                                <span class="help-block">
                                   <strong>{{ $errors->first('mission') }}</strong>
                                </span>
                            @endif
        </div>
        <div class="{{ $errors->has('points') ? ' has-error' : '' }}">
            <label class="control-label" for="textinput">{{trans('missions.table_points')}}</label>
            {!! Form::text('points', $mission->points, array('class' => 'form-control' )) !!}
            @if ($errors->has('points'))
                                <span class="help-block">
                                   <strong>{{ $errors->first('points') }}</strong>
                                </span>
                            @endif
        </div>
            <div class="row form-group col-lg-6 col-lg-push-3">
            <div class="{{ $errors->has('min_level') ? ' has-error' : '' }}">
                                <label>{{ trans('missions.select') }}</label>
                                <?php
                echo Form::select('min_level', $levels, null, ['placeholder' => "", 'class' => 'form-control']);
            ?>
                            @if ($errors->has('min_level'))
                                <span class="help-block">
                                   <strong>{{ $errors->first('min_level') }}</strong>
                                </span>
                            @endif
                            </div>
                        </div>

        </div>

    </div>

            {!! Form::hidden('id', $mission->id) !!}

    <div class="form-group input-group">
        <span class="input-group-btn">
            {!! Form::submit(e(trans("missions.update")), array('class'=>'btn btn-primary'))!!}
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