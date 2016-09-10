@extends('layouts.master-admin')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{ trans('classes.title') }}</div>
                <div class="panel-body">
                    <form class="form form-horizontal" role="form" method="POST" action="{{ url('/classes') }}">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="form-group col-md-6 col-md-push-3 {{ $errors->has('school_id') ? ' has-error' : '' }}">
                                <label>{{ trans('classes.cl_schools') }}</label>
                                <select name="school_id" class="form-control">
                                    <option value=""> </option>
                                    @foreach ($all_cl_schools as $school)
                                        <option value="{{$school->id}}"> {{$school->school_name}} - {{$school->school_address}}</option>
                                    @endforeach
                                </select>
                                <?php if($errors->has('school_id')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('school_id')); ?></strong>
                                    </span>
                                 <?php endif; ?>

                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6 col-md-push-3 {{ $errors->has('class_number') ? ' has-error' : '' }}">
                                <label>{{ trans('classes.cl_class_number') }}</label>
                                <select name="class_number" class="form-control">
                                    <option value=""> </option>
                                    @foreach ($all_cl_class_numbers as $class_number)
                                        <option value="{{$class_number->class_number}}"> {{$class_number->class_number}}</option>
                                    @endforeach
                                </select>
                                 <?php if($errors->has('class_number')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('class_number')); ?></strong>
                                    </span>
                                 <?php endif; ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6 col-md-push-3 {{ $errors->has('class_letter') ? ' has-error' : '' }}">
                                <label>{{ trans('classes.cl_class_letter') }}</label>
                                <select name="class_letter" class="form-control">
                                    <option value=""> </option>
                                    @foreach ($all_cl_class_letters as $class_letter)
                                        <option value="{{$class_letter->letter}}"> {{$class_letter->letter}}</option>
                                    @endforeach
                                </select>
                                 <?php if($errors->has('class_letter')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('class_letter')); ?></strong>
                                    </span>
                                 <?php endif; ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6 col-md-push-3 {{ $errors->has('school_year') ? ' has-error' : '' }}">
                                <label>{{ trans('classes.cl_school_year') }}</label>
                                <select name="school_year" class="form-control">
                                    <option value=""> </option>
                                    @foreach ($all_cl_school_years as $school_year)
                                        <option value="{{$school_year->school_year}}"> {{$school_year->school_year}}</option>
                                    @endforeach
                                </select>
                                 <?php if($errors->has('school_year')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('school_year')); ?></strong>
                                    </span>
                                 <?php endif; ?>
                            </div>
                        </div>
                        
                        <div class="form-group input-group">
                            <span class="input-group-btn">
                                <button class="btn btn-primary" name="missionenter" type="submit" style="border-radius: 3px;">{{ trans('classes.td_update') }}
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