@extends ('layouts.master-admin')
@section('content')
    <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{ trans('missions.table_mission') }}</div>
                <div class="panel-body">
        <form class="form form-horizontal" role="form" method="POST" action="{{ url('/mission') }}">
        {{ csrf_field() }}
            <div class="row">
                <div class="form-group col-md-6 col-md-push-3  {{ $errors->has('mission') ? ' has-error' : '' }}">
                    <label>{{trans('missions.form_mission')}}</label>
                    <textarea class="form-control" name="mission" placeholder="">{{ e(old('mission'))}} </textarea>
                    <?php if($errors->has('mission')): ?>
                        <span class="help-block">
                            <strong><?php echo e($errors->first('mission')); ?></strong>
                        </span>
                    <?php endif; ?>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6 col-md-push-3 {{ $errors->has('points') ? ' has-error' : '' }}">
                    <label>{{trans('missions.form_points')}}</label>
                    <input type="number" class="form-control" name="points" placeholder="{{trans('missions.form_points')}}" value="{{e(old('points'))}}">
                    @if ($errors->has('points'))
                                <span class="help-block">
                                   <strong>{{ $errors->first('points') }}</strong>
                                </span>
                            @endif
                </div>
             </div>
             <div class="row">
                            <div class=" form-group col-md-6 col-md-push-3 {{ $errors->has('min_level') ? ' has-error' : '' }}">
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
        
        <div class="form-group input-group">
        <span class="input-group-btn">
            <button class="btn btn-primary" name="missionenter" type="submit" style="border-radius: 3px;">{{trans('missions.form_submit')}}
            </button>
        </span>
        </div>
    </form>
    </div>
     </div>
        </div>
        </div>
        </div>
        </div>
    @if (count($missions) > 0)
        <div class="row col-lg-9 col-md-pull-1">
            <div>
                <p class="col-md-6 col-md-push-6"><b>{{trans('missions.missions_list')}}</b></p>
            </div>

            <div class="panel-body col-md-8 col-md-push-3" style="padding: 0;">
                <table class="table table-striped table-bordered table-striped table-hover">

                    <!-- Table Headings -->
                    <thead>
                    <th>{{trans('missions.table_mission')}}</th>
                    <th>{{trans('missions.table_points')}}</th>
                    <th>{{trans('missions.table_level')}}</th>
                    <th>{{trans('missions.update')}}</th>
                    <th>{{trans('missions.table_delete')}}</th>
                    </thead>

                    <!-- Table Body -->
                    <tbody>
                    @foreach ($missions as $mission)

                        <tr>
                            <!-- Task Name -->
                            <td class="">
                                {{ $mission->mission }}
                            </td>
                            <td class="">
                                {{ $mission->points }} {{trans('missions.td_pts')}}
                            </td>
                            <td class="">
                                {{ $mission->cmLevel['number'] }}. {{ $mission->cmLevel['levels'] }}
                            </td>
                            <td width="17%;">
                                        <?php echo link_to_route('mission-edit',  $title = e(trans('missions.update')), $parameters = array($mission->id), $attributes = array('class' => 'btn btn-success fa fa-edit')); ?>
                            </td>
                            <td width="10%;">
                                <form action="{{ url('mission/'.$mission->id) }}" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}

                                    <button type="submit" class="btn btn-danger">
                                        <i class="fa fa-trash"></i> {{trans('missions.td_delete')}}
                                    </button>
                                    <input type="hidden" name="_method" value="DELETE">
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
       
    @endif

@endsection