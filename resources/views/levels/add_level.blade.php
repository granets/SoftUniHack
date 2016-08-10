@extends ('layouts.master-admin')
@section('content')

    <form class="form form-horizontal" role="form" method="POST" action="{{ url('/level') }}">
        {{ csrf_field() }}
        <div class="form-group col-md-9 col-md-push-3">
            <label>{{trans('levels.levels_title')}}</label>
            <p>{{trans('levels.number')}}</p>
            <input type="text" name="number" placeholder="Номер" class="form-control">
            <p>{{trans('levels.level')}}</p>
            <textarea class="form-control" name="levels" placeholder="{{trans('levels.level')}}"> </textarea>
        </div>
        <div class="form-group input-group">
        <span class="input-group-btn">
            <button class="btn btn-primary" name="levelenter" type="submit" style="border-radius: 3px; position:relative; top:190px;">{{trans('levels.add_level')}}
            </button>
        </span>
        </div>
    </form>

    @if (count($levels) > 0)
        <div>
            <div class="panel-body col-md-9 col-md-push-3">
                <table class="table table-striped table-bordered table-hover">
                    <div class="container-fluid">
                        <div>
                            <p class="col-md-6 col-md-push-3"><b>{{trans('levels.table_title')}}</b></p>
                        </div>

                        <div class="panel-body col-md-8 col-md-push-3" style="padding: 0;">
                            <table class="table table-striped table-bordered table-striped table-hover">

                    <!-- Table Headings -->
                    <thead>
                    <th>{{trans('levels.table_number')}}</th>
                    <th>{{trans('levels.table_levels')}}</th>
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

                            <td>
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