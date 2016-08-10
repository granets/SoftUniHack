@extends('layouts.master-admin')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{ trans('classes.title') }}</div>
                <div class="panel-body">
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form class="form form-horizontal" role="form" method="POST" action="{{ url('/classes') }}">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="form-group col-md-6 col-md-push-3">
                                <label>{{ trans('classes.cl_schools') }}</label>
                                <select name="school_id" class="form-control">
                                    <option value=""> </option>
                                    @foreach ($all_cl_schools as $school)
                                        <option value="{{$school->id}}"> {{$school->school_name}} - {{$school->school_address}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6 col-md-push-3">
                                <label>{{ trans('classes.cl_class_number') }}</label>
                                <select name="class_number" class="form-control">
                                    <option value=""> </option>
                                    @foreach ($all_cl_class_numbers as $class_number)
                                        <option value="{{$class_number->class_number}}"> {{$class_number->class_number}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6 col-md-push-3">
                                <label>{{ trans('classes.cl_class_letter') }}</label>
                                <select name="class_letter" class="form-control">
                                    <option value=""> </option>
                                    @foreach ($all_cl_class_letters as $class_letter)
                                        <option value="{{$class_letter->letter}}"> {{$class_letter->letter}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6 col-md-push-3">
                                <label>{{ trans('classes.cl_school_year') }}</label>
                                <select name="school_year" class="form-control">
                                    <option value=""> </option>
                                    @foreach ($all_cl_school_years as $school_year)
                                        <option value="{{$school_year->school_year}}"> {{$school_year->school_year}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        
                        <div class="form-group input-group">
                            <span class="input-group-btn">
                                <button class="btn btn-primary" name="missionenter" type="submit" style="border-radius: 3px;">{{ trans('classes.submit_add') }}
                                </button>
                            </span>
                        </div>
                    </form>
                    <table class="table table-striped table-bordered table-hover">
                        <tr>
                            <th> {{ trans('classes.cl_schools') }}</th>
                            <th> {{ trans('classes.class') }}</th>
                            <th> {{ trans('classes.cl_school_year') }}</th>
                            <th> {{ trans('classes.lead_teacher') }}</th>
                            <th> {{ trans('classes.code') }}</th>
                            <th> </th>                            
                        </tr>
                        @foreach ($all_classes as $class)
                           <tr>
                                <td>{{ $class->clSchool['school_name'] }}</td>
                                <td>{{ $class->class_number }} {{ $class->class_letter }}</td>
                                <td>{{ $class->school_year }}</td>
                                <td>{{ $class->cm_lead_teacher_id }}</td>
                                <td>{{ $class->class_code }}</td>
                                    
                                <td width="10%;">
                                   <form action="{{ url('classes/'.$class->id) }}" method="POST">
                                       {{ csrf_field() }}
                                       {{ method_field('DELETE') }}

                                       <button type="submit" class="btn btn-danger">
                                           <i class="fa fa-trash"></i> {{ trans('classes.td_delete') }}
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

                        

                       