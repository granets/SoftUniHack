@extends ('layouts.master-admin')
@section('content')

    <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{ trans('levels.table_levels') }}</div>
                <div class="panel-body">
        <form class="form form-horizontal" role="form" method="POST" action="{{ url('/level') }}">
        {{ csrf_field() }}
            <div class="row">
                <div class="form-group col-md-6 col-md-push-3 {{ $errors->has('number') ? ' has-error' : '' }}">
                    <label>{{trans('levels.number')}}</label>
                    <input type="number" class="form-control" name="number" placeholder="{{trans('levels.number')}}" value="{{e(old('number'))}}">
                    @if ($errors->has('number'))
                                <span class="help-block">
                                   <strong>{{ $errors->first('number') }}</strong>
                                </span>
                            @endif
                </div>
        </div>
        <div class="row">
                <div class="form-group col-md-6 col-md-push-3  {{ $errors->has('levels') ? ' has-error' : '' }}">
                    <label>{{trans('levels.level')}}</label>
                    <textarea class="form-control" name="levels" placeholder="">{{ e(old('levels'))}} </textarea>
                    <?php if($errors->has('levels')): ?>
                        <span class="help-block">
                            <strong><?php echo e($errors->first('levels')); ?></strong>
                        </span>
                    <?php endif; ?>
                </div>
            </div>
        <div class="form-group input-group">
        <span class="input-group-btn">
            <button class="btn btn-primary" name="missionenter" type="submit" style="border-radius: 3px;">{{trans('levels.add_level')}}
            </button>
        </span>
        </div>
    </form>
    </div>
    </div>
    </div>
    </div>
    </div>

    @if (count($levels) > 0)
        <div class="row col-lg-9 col-md-pull-1">
            <div class="panel-body col-md-9 col-md-push-3">
                <table class="table table-striped table-bordered table-hover">
                    <div class="container-fluid">
                        <div>
                            <p class="col-md-6 col-md-push-4"><b>{{trans('levels.table_title')}}</b></p>
                        </div>

                        <div class="panel-body col-md-8 col-md-push-3" style="padding: 0;">
                            <table class="table table-striped table-bordered table-striped table-hover">

                    <!-- Table Headings -->
                    <thead>
                    <th>{{trans('levels.table_number')}}</th>
                    <th>{{trans('levels.table_levels')}}</th>
                    <th>{{trans('levels.update')}}</th>
                    <th>{{trans('levels.table_delete')}}</th>
                    </thead>

                    <!-- Table Body -->
                    <tbody>
                    @foreach ($levels as $level)
                        <tr>
                            <!-- Task Name -->
                            <td class="table-text">
                                <div class="col-md-6">{{ $level->number }}</div>
                            </td>
                            <td class="table-text">
                                <div class="col-md-6">{{ $level->levels }}</div>
                            </td>

                            <td width="17%;">
                                        <?php echo link_to_route('level-edit',  $title = e(trans('levels.update')), $parameters = array($level->id), $attributes = array('class' => 'btn btn-success fa fa-edit')); ?>
                            </td>

                            <td width="10%">
                                <form action="{{ url('level/'.$level->id) }}" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}

                                    <button type="submit" class="btn btn-danger">
                                        <i class="fa fa-trash"></i> {{trans('levels.td_delete')}}
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