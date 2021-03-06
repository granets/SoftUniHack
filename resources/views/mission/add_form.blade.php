@extends ('layouts.master-admin')
@section('content')
    <div class="container-fluid">
        <form class="form form-horizontal" role="form" method="POST" action="{{ url('/mission') }}">
        {{ csrf_field() }}
            <div class="row">
                <div class="form-group col-md-6 col-md-push-3">
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
                <div class="form-group col-md-6 col-md-push-3">
                    <label>{{trans('missions.form_points')}}</label>
                    <input type="number" class="form-control" name="points" placeholder="{{trans('missions.form_points')}}">
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
    @if (count($missions) > 0)
        <div class="container-fluid">
            <div>
                <p class="col-md-6 col-md-push-3"><b>{{trans('missions.missions_list')}}</b></p>
            </div>

            <div class="panel-body col-md-8 col-md-push-3" style="padding: 0;">
                <table class="table table-striped table-bordered table-striped table-hover">

                    <!-- Table Headings -->
                    <thead>
                    <th>{{trans('missions.table_mission')}}</th>
                    <th>{{trans('missions.table_points')}}</th>
                    <th>{{trans('missions.table_delete')}}</th>
                    </thead>

                    <!-- Table Body -->
                    <tbody>
                    @foreach ($missions as $mission)
                        <tr>
                            <!-- Task Name -->
                            <td class="">
                                <div>{{ $mission->mission }}</div>
                            </td>
                            <td class="">
                                <div>{{ $mission->points }} {{trans('missions.td_pts')}}</div>
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
        </div>
    @endif

@endsection